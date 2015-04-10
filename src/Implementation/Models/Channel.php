<?php
namespace Alienstream\Domain\Implementation\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Channel extends Eloquent
{
    protected $guarded = [
        'id'
    ];
    protected $fillable = [
        'url',
        'artist_id'
    ];

    public function artists()
    {
        return $this->belongsTo('Artist');
    }

    public function tracks()
    {
        return $this->hasMany('Track');
    }
}