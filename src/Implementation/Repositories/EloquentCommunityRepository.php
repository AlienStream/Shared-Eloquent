<?php
namespace Alienstream\Domain\Implementation\Repositories;

use Alienstream\Domain\Contracts\Repositories\CommunityRepository;
use Alienstream\Domain\Implementation\Models\Community;

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