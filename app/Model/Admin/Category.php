<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    //
    protected $table = 'categories';
    protected $fillable = ['name','slug','parent'];
    public function products(){
        return $this->hasMany(Product::class,'cat_name','id');
    }
}
