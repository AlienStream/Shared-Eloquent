<?php
namespace AlienStream\Domain\Implementation\Models;

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
        return $this->belongsTo('AlienStream\Domain\Implementation\Models\Artist');
    }

    public function embeddables()
    {
        return $this->hasMany('AlienStream\Domain\Implementation\Models\Embeddable');
    }
}