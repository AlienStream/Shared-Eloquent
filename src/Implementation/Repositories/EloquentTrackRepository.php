<?php
namespace Alienstream\Domain\Implementation\Repositories;

use Alienstream\Domain\Contracts\Repositories\TrackRepository;
use Alienstream\Domain\Implementation\Models\Track;

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