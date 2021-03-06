<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['form', 'json'];
}
