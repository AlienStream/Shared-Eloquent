<?php
namespace Alienstream\Domain\Contracts\Repositories;

/**
 * Interface TrackRepository
 * @package Alienstream\Domain\Contracts\Repositories
 */
interface TrackRepository extends AbstractRepository
{
    public function trending();
    public function popular();
}
