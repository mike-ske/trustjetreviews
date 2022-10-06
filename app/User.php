<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Spark\Billable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable, Billable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
        'provider_name', 
        'provider_id', 
        'avatar',
        'access_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // user reviews
    public function reviews(  )
    {
        return $this->hasMany(Reviews::class);
    }

    // user company
    public function company(  ) {
        return $this->hasOne( Sites::class, 'claimedBy', 'id' );
    }


    // get profile pic attribute
    public function getProfileThumbAttribute() {

        if( is_null( $this->profilePic ) )
            return asset('public/storage/no-img.png');
        else
            return asset( 'public/storage/' . $this->profilePic );


    }

    // resend verificatio email
    public function resend() {

        $user = auth()->user();

        $verificationUrl = \URL::temporarySignedRoute(
            'verification.verify',
            \Carbon\Carbon::now()->addMinutes(config('auth.verification.expire', 60)),
            [
                'id' => $user->getKey(),
                'hash' => sha1($user->getEmailForVerification()),
            ]
        );

        $user->sendEmailVerificationNotification();

        return back()->with('resent', true);
    }

}
