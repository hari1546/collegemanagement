<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Picture;

class Seminars extends Model
{
    use HasFactory;
    protected $fillable=[
        'topic',
        'resource_person',
        'department_name',
        'year',
        'date',
        'time',
        'cover',
        'message'



    ];

    public function picture()
    {
      return $this->hasMany(Picture::class);
    }
}
