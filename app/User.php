<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use RemoteAuthPhp\RemoteAuthUser;
use Carbon\Carbon;

class User extends Authenticatable implements RemoteAuthUser
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email',
    ];

    public function remoteAuthUserId(): string
    {
        return $this->remoteauth_user_id;
    }

    public function accessToken(): string
    {
        return $this->access_token;
    }

    public function refreshToken(): string
    {
        return $this->refresh_token;
    }

    public function accessTokenExpiration(): \DateTime
    {
        return $this->expires_at;
    }

    public function handleTokenRefresh(string $userId, string $accessToken, string $refreshToken, int $expiresIn): void
    {
        $this->remoteauth_user_id = $userId;
        $this->access_token = $accessToken;
        $this->refresh_token = $refreshToken;
        $this->expires_at = Carbon::now()->addSeconds($expiresIn);
        $this->save();
    }
}
