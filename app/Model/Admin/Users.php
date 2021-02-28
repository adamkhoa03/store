<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Users extends Model
{
    //
    use Searchable;
    protected $table = 'users';
    protected $fillable = ['email','full','password','address','phone','level','avatar'];

    public function searchableAs()
    {
        return 'Users_Index';
    }

    public function toSearchableArray()
    {
        return $this->only('email','full','phone','avatar');
    }

}
