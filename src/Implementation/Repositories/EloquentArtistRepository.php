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

    public function trending()
    {
        // TODO: Implement trending() method.
    }

    public function popular()
    {
        // TODO: Implement popular() method.
    }
}