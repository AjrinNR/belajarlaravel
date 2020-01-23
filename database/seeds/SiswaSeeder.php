<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siswa = [
            ['nama'=>'Dadang', 'nis'=>'1894829834', 'jenis_kelamin'=>'laki','alamat'=>'Jalan satapak','tgl_lahir'=>Carbon::create('1993','02','02'),'umur'=>'27'],
            ['nama'=>'Iis', 'nis'=>'1894829034', 'jenis_kelamin'=>'cewe','alamat'=>'Jalan jalan','tgl_lahir'=>Carbon::create('1995','01','02'),'umur'=>'25'],
            ['nama'=>'Encep', 'nis'=>'1094829834', 'jenis_kelamin'=>'laki','alamat'=>' satapak','tgl_lahir'=>Carbon::create('1995','03','02'),'umur'=>'25'],
            ['nama'=>'Situ', 'nis'=>'18984000', 'jenis_kelamin'=>'laki','alamat'=>'Manawe','tgl_lahir'=>Carbon::create('1993','06','06'),'umur'=>'27'],
            ['nama'=>'jajang', 'nis'=>'1823989832', 'jenis_kelamin'=>'laki','alamat'=>'SituBondo','tgl_lahir'=>Carbon::create('1993','07','07'),'umur'=>'27']
        ];
            // masukkan data ke database
        DB::table('siswa')->insert($siswa);
    }
}
