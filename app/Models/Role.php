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
 * @property string $account_id
 * @property string $role
 * 
 * @property User $user
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
