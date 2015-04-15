<?php
namespace AlienStream\Domain\Implementation\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Post extends Eloquent
{
    protected $guarded = [
        'id',
    ];
    protected $fillable = [
        'title',
        'number_of_comments',
        'permalink',
        'content_url',
        'thumbnail',
        'likes',
        'dislikes',
        'submitter',
        'source_id'
    ];

    public function source() {
        return $this->belongsTo('AlienStream\Domain\Implementation\Models\Source');
    }
}