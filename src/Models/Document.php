<?php

namespace Webhoek\FilamentGenerativeAi\Models;

use Ramsey\Uuid\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
	use HasFactory;

	public $fillable = ['embed_collection_id', 'text', 'embedding'];
	public $incrementing = false;

	protected static function booted()
	{
		static::creating(function ($model) {
			$model->id = Uuid::uuid4()->toString();
		});
	}
}
