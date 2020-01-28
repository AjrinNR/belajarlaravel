<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function halo()
    {
        return 'Nama saya cecep';
    }
    public function tambah($a =null ,$b=null)
    {
        if ($a == null && $b == null) {
            $f = "Masukan Angka";
        }
        if (isset($a)) {
            $f = 'Masukan Angka Lagi';
            if (isset($b)) {
                $c = $a + $b;
                $f =$a.' + '.$b.' = '.$c;
            }
        }
        return $f;
    }
    public function kurang($a=null,$b=null)
    {
        if ($a == null && $b == null) {
            $f = "Masukan Angka";
        }
        if (isset($a)) {
            $f = 'Masukan Angka Lagi';
            if (isset($b)) {
                $c = $a - $b;
                $f =$a.' - '.$b.' = '.$c;
            }
        }
        return $f;
    }
    public function bagi($a=null,$b=null)
    {

        if ($a == null && $b == null) {
            $f = "Masukan Angka";
        }
        if (isset($a)) {
            $f = 'Masukan Angka Lagi';
            if (isset($b)) {
                $c = $a / $b;
                $f =$a.' : '.$b.' = '.$c;
            }
        }
        return $f;
    }
    public function kali($a=null,$b=null)
    {

        if ($a == null && $b == null) {
            $f = "Masukan Angka";
        }
        if (isset($a)) {
            $f = 'Masukan Angka Lagi';
            if (isset($b)) {
                $c = $a * $b;
                $f =$a.' x '.$b.' = '.$c;
            }
        }
        return $f;
    }
    public function loop()
    {
        $data = [
            ['Nama'=>'hari', 'Kelas' => 'RPL 1', 'Uang_jajan'=>55000],
            ['Nama' => 'David', 'Kelas' => 'RPL 1', 'Uang_jajan'=>39000],
            ['Nama' => 'Jajang', 'Kelas' => 'RPL 1', 'Uang_jajan'=>55000],
            ['Nama' => 'dadang', 'Kelas' => 'RPL 1', 'Uang_jajan'=>98000],
            ['Nama' => 'Kevin', 'Kelas' => 'RPL 1', 'Uang_jajan'=>66000]
        ];
        foreach ($data as $val =>$key) {
            if ($key['Uang_jajan'] > 50000 ) {
                echo"Nama : ".$key['Nama']. "<br>".
                "Kelas : " .$key['Kelas']. "<br>".
                "Uang Jajan : ".$key['Uang_jajan']. "<br>".
                "Anak Berada  <br>";
                $tabungan = $key['Uang_jajan'] * 25/100 ;
                echo "Total Tabungan :  " . $tabungan ."<br>";
                $sisa = $key['Uang_jajan'] - $tabungan;
                echo "Sisa uang jajan : " . $sisa . "<hr>";

            }else if ($key['Uang_jajan']>25000) {
                echo"Nama : ".$key['Nama']. "<br>".
                " Kelas : " .$key['Kelas']. "<br>".
                " Uang Jajan : ".$key['Uang_jajan']. "<br>" .
                "Anak Biasa <br>";
                $tabungan = $key['Uang_jajan'] * 15/100;
                echo "Total Tabungan :  " . $tabungan ."<br>";
                $sisa = $key['Uang_jajan'] - $tabungan;
                echo "Sisa uang jajan : " . $sisa . "<hr>";
            }else{
                echo"Nama : ".$key['Nama'].
                " Kelas : " .$key['Kelas'].
                " Uang Jajan : ".$key['Uang_jajan'] .
                " Anak Cukup <br>";
                $tabungan = $key['Uang_jajan'] * 10/100 ;
                echo "  Total Tabungan :  " . $tabungan."<br>";
                $sisa = $key['Uang_jajan'] - $tabungan;
                echo "Sisa uang jajan : " . $sisa . "<hr>";
            }
        }
    }

    public function kerja()
    {
        $data = [
            ['Nama'=>'hari', 'Agama' => 'Islam', 'Alamat'=>'Marken','jk' => 'Laki', 'Jabatan' => "Manager", 'jamker' => 260],
            ['Nama'=>'Diana', 'Agama' => 'Kristen', 'Alamat'=>'Sukamenak','jk' => 'Perempuan', 'Jabatan' => "Sekretaris", 'jamker' => 200],
            ['Nama'=>'Jajang', 'Agama' => 'Islam', 'Alamat'=>'Soreang','jk' => 'Laki', 'Jabatan' => "Staff", 'jamker' => 150]

        ];
        foreach ($data as $val =>$key) {
            if ($key['Jabatan'] == 'Manager') {
                echo"Nama : ".$key['Nama']. "<br>".
                "Agama : " .$key['Agama']. "<br>".
                "Alamat : ".$key['Alamat']. "<br>".
                "Jenis Kelamin : ".$key['jk'] ."<br>".
                "Jabatan : ".$key['Jabatan'] . "<br>".
                "Jam Kerja : ". $key['jamker'] . "<br>";

                    if ($key['jamker'] > 250 ) {
                        $ppn = 0.025;
                        $gu = 5000000;
                        $bonus = $gu * 10/100;
                        $gjt = $gu;
                        $j = "Mendapatkan Bonus : ". $bonus;
                        $gt = "";
                    }elseif ($key['jamker']>200) {
                        $gu = 5000000;
                        $bonus = $gu * 5/100;
                        $j = "Mendapatkan Bonus : ". $bonus;
                    }
            }
        }
    }
}















