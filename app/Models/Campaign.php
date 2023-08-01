<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class campaign extends Model
{
    use HasFactory;
    public function user1s(){
        return $this->belongsTo('App\Models\User1');
    }
}
