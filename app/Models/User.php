<?php

namespace App\Models;

use App\Notifications\CustomPasswordReset;
use App\Notifications\MyOwnResetPassword as ResetPasswordNotification;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Laravel\Passport\HasApiTokens;


class User extends Authenticatable
{
    use HasFactory, Notifiable;
    use HasRoles;
    use HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
    protected $guard_name = 'api';
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Send the password reset notification.
     *
     * @param string $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new CustomPasswordReset($token, $this->getEmailForPasswordReset()));
    }


    public function academies()
    {
        return $this->hasOne(Academy::class, 'user_id');
    }


    public function scout()
    {
        return $this->hasOne(Scout::class, 'user_id');
    }

    public function coach()
    {
        return $this->hasOne(Coach::class, 'user_id');
    }

    public function talent()
    {
        return $this->hasOne(Talent::class, 'user_id');
    }

    public function performance_coach()
    {
        return $this->hasOne(PerformanceCoach::class, 'user_id');
    }

    public function fitness_coach()
    {
        return $this->hasOne(FitnessCoach::class, 'user_id');
    }

    public function nutritionist()
    {
        return $this->hasOne(Nuritionist::class, 'user_id');
    }


    public function agents()
    {
        return $this->hasOne(Agent::class, 'user_id');
    }
}
