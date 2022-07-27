<?php

namespace App\Models;

use App\Models\Kategori;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Buku extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function judul(): Attribute
    {
        return new Attribute(
            get: fn ($value) => str($value)->ucfirst(),
            set: fn ($value) => str($value)->lower(),
        );
    }

    public function pengarang(): Attribute
    {
        return new Attribute(
            get: fn ($value) => str($value)->ucfirst(),
            set: fn ($value) => str($value)->lower(),
        );
    }

    public function penerbit(): Attribute
    {
        return new Attribute(
            get: fn ($value) => str($value)->title(),
            set: fn ($value) => str($value)->lower(),
        );
    }
}
