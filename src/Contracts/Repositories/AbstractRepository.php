<?php
namespace Alienstream\Domain\Contracts\Repositories;

/**
 * Interface AbstractRepository
 * @package Alienstream\Domain\Contracts\Repositories
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
