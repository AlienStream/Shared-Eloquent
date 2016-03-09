<?php
namespace AlienStream\Domain\Contracts\Repositories;

/**
 * Interface PostRepository
 * @package AlienStream\Domain\Contracts\Repositories
 */
interface PostRepository extends AbstractRepository
{
    public function byUrl($url);
}
