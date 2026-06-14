<?php

namespace App\Modules\Auth\Models;

use App\Modules\Auth\Enums\RolesEnum;
use App\Modules\Order\Models\Order;
use App\Traits\LogsModelActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Activitylog\LogOptions;

/**
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $phone
 * @property bool $is_locked
 * @property \Illuminate\Database\Eloquent\Collection $activities
 */
class User extends Authenticatable
{
    use HasApiTokens, HasFactory,  LogsModelActivity, Notifiable;

    /**
     * @property int $id
     * @property string $first_name
     * @property string $last_name
     * @property string $email
     * @property string $phone
     * @property bool $is_locked
     * @property \Illuminate\Database\Eloquent\Collection $activities
     */

    protected $fillable = [

        'first_name',
        'last_name',
        'phone',
        'email',
        'role',
        'password',
        'is_locked',
        'google_id',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'is_locked' => 'boolean',
        'role' => RolesEnum::class,
    ];

    /**
     * Configuration du journal d'activité
     */
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly([
                'id',
                'first_name',
                'last_name',
                'email',
                'phone',
                'role',
                'is_locked'
            ])
            ->logOnlyDirty()
            ->useLogName('user')
            ->setDescriptionForEvent(
                fn(string $eventName) =>
                "User : événement {$eventName}"
            );
    }

    /**
     * Relation : tentative de connexion
     */
    public function loginAttempt()
    {
        return $this->hasOne(LoginAttempt::class);
    }
    public function hasRole(RolesEnum|string $role): bool
    {
        return $this->role === ($role instanceof RolesEnum ? $role->value : $role);
    }

    public function tokenCanAbility(string $ability): bool
    {
        return $this->currentAccessToken()?->can($ability) ?? false;
    }

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }
}
