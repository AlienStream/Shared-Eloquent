<?php
namespace Alienstream\Domain\Implementation\Models;

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
        'embed_id',
        'artist_id',
        'channel_id',
    ];

    public function artist()
    {
        return $this->belongsTo('Artist');
    }

    public function channel()
    {
        return $this->belongsTo('Channel');
    }

    public function communities()
    {
        return $this->belongsToMany('Community');
    }

}