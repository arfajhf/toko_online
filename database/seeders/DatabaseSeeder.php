<?php

namespace Database\Seeders;

use Dflydev\DotAccessData\Data;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AdminSeeder::class,
            DataBarangSeeder::class,
            DataChatSeeder::class,
            DataPemesananSeeder::class,
            LaporanSeeder::class,
            PengirimSeeder::class,
            ChatSeeder::class,
            ChatReplySeeder::class
        ]);

        // $this->call([
        //     PengirimSeeder::class,
        // ]);

        // $this->call([
        //     DataChatSeeder::class,
        // ]);

        // $this->call([
        //     DataPemesananSeeder::class,
        // ]);

        // $this->call([
        //     DataBarangSeeder::class,
        // ]);
    }
}
