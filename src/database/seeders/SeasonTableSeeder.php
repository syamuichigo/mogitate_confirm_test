<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeasonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $parm = ['name' => '春'];
        DB::table('seasons')->insert($parm);
        $parm = ['name' => '夏'];
        DB::table('seasons')->insert($parm);
        $parm = ['name' => '秋'];
        DB::table('seasons')->insert($parm);
        $parm = ['name' => '冬'];
        DB::table('seasons')->insert($parm);
    }
}
