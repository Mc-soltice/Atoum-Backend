<?php

namespace App\Modules\Auth\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogOptions;
use App\Traits\LogsModelActivity;
use App\Modules\Auth\Models\User;

class LoginAttempt extends Model
{
    use LogsModelActivity;

    protected $fillable = [
        'user_id',
        'attempts',
        'locked_until',
    ];

    protected $casts = [
        'locked_until' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logAll()
            ->useLogName('login_attempt')
            ->setDescriptionForEvent(
                fn(string $eventName) =>
                "LoginAttempt : événement {$eventName}"
            );
    }
}
