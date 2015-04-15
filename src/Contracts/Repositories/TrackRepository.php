<?php
namespace AlienStream\Domain\Contracts\Repositories;

/**
 * Interface TrackRepository
 * @package AlienStream\Domain\Contracts\Repositories
 */
interface TrackRepository extends AbstractRepository
{
    public function trending();
    public function popular();
}
