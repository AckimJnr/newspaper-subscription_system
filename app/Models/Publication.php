<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Publication
 * 
 * @property int $publication_id
 * @property string $tag
 * @property string|null $name
 * @property float|null $price
 * @property string|null $feature_image
 * @property string|null $description
 * 
 * @property Collection|Post[] $posts
 *
 * @package App\Models
 */
class Publication extends Model
{
	protected $table = 'publications';
	protected $primaryKey = 'tag';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'publication_id' => 'int',
		'price' => 'float'
	];

	protected $fillable = [
		'publication_id',
		'name',
		'price',
		'feature_image',
		'description'
	];

	public function posts()
	{
		return $this->hasMany(Post::class, 'publication_tag');
	}
}
