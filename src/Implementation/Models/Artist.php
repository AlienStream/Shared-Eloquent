<?php
namespace AlienStream\Domain\Implementation\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Artist extends Eloquent
{
    protected $guarded = [
        'id'
    ];
    protected $fillable = [
        'name',
        'thumbnail',
        'favorite_count',
        'play_count',
    ];

    public function channels()
    {
        return $this->hasMany('AlienStream\Domain\Implementation\Models\Channel');
    }

    public function genres()
    {
        return $this->belongsToMany('AlienStream\Domain\Implementation\Models\Genre');
    }

    public function tracks()
    {
        return $this->hasManyThrough(
            'AlienStream\Domain\Implementation\Models\Track',
            'AlienStream\Domain\Implementation\Models\Channel'
        );
    }
}