<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kategori extends Model
{
    use HasFactory;

    public function kategori(): Attribute
    {
        return new Attribute(
            get: fn ($value) => str($value)->upper(),
            set: fn ($value) => str($value)->lower(),
        );
    }
}
