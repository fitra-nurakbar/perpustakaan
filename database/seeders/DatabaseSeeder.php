<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Peminjam;
use App\Models\Petugas_s;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('haris')->insert([
           ['hari' => 'senin'], 
           ['hari' => 'selasa'],
           ['hari' => 'rabu'],
           ['hari' => 'kamis'],
           ['hari' => 'jumat'],
        ]);

        DB::table('tugas')->insert([
            ['tugas' => 'penjaga'],
            ['tugas' => 'pengawas'],
            ['tugas' => 'bersih-bersih'],
            ['tugas' => 'lainya...'],
        ]);

        DB::table('shifts')->insert([
            ['shift' => 'pagi'],
            ['shift' => 'sore'],
        ]);

        DB::table('kategoris')->insert([
            ['kategori' => 'web'],
            ['kategori' => 'android'],
            ['kategori' => 'ios'],
        ]);
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
