<?php
namespace AlienStream\Domain\Implementation\Repositories;

use AlienStream\Domain\Contracts\Repositories\CommunityRepository;
use AlienStream\Domain\Implementation\Models\Community;

class EloquentCommunityRepository extends EloquentAbstractRepository implements CommunityRepository
{
    function __construct(Community $model)
    {
        $this->model = $model;
    }

    public function byName($name)
    {
        return $this->model
            ->where('name','=', $name)
            ->with('genres')
            ->with('sources')
            ->firstOrFail();
    }

    public function trending()
    {
        return $this->model
            ->orderBy('play_count', 'DESC')
            ->take(9)
            ->get();
    }

    public function popular()
    {
        return $this->model
            ->orderBy('favorite_count', 'DESC')
            ->take(9)
            ->get();
    }

    public function newest()
    {
        return $this->model
            ->orderBy('created_at', 'DESC')
            ->take(9)
            ->get();
    }
}