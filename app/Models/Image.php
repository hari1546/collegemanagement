<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Events;


class image extends Model
{
    use HasFactory;
    protected $fillable=[
        'image',
        'events_id',
    ];
    public function Events()
    {
        return $this->belongsTo(Events::class);
    }
}
