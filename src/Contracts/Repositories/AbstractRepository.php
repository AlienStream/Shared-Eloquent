<?php
namespace AlienStream\Domain\Contracts\Repositories;

/**
 * Interface AbstractRepository
 * @package AlienStream\Domain\Contracts\Repositories
 */
interface AbstractRepository
{
    /**
     * @param $id
     * @return mixed
     */
    public function find($id);

    /**
     * @return mixed
     */
    public function all();
}
