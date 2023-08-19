<?php

namespace App\Models;


use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class ListContactBlog extends Model
{
    use HasFactory;

    public function folders(){
        return $this->belongsTo('App\Models\Folder');
    }
    public function contacts(){
        return $this->hasMany('App\Models\Contact');
    }
}