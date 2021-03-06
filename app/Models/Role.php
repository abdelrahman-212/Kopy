<?php

namespace App\Models;

use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{
	protected $guarded = [];

	public function permissions()
	{
		return $this->belongsToMany(Permission::class);
	}
}