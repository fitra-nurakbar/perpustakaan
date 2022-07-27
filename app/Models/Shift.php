<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Shift extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function shift(): Attribute
    {
        return new Attribute(
            get: fn ($value) => str($value)->ucfirst(),
            set: fn ($value) => str($value)->lower(),
        );
    }
}
