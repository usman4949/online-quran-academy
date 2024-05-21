<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();

        DB::table('roles')->insert([
            ['id' => 1, 'role' => 'admin', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 2, 'role' => 'user', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 3, 'role' => 'teacher', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
