<?php
// app/Traits/UsesUuid.php

namespace App\Traits;

use Illuminate\Support\Str;

trait UsesUuid
{
    protected static function bootUsesUuid(): void
    {
        static::creating(function ($model) {
            $model->uuid = Str::uuid();
        });
    }
}
