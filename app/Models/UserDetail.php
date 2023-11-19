<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserDetail
 * 
 * @property int $user_detail_id
 * @property string $account_id
 * @property string $district_code
 * @property string $physical_address
 * @property string $country
 * @property string $phone_number
 * 
 * @property User $user
 * @property District $district
 *
 * @package App\Models
 */
class UserDetail extends Model
{
	protected $table = 'user_details';
	protected $primaryKey = 'user_detail_id';
	public $timestamps = false;

	protected $fillable = [
		'account_id',
		'district_code',
		'physical_address',
		'country',
		'phone_number'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'account_id');
	}

	public function district()
	{
		return $this->belongsTo(District::class, 'district_code');
	}
}
