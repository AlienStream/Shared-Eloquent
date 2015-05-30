<?php
namespace AlienStream\Domain\Contracts\Repositories;

/**
 * Interface CommunityRepository
 * @package AlienStream\Domain\Contracts\Repositories
 */
interface CommunityRepository extends AbstractRepository
{
    public function byName($name);
    public function trending();
    public function popular();
    public function newest();
}
