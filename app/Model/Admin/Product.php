<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'products';
    protected $fillable = ['prd_code','prd_name','slug','prd_price','prd_featured','prd_status','prd_properties','prd_details','prd_img','cat_name'];
    public function category(){
        return $this->belongsTo(Category::class,'cat_name','id');
    }
}
