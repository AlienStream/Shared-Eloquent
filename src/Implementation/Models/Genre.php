<?php
namespace AlienStream\Domain\Implementation\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Genre extends Eloquent
{
    protected $guarded = [
        'id',
    ];
    protected $fillable = [
        'name',
        'description',
        'thumbnail'
    ];

    public function artists()
    {
        return $this->belongsToMany('AlienStream\Domain\Implementation\Models\Artist');
    }

    public function communities()
    {
        return $this->belongsToMany('AlienStream\Domain\Implementation\Models\Community');
    }

}