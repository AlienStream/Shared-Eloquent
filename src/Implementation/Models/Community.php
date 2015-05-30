<?php
namespace AlienStream\Domain\Implementation\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Community extends Eloquent
{
    const PLAY_COUNT_IMPORTANCE = .1;
    const FAVORITE_COUNT_IMPORTANCE = .5;

    protected $table = 'communities';

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
        return $this->belongsToMany('AlienStream\Domain\Implementation\Models\Genre');
    }

    public function sources()
    {
        return $this->belongsToMany('AlienStream\Domain\Implementation\Models\Source');
    }


    public function moderators()
    {
        return $this->hasMany('AlienStream\Domain\Implementation\Models\User', 'user_moderated_communities');
    }
}