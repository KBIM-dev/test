<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class companies extends Model
{
	public function projects() {
		return $this->hasMany('App\projects', 'company_id', 'id');
	}
}
