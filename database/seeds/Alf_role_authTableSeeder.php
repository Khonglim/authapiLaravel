<?php

use Illuminate\Database\Seeder;

class Alf_role_authTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('alf_role_auth')->insert([
            'name_auth' =>'ผู้ดูแลระบบหลัก'
        ]);

        DB::table('alf_role_auth')->insert([
            'name_auth' =>'ผู้ดูแลแต่ละโรงเรียน'
        ]);

        DB::table('alf_role_auth')->insert([
            'name_auth' =>'ผู้ปกครอง'
        ]);

        DB::table('alf_role_auth')->insert([
            'name_auth' =>'ครู/อาจารย์'
        ]);

    }
}
