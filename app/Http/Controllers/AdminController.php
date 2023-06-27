<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Image;
use App\Models\Events;
use App\Models\Categories;
use App\Models\Seminars;
use App\Models\Picture;
use CreatePicturesTable;
use Illuminate\Support\Facades\Redirect;
use PhpParser\Builder\Function_;
use PhpParser\Parser\Multiple;
use Illuminate\Support\Facades\File;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{



    public function  user()
    {
       $data= $data=user::all();
      return view("admin.users",compact("data"));
    }

    public function deleteuser($id)
    {
        $data=user::find($id);
        $data->delete();
        return Redirect()->back();

    }


    public function  model()
    {

      $iterm_data  = events::all();

     return view("admin.model",compact("iterm_data" ));
    //   return Excel::download(new Events,'events.xlsx');
    }

    public function  search(Request $request)
    {
      $search=$request->search;
      $iterm_data  = events::where('name','like','%'.$search.'%')->orWhere('department_name','like','%'.$search.'%')
      ->get();
      return view("admin.model",compact("iterm_data" ));
    }
    public function  searchevent(Request $request)
    {
      $from_date=$request->from_date;
      $to_date=$request->to_date;
      $iterm_data=events::whereBetween('date', [$from_date, $to_date])->get();

      return view("admin.model",compact("iterm_data" ));
    }


    public function deletemodel($id)
    {
        $iterm_data =events::find($id);

        if (File::exists("brochure/".$iterm_data ->brochure)) {
            File::delete("brochure/".$iterm_data ->brochure);
        }
        $images=Image::where("events_id",$iterm_data ->id)->get();
        foreach($images as $image){
        if (File::exists("images/".$image->image)) {
           File::delete("images/".$image->image);
       }
        }
        $iterm_data ->delete();

        return redirect()->back();

    }

    public function updateview($id)
    {
        $iterm_data  = events::find($id);
        return view("admin.updateview",compact("iterm_data"));
    }

    public function showmodel($id)
    {

        $iterm_data  = events::find($id);
        return view("admin.showmodel",compact("iterm_data"));
    }
    public function invoice($id)
    {
        $iterm_data  = events::find($id);
       $data = [
        'iterm_data' => $iterm_data ,

        ];
        $pdf = PDF::loadView('admin.invoice', $data);

        return $pdf->download('Dmi Events.pdf');
    }



    //////////////////////// UPDATE VIEW //////////////////////////////
    public function update(Request $request, $id)
    {
        $iterm_data  = events::find($id);

          if($request->hasFile("brochure")){
             if (File::exists("brochure/".$iterm_data ->brochure)) {
                 File::delete("brochure/".$iterm_data->brochure);
             }
             $file=$request->file("brochure");
             $iterm_data->brochure=time()."_".$file->getClientOriginalName();
             $file->move(\public_path("/brochure"),$iterm_data->brochure);
             $request['brochure']=$iterm_data->brochure;
         }

            $iterm_data->update([
                 "name" =>$request->name,
                 "department_name" =>$request->department_name,
                 "year" =>$request->year,
                 "category" =>$request->category,
                 "date" =>$request->date,
                 "duration" =>$request->duration,
                 "sponsor" =>$request->sponsor,
                 "brochure"=>$iterm_data->brochure,
             ]);


            if($request->hasFile("images")){
                $files=$request->file("images");
                foreach($files as $file)
                {
                   $imageName=time().'_'.$file->getClientOriginalName();
                    $request["events_id"]=$id;
                    $request["image"]=$imageName;
                    $file->move(\public_path("images"),$imageName);
                    Image::create($request->all());
                    $iterm_data ->save();
                   return redirect()->back();

        }

        }
    }






  //////////////////////ADD NEW ///////////////////////////
    public function  upload(Request $request)
    {

//dd( $request->all);


        if($request->hasFile("brochure"))
        {
            $file=$request->file("brochure");
            $imageName=time().'_'.$file->getClientmOriginalName();
            $file->move(\public_path("/brochure"),$imageName);

            $iterm_data = new events([
                "name" =>$request->name,
                
                "department_name" =>$request->department_name,
                "year" =>$request->year,
                "category" =>$request->category,
                "resource_person" =>$request->resource_person,
                "topic" =>$request->topic,
                "date" =>$request->date,
                "duration" =>$request->duration,
                "sponsor" =>$request->sponsor,
                "brochure" =>$imageName,
            ]);
           $iterm_data->save();
        }



        if($request->hasFile("images")){
            $files=$request->file("images");
            foreach($files as $file){
                $imageName=time().'_'.$file->getClientOriginalName();
                $request['events_id']=$iterm_data->id;
                $request['image']=$imageName;
                $file->move(\public_path("/images"),$imageName);
                Image::create($request->all());

            }
        }

        return redirect()->back();
    }




    public function deletebrochure($id){
     $brochure=Events::findOrFail($id)->brochure;
        if (File::exists("brochure/".$brochure)) {
           File::delete("brochure/".$brochure);
         }
        return redirect()->back();
     }



     public function deleteimage($id){
          $images=Image::findOrFail($id);
          if (File::exists("images/".$images->image)) {
            File::delete("images/".$images->image);
        }

        Image::find($id)->delete();
        return redirect()->back();

    }


   public function addnew()
    {
        $iterm_data =events::all();
        return view("admin.addnew",compact("iterm_data"));


    }





    public function  uploadsemi(Request $request)
    {
       if($request->hasFile("cover"))
        {
            $file=$request->file("cover");
            $imageName=time().'_'.$file->getClientOriginalName();
            $file->move(\public_path("/cover"),$imageName);

            $iterm_data = new Seminars([
                "topic" =>$request->topic,
                "resource_person" =>$request->resource_person,
                "department_name" =>$request->department_name,
                "year" =>$request->year,
                "time" =>$request->time,
                "date" =>$request->date,
                "cover" =>$imageName,
                "message" =>$request->message,

            ]);
           $iterm_data->save();
        }
          if($request->hasFile("picture")){
            $files=$request->file("picture");
            foreach($files as $file){
                $imageName=time().'_'.$file->getClientOriginalName();
                $request['seminars_id']=$iterm_data->id;
                $request['picture']=$imageName;
                $file->move(\public_path("/picture"),$imageName);
                Picture::create($request->all());


            }
        }

        return redirect()->back();
    }


    // public function addnew(Request $request)
    // {
    //     $data = new  Events();
    //     return view("admin.add",compact("data"));


    // }
    public function categoryview()
    {
        $data=categories::all();
        return view("admin.categoryview",compact("data"));
    }


    public function  uploadcategory(Request $request)
    {

       $data= new Categories();


       $data->name=$request->name;
       $data->description=$request->description;

       $data->save();
       return redirect()->back();
    }

    public function deletecategory($id)
    {
        $data=Categories::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function updatecategory($id)
    {
        $data= Categories::find($id);
        return view("admin.updatecategory",compact("data"));

    }
    public function updatenew(Request $request,$id)
    {
         $data=Categories::find($id);


         $data->name=$request->name;
         $data->description=$request->description;

         $data->save();
         return redirect()->back();



    }
    public function categoryadd()
    {
        $data=Categories::all();
        return view("admin.categoryadd",compact("data"));


    }

    public function semi()
    {
        $iterm_data= Seminars::all();
        return view("admin.semi",compact("iterm_data"));
    }
    public function semiadd()
    {
        $iterm_data= Seminars::all();
        return view('admin.semiadd',compact('iterm_data'));
    }


    //  public function  uploadsemi(Request  $request,)
    //  {
    //     $iterm_data = new seminars;
    //     $image = $request->image;

    //    $imagename =time().'.'.$image->getClientOriginalExtension();

    //    $request->image->move('seminarimage',$imagename);



    //     $iterm_data ->image=$imagename;

    //     $iterm_data ->topic=$request->topic;
    //     $iterm_data->resource_person=$request->resource_person;
    //     $iterm_data ->department_Name=$request->department_Name;
    //     $iterm_data ->year=$request->year;
    //     $iterm_data ->date=$request->date;
    //     $iterm_data->time=$request->time;
    //     $iterm_data ->message=$request->message;

    //     $iterm_data->save();


    //     return redirect()->back();


    // }
     public function deletesemi($id)
    {
         $iterm_data=Seminars::find($id);
         $iterm_data->delete();
         return redirect()->back();
    }

    public function updatesemi($id)
    {
       $iterm_data=Seminars::find($id);
       return view('admin.updatesemi',compact('iterm_data'));
    }


     public function showsemi($id)
    {
         $iterm_data  = Seminars::find($id);
         return view("admin.showsemi",compact("iterm_data"));
    }

    // public function sheet()
    // {
    //     return (new Events)->download('events.xlsx');
    // }

    public function updatedetails(Request $request,$id)
    {
        $iterm_data  = Seminars::find($id);
        $image = $request->image;

       $imagename =time().'.'.$image->getClientOriginalExtension();

       $request->image->move('seminarimage',$imagename);



        $iterm_data ->image=$imagename;

        $iterm_data ->topic=$request->topic;
        $iterm_data->resource_person=$request->resource_person;
        $iterm_data ->department_Name=$request->department_Name;
        $iterm_data ->year=$request->year;
        $iterm_data ->date=$request->date;
        $iterm_data->time=$request->time;
        $iterm_data ->message=$request->message;

        $iterm_data->save();
        return redirect()->back();




    }


    public function details($id)
    {

        $iterm_data  = Seminars::find($id);
        $data = [
         'iterm_data' => $iterm_data ,

         ];
         $pdf = PDF::loadView('admin.details', $data);

         return $pdf->download('Seminar Details.pdf');
    }
















}
