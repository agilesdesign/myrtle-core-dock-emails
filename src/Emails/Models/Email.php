<?php

namespace Myrtle\Core\Emails\Models;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    protected $fillable = ['address'];

	public function emailable()
	{
		return $this->morphTo();
	}
}
