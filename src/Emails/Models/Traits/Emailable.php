<?php

namespace Myrtle\Core\Emails\Models\Traits;


use Myrtle\Emails\Models\Email;

trait Emailable
{
	public function emails()
	{
		return $this->morphMany(Email::class, 'emailable');
	}
}