<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //

    public function getDs()
    {
        $selectArr = ['id','role_name'];
        return Role::get($selectArr);
        // return $this->get($selectArr);
    }
}
