<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PublicationAccess
 * 
 * @property int $access_id
 * @property string|null $account_id
 * @property int|null $post_id
 * 
 * @property User|null $user
 * @property Post|null $post
 *
 * @package App\Models
 */
class PublicationAccess extends Model
{
	protected $table = 'publication_access';
	protected $primaryKey = 'access_id';
	public $timestamps = false;

	protected $casts = [
		'post_id' => 'int'
	];

	protected $fillable = [
		'account_id',
		'post_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'account_id');
	}

	public function post()
	{
		return $this->belongsTo(Post::class);
	}
}
