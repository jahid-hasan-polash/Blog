<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Catagory extends Model
{
    protected $table='catagory';

    public function blog(){
    	return $this->hasMany('App\Model\Blogs','catagory_id','id');
    }
}
