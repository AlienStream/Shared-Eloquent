<?php
namespace Alienstream\Domain\Implementation\Repositories;

use Alienstream\Domain\Contracts\Repositories\GenreRepository;
use Alienstream\Domain\Implementation\Models\Genre;

class EloquentGenreRepository extends EloquentAbstractRepository implements GenreRepository
{
    function __construct(Genre $model)
    {
        $this->model = $model;
    }
}