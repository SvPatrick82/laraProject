<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

	public function permissions()// метод связи
	{
		// связывает автоматически в 3 таблице
		return $this->belongsToMany(Permission::class, 'roles_permissions');
	}
}
