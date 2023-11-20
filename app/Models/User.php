<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

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
 * @property Carbon|null $email_verified_at
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|PublicationAccess[] $publication_accesses
 * @property Role $role
 * @property Collection|Subscription[] $subscriptions
 * @property Collection|UserDetail[] $user_details
 *
 * @package App\Models
 */
class User extends Model
{
	protected $table = 'users';
	protected $primaryKey = 'account_id';
	public $incrementing = false;

	protected $casts = [
		'user_id' => 'int',
		'email_verified_at' => 'datetime'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'user_id',
		'first_name',
		'last_name',
		'username',
		'email',
		'company_name',
		'sex',
		'password',
		'email_verified_at',
		'remember_token'
	];

	public function publication_accesses()
	{
		return $this->hasMany(PublicationAccess::class, 'account_id');
	}

	public function role()
	{
		return $this->hasOne(Role::class, 'account_id');
	}

	public function subscriptions()
	{
		return $this->hasMany(Subscription::class, 'account_id');
	}

	public function user_details()
	{
		return $this->hasMany(UserDetail::class, 'account_id');
	}
}
