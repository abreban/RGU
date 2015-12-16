<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function permissions()
    {
    	return $this->belongsToMany(Permission::class);
    }
    public function givePermissionTo(Permission $permission)
    {
    	return $this->permissions()->save($permission);
    }
    public static function roleExist($role)
    {
    	$allRoles = Role::all();
        if(is_string($role)){
            return $allRoles->contains('name',$role);
        }
    }
}
