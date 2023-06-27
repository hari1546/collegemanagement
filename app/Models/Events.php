<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;

class Events extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'topic',
        'resource_person',
        'department_name',
        'year',
        'category',
        'date',
        'duration',
        'sponsor',
        'report',
        'brochure',
    ];

   public function images()
   {
        return $this->hasMany(image::class);
   }
}
