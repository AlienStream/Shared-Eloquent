<?php
namespace Alienstream\Domain\Contracts\Repositories;

/**
 * Interface CommunityRepository
 * @package Alienstream\Domain\Contracts\Repositories
 */
interface CommunityRepository extends AbstractRepository
{
    public function trending();
    public function popular();
    public function newest();
}
