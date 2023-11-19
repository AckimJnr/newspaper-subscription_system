<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class District
 * 
 * @property int $district_id
 * @property string $district_code
 * @property string $district_name
 * @property string $region
 * 
 * @property Collection|UserDetail[] $user_details
 *
 * @package App\Models
 */
class District extends Model
{
	protected $table = 'districts';
	protected $primaryKey = 'district_code';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'district_id' => 'int'
	];

	protected $fillable = [
		'district_id',
		'district_name',
		'region'
	];

	public function user_details()
	{
		return $this->hasMany(UserDetail::class, 'district_code');
	}
}
