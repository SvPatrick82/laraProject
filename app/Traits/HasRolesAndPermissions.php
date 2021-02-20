<?php

namespace App\Traits;

use App\Models\Permission;
use App\Models\Role;

trait HasRolesAndPermissions{

	public function roles()
	{
		return $this->belongsToMany(Role::class, 'users_roles');
	}

	public function permissions()
	{
		return $this->belongsToMany(Permission::class, 'users_permissions');
	}

	public function hasRole($role)
	{
		// метод contains(поиск слага в строке $role)
		return $this->roles->contains('slug',$role);
	}
	public function hasPermission($permission)
	{
		// метод contains(поиск слага в строке $role)
		return $this->permissions->contains('slug',$permission);
	}

}
