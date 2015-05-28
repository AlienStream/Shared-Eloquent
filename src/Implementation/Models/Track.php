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
        'favorite_count',
        'play_count',
        'channel_id',
    ];

    public function channel()
    {
        return $this->belongsTo('AlienStream\Domain\Implementation\Models\Channel');
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