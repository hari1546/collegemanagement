<?php

namespace App\Models;
use App\Models\Seminars;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    use HasFactory;
    protected $fillable=[
        'picture',
        'seminars_id',
    ];
    public function seminars()
    {
        return $this->belongsTo(Seminars::class);
    }
}
