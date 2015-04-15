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

    public function trending()
    {
        // TODO: Implement trending() method.
    }

    public function popular()
    {
        // TODO: Implement popular() method.
    }

    public function newest()
    {
        // TODO: Implement newest() method.
    }
}