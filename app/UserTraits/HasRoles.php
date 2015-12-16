<?php
namespace App\UserTraits;
use App\Role;

trait HasRoles{
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
    public function hasRole($role)
    {
        if(is_string($role)){
            return $this->roles->contains('name',$role);
        }
        foreach ($role as $r) {
            if($this->hasRole($r->name)){
                return true;
            }
        }
        return false;
    }
    public function assignRole($role)
    {
        return $this->roles()->save(Role::whereName($role)->firstOrFail());
    }
    public function removeRole($role)
    {
        return $this->roles()->detach(Role::whereName($role)->firstOrFail());
    }
    public function isAdmin()
    {
        return $this->hasRole('EM_LIVE_SYS_ADMIN');
    }
    public function isOEMAdmin()
    {
        return $this->hasRole('EM_LIVE_OEM_ADMIN');
    }
}