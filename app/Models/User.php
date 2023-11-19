<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class User
 * 
 * @property int $user_id
 * @property string $first_name
 * @property string $last_name
 * @property string $username
 * @property string $email
 * @property string|null $company_name
 * @property string $sex
 * @property string $password
 * @property string $account_id
 * 
 * @property Role $role
 * @property Collection|UserDetail[] $user_details
 *
 * @package App\Models
 */
class User extends Model implements AuthenticatableContract
{
	use HasFactory, Authenticatable, HasApiTokens;
	protected $table = 'users';
	protected $primaryKey = 'account_id';
	public $incrementing = false;
	public $timestamps = true;

	protected $casts = [
		'user_id' => 'int'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'user_id',
		'first_name',
		'last_name',
		'username',
		'email',
		'company_name',
		'sex',
		'password'
	];

	public function role()
	{
		return $this->hasOne(Role::class, 'account_id');
	}

	public function user_details()
	{
		return $this->hasMany(UserDetail::class, 'account_id');
	}
}
