<?php
namespace Alienstream\Domain\Implementation\Models;

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
        'thumbnail'
    ];

    public function communities()
    {
        return $this->belongsToMany('Community');
    }

    public function posts()
    {
        return $this->hasMany('Post');
    }
}