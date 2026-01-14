<?php

namespace App\Modules\Auth\Models;

use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Activitylog\LogOptions;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Traits\LogsModelActivity;

class User extends Authenticatable
{


    use HasApiTokens, HasFactory, HasRoles, LogsModelActivity, Notifiable;

    protected $fillable = [
        'first_name',
        'last_name',
        'phone',
        'email',
        'password',
        'is_locked',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'is_locked' => 'boolean',
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

    /**
     * Spécifier l'emplacement de la factory
     */
    protected static function newFactory()
    {
        // Retirez cette méthode TEMPORAIREMENT pour éviter l'erreur
        // return \Database\Factories\UserFactory::new();
    }
}