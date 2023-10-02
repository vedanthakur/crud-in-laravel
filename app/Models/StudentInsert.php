<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentInsert extends Model
{
    protected $table = 'student_details';
	public $timestamps = true;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'first_name', 'last_name','city_name', 'email',
	];
}
