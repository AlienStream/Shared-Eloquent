<?php
namespace AlienStream\Domain\Implementation\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Source extends Eloquent
{
    protected $guarded = [
        'id',
    ];
    protected $fillable = [
        'title',
        'description',
        'type',
        'importance',
        'url',
        'thumbnail',
        'refresh_frequency'
    ];

    public function communities()
    {
        return $this->belongsToMany('AlienStream\Domain\Implementation\Models\Community');
    }

    public function posts()
    {
        return $this->hasMany('AlienStream\Domain\Implementation\Models\Post');
    }

    public function tracks()
    {
        return $this
            ->belongsToMany('AlienStream\Domain\Implementation\Models\Track')
            ->where('content_flags', '<', '5')
            ->orderBy('rank', 'DESC');
    }
}