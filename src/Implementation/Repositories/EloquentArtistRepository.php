<?php
namespace AlienStream\Domain\Implementation\Repositories;

use AlienStream\Domain\Contracts\Repositories\ArtistRepository;
use AlienStream\Domain\Implementation\Models\Artist;

class EloquentArtistRepository extends EloquentAbstractRepository implements ArtistRepository
{

    function __construct(Artist $model)
    {
        $this->model = $model;
    }

    public function find($id) {
        return $this->model
            ->where('id','=', $id)
            ->with('tracks')
            ->with('channels')
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