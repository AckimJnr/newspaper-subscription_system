<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Post
 * 
 * @property int $post_id
 * @property string $publication_tag
 * @property string $publication_document
 * @property string|null $front_page_image
 * @property string|null $headline
 * @property string|null $publisher
 * 
 * @property Publication $publication
 * @property Collection|PublicationAccess[] $publication_accesses
 *
 * @package App\Models
 */
class Post extends Model
{
	protected $table = 'posts';
	protected $primaryKey = 'post_id';
	public $timestamps = false;

	protected $fillable = [
		'publication_tag',
		'publication_document',
		'front_page_image',
		'headline',
		'publisher'
	];

	public function publication()
	{
		return $this->belongsTo(Publication::class, 'publication_tag');
	}

	public function publication_accesses()
	{
		return $this->hasMany(PublicationAccess::class);
	}
}
