<?php
namespace AlienStream\Domain\Implementation\Repositories;

use AlienStream\Domain\Contracts\Repositories\AbstractRepository;

/**
 * Class EloquentAbstractRepository
 * @package AlienStream\Domain\Implementation\Repositories
 */
class EloquentAbstractRepository implements AbstractRepository
{
    protected $model;

    /**
     * Uses Eloquent to get All The Entities
     * @return mixed
     */
    public function all()
    {
        return $this->model->all();
    }

    /**
     * Uses Eloquent to find a Object by ID
     * @param int $id
     * @return mixed
     */
    public function find($id)
    {
        return $this->model->find($id);
    }
}