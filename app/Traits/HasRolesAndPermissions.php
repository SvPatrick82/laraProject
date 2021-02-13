<?php

namespace App\Traits;

use App\Models\Role;

trait HasRolesAndPermissions{

	public function roles()
	{
		return $this->belongsToMany(Role::class, 'users_roles');
	}


}
