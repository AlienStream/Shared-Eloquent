<?php
namespace AlienStream\Domain\Implementation\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Embeddable extends Eloquent
{
	protected $guarded = [
		'id',
	];
	protected $fillable = [
		'track_id',
		'url',
		'type',
	];

	public function channel()
	{
		return $this->belongsTo('AlienStream\Domain\Implementation\Models\Channel');
	}

	public function track()
	{
		return $this->belongsTo('AlienStream\Domain\Implementation\Models\Track');
	}
}