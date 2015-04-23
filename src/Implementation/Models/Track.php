<?php
namespace AlienStream\Domain\Implementation\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Track extends Eloquent
{
    protected $guarded = [
        'id',
    ];
    protected $fillable = [
        'title',
        'rank',
        'thumbnail',
        'type',
        'favorite_count',
        'play_count',
        'artist_id',
    ];

    public function artist()
    {
        return $this->belongsTo('AlienStream\Domain\Implementation\Models\Artist');
    }

    public function communities()
    {
        return $this->belongsToMany('AlienStream\Domain\Implementation\Models\Community');
    }

    public function embeddable()
    {
        return $this->hasOne('AlienStream\Domain\Implementation\Models\Embeddable');
    }

}