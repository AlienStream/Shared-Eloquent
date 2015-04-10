<?php
namespace Alienstream\Domain\Implementation\Repositories;

use Alienstream\Domain\Contracts\Repositories\UserRepository;
use Alienstream\Domain\Implementation\Models\User;

class EloquentUserRepository extends EloquentAbstractRepository implements UserRepository
{
    function __construct(User $model)
    {
        $this->model = $model;
    }
}