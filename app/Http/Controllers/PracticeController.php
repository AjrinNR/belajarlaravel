<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tabungan;
class PracticeController extends Controller
{
    public function pass()
    {
        $data = 'Jajajajajajaaj';
        return view('latihan', compact('data'));
    }
    public function pass1()
    {
        $siswa = [
                ['nama' => 'Kasman','kelas'=>'XI RPL 1'],
                ['nama' => 'asman','kelas'=>'XI RPL 1'],
                ];
        return view('laithan1',['data' => $siswa]);
    }
    public function pass2($id)
    {
        $tabungan = Tabungan::findOrFail($id);
        return view('latihan2',compact('tabungan'));
    }
}
