<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    // //لازم تتكتب لو هنعمل اى ابديت او انسيرت او ححذف عشان تسمح بالتعيين الجماعى
    // protected $fillable = [
    //     'Product_name',
    //     'description',
    //     'section_id',
    // ];
     protected $guarded = [];

   public function section()
   {
   return $this->belongsTo('App\Models\sections');
   }
}
