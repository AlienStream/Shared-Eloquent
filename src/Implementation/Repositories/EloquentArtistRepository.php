<?php
namespace Alienstream\Domain\Implementation\Repositories;

use Alienstream\Domain\Contracts\Repositories\ArtistRepository;
use Alienstream\Domain\Implementation\Models\Artist;

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