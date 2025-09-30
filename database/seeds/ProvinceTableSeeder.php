<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProvinceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();

        DB::table('provinces')->insert([
            ['id' => 1, 'name' => 'Bali', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 2, 'name' => 'Bangka Belitung', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 3, 'name' => 'Banten', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 4, 'name' => 'Bengkulu', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 5, 'name' => 'DI Yogyakarta', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 6, 'name' => 'DKI Jakarta', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 7, 'name' => 'Gorontalo', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 8, 'name' => 'Jambi', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 9, 'name' => 'Jawa Barat', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 10, 'name' => 'Jawa Tengah', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 11, 'name' => 'Jawa Timur', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 12, 'name' => 'Kalimantan Barat', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 13, 'name' => 'Kalimantan Selatan', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 14, 'name' => 'Kalimantan Tengah', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 15, 'name' => 'Kalimantan Timur', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 16, 'name' => 'Kalimantan Utara', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 17, 'name' => 'Kepulauan Riau', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 18, 'name' => 'Lampung', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 19, 'name' => 'Maluku', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 20, 'name' => 'Maluku Utara', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 21, 'name' => 'Nanggroe Aceh Darussalam (NAD)', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 22, 'name' => 'Nusa Tenggara Barat (NTB)', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 23, 'name' => 'Nusa Tenggara Timur (NTT)', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 24, 'name' => 'Papua', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 25, 'name' => 'Papua Barat', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 26, 'name' => 'Riau', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 27, 'name' => 'Sulawesi Barat', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 28, 'name' => 'Sulawesi Selatan', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 29, 'name' => 'Sulawesi Tengah', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 30, 'name' => 'Sulawesi Tenggara', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 31, 'name' => 'Sulawesi Utara', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 32, 'name' => 'Sumatera Barat', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 33, 'name' => 'Sumatera Selatan', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 34, 'name' => 'Sumatera Utara', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
