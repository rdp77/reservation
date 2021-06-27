<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Room extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('room')->insert([
            [
                'id' => '1',
                'name' => 'Lesehan'
            ],
            [
                'id' => '2',
                'name' => 'Meeting'
            ],
        ]);
    }
}
