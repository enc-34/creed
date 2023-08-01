<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class contact extends Model
{
    use HasFactory;
    public function user1s(){
        return $this->hasMany('App\Models\User1');
    }
    public function listcontactblogs(){
        return $this->belongsTo('App\Models\ListContactBlog');
    }
}
