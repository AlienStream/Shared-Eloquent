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

    public function trending()
    {
        // TODO: Implement trending() method.
    }

    public function popular()
    {
        // TODO: Implement popular() method.
    }
}