<?php
namespace Alienstream\Domain\Contracts\Repositories;

/**
 * Interface ArtistRepository
 * @package Alienstream\Domain\Contracts\Repositories
 */
interface ArtistRepository extends AbstractRepository
{
    public function trending();
    public function popular();
}
