<?php

use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sample = [
            [
            'nama'=>'abdul','nis'=>'2022202301','jk'=>'L','tgl_lahir'=>'1998-08-15','alamat'=>'Bandung',
            ],
            [
            'nama'=>'silvanna','nis'=>'2022202302','jk'=>'P','tgl_lahir'=>'1999-11-13','alamat'=>'Jakarta',
            ],
        ];
        DB::table('siswas')->insert($sample);
    }
}
