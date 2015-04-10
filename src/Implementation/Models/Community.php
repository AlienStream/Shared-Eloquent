<?php
namespace Alienstream\Domain\Implementation\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Community extends Eloquent
{

    const PLAY_COUNT_IMPORTANCE = .1;
    const FAVORITE_COUNT_IMPORTANCE = .5;

    protected $guarded = [
        'id',
        'play_count',
        'favorite_count',
    ];
    protected $fillable = [
        'name',
        'description',
        'thumbnail'
    ];

    public function getPopularity()
    {
        $rating = 0;
        $rating += self::PLAY_COUNT_IMPORTANCE * $this->play_count;
        $rating += self::FAVORITE_COUNT_IMPORTANCE * $this->favorite_count;
        return $rating;
    }

    public function genres()
    {
        return $this->belongsToMany('Genre');
    }

    public function sources()
    {
        return $this->belongsToMany('Source');
    }

    public function allTracks()
    {
        return $this->hasMany('Track', 'community_alltracks');
    }

    public function monthTracks()
    {
        return $this->hasMany('Track', 'community_monthtracks');
    }

    public function weekTracks()
    {
        return $this->hasMany('Track', 'community_weektracks');
    }

    public function tracks()
    {
        return $this->hasMany('Track', 'community_tracks');
    }
}