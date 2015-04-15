<?php
namespace AlienStream\Domain\Implementation\Repositories;

use AlienStream\Domain\Contracts\Repositories\GenreRepository;
use AlienStream\Domain\Implementation\Models\Genre;

class EloquentGenreRepository extends EloquentAbstractRepository implements GenreRepository
{
    function __construct(Genre $model)
    {
        $this->model = $model;
    }
}