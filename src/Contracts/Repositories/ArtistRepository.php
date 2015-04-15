<?php
namespace AlienStream\Domain\Contracts\Repositories;

/**
 * Interface ArtistRepository
 * @package AlienStream\Domain\Contracts\Repositories
 */
interface ArtistRepository extends AbstractRepository
{
    public function trending();
    public function popular();
}
