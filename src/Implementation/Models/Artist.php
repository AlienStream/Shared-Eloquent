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
        'user_id',
        'favorite_count',
        'play_count',
    ];

    public function channels()
    {
        return $this->hasMany('AlienStream\Domain\Implementation\Models\Channel');
    }

    public function generes()
    {
        return $this->belongsToMany('AlienStream\Domain\Implementation\Models\Genre');
    }

    public function tracks()
    {
        return $this->hasMany('AlienStream\Domain\Implementation\Models\Track');
    }

    public function user()
    {
        return $this->belongsTo('AlienStream\Domain\Implementation\Models\User');
    }
}