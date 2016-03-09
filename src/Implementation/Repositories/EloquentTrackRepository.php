<?php
namespace AlienStream\Domain\Implementation\Repositories;

use AlienStream\Domain\Contracts\Repositories\TrackRepository;
use AlienStream\Domain\Implementation\Models\Track;

class EloquentTrackRepository extends EloquentAbstractRepository implements TrackRepository
{
    function __construct(Track $model)
    {
        $this->model = $model;
    }

    public function find($id) {
        return $this->model
            ->where('id','=', $id)
            ->with('embeddable')
            ->firstOrFail();
    }

    public function all() {
        return $this->model
            ->with('embeddable')
            ->orderBy('rank', 'DESC')
            ->get();
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