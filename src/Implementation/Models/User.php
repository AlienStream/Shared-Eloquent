<?php
namespace AlienStream\Domain\Implementation\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password'];
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function favoritedTracks()
    {
        return $this->hasMany('AlienStream\Domain\Implementation\Models\Track', 'user_favorited_tracks');
    }

    public function favoritedArtists()
    {
        return $this->hasMany('AlienStream\Domain\Implementation\Models\Artist', 'user_favorited_artists');
    }

    public function favoritedCommunities()
    {
        return $this->hasMany('AlienStream\Domain\Implementation\Models\Community', 'user_favorited_communities');
    }

    public function moderatedCommunities()
    {
        return $this->hasMany('AlienStream\Domain\Implementation\Models\Community', 'user_moderated_communities');
    }
}