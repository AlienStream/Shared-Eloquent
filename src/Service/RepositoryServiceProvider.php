<?php
namespace AlienStream\Domain\Service;

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
            'AlienStream\Domain\Contracts\Repositories\ArtistRepository',
            'AlienStream\Domain\Implementation\Repositories\EloquentArtistRepository'
        );
        $this->app->bind(
            'AlienStream\Domain\Contracts\Repositories\CommunityRepository',
            'AlienStream\Domain\Implementation\Repositories\EloquentCommunityRepository'
        );
        $this->app->bind(
            'AlienStream\Domain\Contracts\Repositories\GenreRepository',
            'AlienStream\Domain\Implementation\Repositories\EloquentGenreRepository'
        );
        $this->app->bind(
            'AlienStream\Domain\Contracts\Repositories\TrackRepository',
            'AlienStream\Domain\Implementation\Repositories\EloquentTrackRepository'
        );
        $this->app->bind(
            'AlienStream\Domain\Contracts\Repositories\UserRepository',
            'AlienStream\Domain\Implementation\Repositories\EloquentUserRepository'
        );
    }
}
