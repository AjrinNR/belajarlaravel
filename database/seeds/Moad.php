<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class Moad extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $moad = [
            ['nama'=>'Dadang', 'nis'=>'1894829834', 'kelas'=>'11 RPL','agama'=>'Islam','jenis_kelamin'=>'laki','alamat'=>'Jalan satapak','tgl_lahir'=>Carbon::create('1993','02','02'),'umur'=>'27'],
            ['nama'=>'Iis', 'nis'=>'1894829034', 'kelas'=>'11 RPL','agama'=>'Islam','jenis_kelamin'=>'cewe','alamat'=>'Jalan jalan','tgl_lahir'=>Carbon::create('1995','01','02'),'umur'=>'25'],
            ['nama'=>'Encep', 'nis'=>'1094829834', 'kelas'=>'11 RPL','agama'=>'Islam','jenis_kelamin'=>'laki','alamat'=>' satapak','tgl_lahir'=>Carbon::create('1995','03','02'),'umur'=>'25'],
            ['nama'=>'Situ', 'nis'=>'18984000', 'kelas'=>'11 RPL','agama'=>'Islam','jenis_kelamin'=>'laki','alamat'=>'Manawe','tgl_lahir'=>Carbon::create('1993','06','06'),'umur'=>'27'],
            ['nama'=>'Ucup', 'nis'=>'1823989832', 'kelas'=>'11 RPL','agama'=>'Islam','jenis_kelamin'=>'laki','alamat'=>'Jalak','tgl_lahir'=>Carbon::create('1993','07','07'),'umur'=>'27'],
            ['nama'=>'Ujang', 'nis'=>'193891898', 'kelas'=>'11 RPL','agama'=>'Islam','jenis_kelamin'=>'laki','alamat'=>'Marken','tgl_lahir'=>Carbon::create('1993','07','07'),'umur'=>'27'],
            ['nama'=>'cecep', 'nis'=>'1239088781', 'kelas'=>'11 RPL','agama'=>'Islam','jenis_kelamin'=>'laki','alamat'=>'Maper','tgl_lahir'=>Carbon::create('1993','07','07'),'umur'=>'27'],
            ['nama'=>'Kiwil', 'nis'=>'8293849932', 'kelas'=>'11 RPL','agama'=>'Islam','jenis_kelamin'=>'laki','alamat'=>'Koper','tgl_lahir'=>Carbon::create('1993','07','07'),'umur'=>'27'],
            ['nama'=>'Ketok', 'nis'=>'189873872', 'kelas'=>'11 RPL','agama'=>'Islam','jenis_kelamin'=>'laki','alamat'=>'Sukamenak','tgl_lahir'=>Carbon::create('1993','07','07'),'umur'=>'27'],
            ['nama'=>'Meseg', 'nis'=>'1893890032', 'kelas'=>'11 RPL','agama'=>'Islam','jenis_kelamin'=>'laki','alamat'=>'Cangkuang','tgl_lahir'=>Carbon::create('1993','07','07'),'umur'=>'27']
        ];
            // masukkan data ke database
        DB::table('moads')->insert($moad);
    }
}
