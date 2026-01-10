<?php

namespace App\Traits;

use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

trait LogsModelActivity
{
  use LogsActivity;

  public function getActivitylogOptions(): LogOptions
  {
    return LogOptions::defaults()
      ->logAll()
      ->logOnlyDirty()
      ->useLogName(class_basename($this))
      ->setDescriptionForEvent(
        fn(string $eventName) =>
        class_basename($this) . " {$eventName}"
      );
  }
}
