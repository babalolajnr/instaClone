<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage(){
        return '/storage/' .($this->image) ? $this->image : 'profile/V0VYtfwB6X02ouCPcBVEOavKh4gnH6NfZeD9RFHV.png' ;
    }

    public function followers ()
    {
        return $this->belongsToMany(User::class);
    }
    
    public function user(){
        return $this->belongsTo(User::class);
    }
}
