<?php
namespace AlienStream\Domain\Implementation\Repositories;

use AlienStream\Domain\Contracts\Repositories\UserRepository;
use AlienStream\Domain\Implementation\Models\User;

class EloquentUserRepository extends EloquentAbstractRepository implements UserRepository
{
    function __construct(User $model)
    {
        $this->model = $model;
    }
}