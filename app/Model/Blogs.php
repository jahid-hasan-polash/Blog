<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    public function user(){
    	return $this->belongsTo('App\Model\User','user_id','id');
    }

    public function catagory(){
    	return $this->belongsTo('App\Model\Catagory','catagory_id','id');
    }
}
