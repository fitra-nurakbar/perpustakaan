<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pengunjung extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function petugas()
    {
        return $this->belongsTo(Petugas::class);
    }
    
    public function nama(): Attribute
    {
        return new Attribute(
            get: fn ($value) => str($value)->title(),
            set: fn ($value) => str($value)->lower(),
        );
    }
}
