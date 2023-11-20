<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SubscriptionPackage
 * 
 * @property int $package_id
 * @property string|null $package_name
 * @property string|null $description
 * @property int|null $duration_in_days
 * 
 * @property Collection|Subscription[] $subscriptions
 *
 * @package App\Models
 */
class SubscriptionPackage extends Model
{
	protected $table = 'subscription_packages';
	protected $primaryKey = 'package_id';
	public $timestamps = false;

	protected $casts = [
		'duration_in_days' => 'int'
	];

	protected $fillable = [
		'package_name',
		'description',
		'duration_in_days'
	];

	public function subscriptions()
	{
		return $this->hasMany(Subscription::class, 'package_id');
	}
}
