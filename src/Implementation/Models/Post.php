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
        'thumbnail',
        'likes',
        'dislikes',
        'submitter',
        'source_id',
        'is_new',
        'posted_at',
    ];

    public function source() {
        return $this->belongsTo('AlienStream\Domain\Implementation\Models\Source');
    }
}