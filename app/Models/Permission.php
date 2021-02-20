<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

	public function roles()
	{
		// связывает автоматически в 3 таблице roles_permissions
		return $this->belongsToMany(Role::class, 'roles_permissions');
	}
}
