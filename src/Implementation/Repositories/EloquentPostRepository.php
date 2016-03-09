<?php
namespace AlienStream\Domain\Implementation\Repositories;

use AlienStream\Domain\Contracts\Repositories\PostRepository;
use AlienStream\Domain\Implementation\Models\Post;

class EloquentPostRepository extends EloquentAbstractRepository implements PostRepository
{
    function __construct(Post $model)
    {
        $this->model = $model;
    }

    public function byUrl($url) {
        return $this->model
            ->where('embed_url', '=', $url)
            ->get();
    }
}