<?php
namespace Alienstream\Domain\Service;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider {

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'Alienstream\Domain\Contracts\Repositories\ArtistRepository',
            'Alienstream\Domain\Implementation\Repositories\EloquentArtistRepository'
        );
        $this->app->bind(
            'Alienstream\Domain\Contracts\Repositories\CommunityRepository',
            'Alienstream\Domain\Implementation\Repositories\EloquentCommunityRepository'
        );
        $this->app->bind(
            'Alienstream\Domain\Contracts\Repositories\GenreRepository',
            'Alienstream\Domain\Implementation\Repositories\EloquentGenreRepository'
        );
        $this->app->bind(
            'Alienstream\Domain\Contracts\Repositories\TrackRepository',
            'Alienstream\Domain\Implementation\Repositories\EloquentTrackRepository'
        );
        $this->app->bind(
            'Alienstream\Domain\Contracts\Repositories\UserRepository',
            'Alienstream\Domain\Implementation\Repositories\EloquentUserRepository'
        );
    }
}
