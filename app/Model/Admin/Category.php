<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Category extends Model
{
    //
    use Searchable;
    protected $table = 'categories';
    protected $fillable = ['name','slug','parent'];
    public function products(){
        return $this->hasMany(Product::class,'cat_name','id');
    }

    public function searchableAs(){
        return 'Category_Index';
    }

    public function toSearchableArray()
    {
        return $this->only('name');
    }
}
