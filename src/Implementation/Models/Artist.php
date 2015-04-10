<?php
namespace Alienstream\Domain\Implementation\Models;

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
        return $this->hasMany('Channel');
    }

    public function generes()
    {
        return $this->belongsToMany('Genre');
    }

    public function tracks()
    {
        return $this->hasMany('Track');
    }

    public function user()
    {
        return $this->belongsTo('User');
    }
}