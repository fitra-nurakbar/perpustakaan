<?php

namespace App\Models;

use App\Models\Buku;
use App\Models\Pengunjung;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Peminjam extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public function pengunjung()
    {
        return $this->belongsTo(Pengunjung::class);
    
    }

    public function buku()
    {
        return $this->belongsTo(Buku::class);
    }
}
