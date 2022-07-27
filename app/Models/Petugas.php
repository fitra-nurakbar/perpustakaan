<?php

namespace App\Models;

use App\Models\Hari;
use App\Models\Shift;
use App\Models\Tugas;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Petugas extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function tugas()
    {
        return $this->belongsTo(Tugas::class);
    }
    public function hari()
    {
        return $this->belongsTo(Hari::class);
    }
    public function shift()
    {
        return $this->belongsTo(Shift::class);
    }

    public function nama(): Attribute
    {
        return new Attribute(
            get: fn ($value) => str($value)->title(),
            set: fn ($value) => str($value)->lower(),
        );
    }
}
