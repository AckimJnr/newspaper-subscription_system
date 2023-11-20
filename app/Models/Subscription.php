<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Subscription
 * 
 * @property int $subscription_id
 * @property string $account_id
 * @property Carbon $subscription_date
 * @property Carbon $expiry_date
 * @property int $package_id
 * @property int $active
 * @property float $subscription_total
 * 
 * @property User $user
 * @property SubscriptionPackage $subscription_package
 *
 * @package App\Models
 */
class Subscription extends Model
{
	protected $table = 'subscriptions';
	protected $primaryKey = 'subscription_id';
	public $timestamps = false;

	protected $casts = [
		'subscription_date' => 'datetime',
		'expiry_date' => 'datetime',
		'package_id' => 'int',
		'active' => 'int',
		'subscription_total' => 'float'
	];

	protected $fillable = [
		'account_id',
		'subscription_date',
		'expiry_date',
		'package_id',
		'active',
		'subscription_total'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'account_id');
	}

	public function subscription_package()
	{
		return $this->belongsTo(SubscriptionPackage::class, 'package_id');
	}
}
