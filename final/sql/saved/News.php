<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
   protected $table ="news";

   public function SubCategory(){
      return $this->belongsTo('App\SubCategory','idSubcategory','id');
   }
   
   public function Comment(){
      return $this->hasMany('App\Comment','idNews','id');
   }
}
