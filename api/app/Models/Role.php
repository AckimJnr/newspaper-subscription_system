<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Role
 * 
 * @property int $role_id
 * @property string|null $account_id
 * @property string|null $role
 * 
 * @property User|null $user
 *
 * @package App\Models
 */
class Role extends Model
{
	protected $table = 'roles';
	protected $primaryKey = 'role_id';
	public $timestamps = false;

	protected $fillable = [
		'account_id',
		'role'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'account_id');
	}
}
