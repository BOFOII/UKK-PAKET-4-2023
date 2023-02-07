<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait HasUniqueid {

    public static function bootHasUnidqueid() {
        static::creating(function($model) {
            if(empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = Str::uuid();
            }
        });
    }
}
