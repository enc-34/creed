<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class user1 extends Model
{
    use HasFactory;
    
    public function campaigns(){
        return $this->hasMany('App\Models\Campaign');
    }
      
    public function folders(){
        return $this->belongsToMany('App\Models\Folder');
    }
      
    public function accounts(){
        return $this->hasMany('App\Models\Account');
    }
}
