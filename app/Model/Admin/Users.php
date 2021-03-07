<?php

namespace App\Model\Admin;

use App\Http\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Users extends Authenticatable
{
    //
    use Searchable;
    protected $table = 'users';
    protected $fillable = ['email','full','password','address','phone','level','avatar','social_id'];

    public function searchableAs()
    {
        return 'Users_Index';
    }

    public function toSearchableArray()
    {
        return $this->only('email','full','phone','avatar');
    }

}
