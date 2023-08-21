<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pesan;

class PesanController extends Controller
{
    public function create()
    {
        return view('pages.pesan');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name'          =>  'required|max: 30',
            'no_identitas'  =>  'required|size:16, unique:pesans',
            'no_hp'         =>  'required',
            'wisata'        =>  'required',
            'tanggal'       =>  'required',
            'dewasa'        =>  'required',
            'anakanak'      =>  'required',
            'harga_tiket'   =>  'required',
            'total_bayar'   =>  'required',
        ]);

        $data = new Pesan();
        $data   ->  name            = $request ->  name;
        $data   ->  no_identitas    = $request ->  no_identitas;
        $data   ->  no_hp           = $request ->  no_hp;
        $data   ->  wisata          = $request ->  wisata;
        $data   ->  tanggal         = $request ->  tanggal;
        $data   ->  dewasa          = $request ->  dewasa;
        $data   ->  anakanak        = $request ->  anakanak;
        $data   ->  harga_tiket     = $request ->  harga_tiket;
        $data   ->  total_bayar     = $request ->  total_bayar;
        $data   ->  save();
        return redirect()->route('pages.indexInvoice');
    }

    public function index()
    {
        $datas = Pesan::all();
        return view('pages.indexInvoice',['pesans' => $datas]);
    }

    public function show($pesan_id)
    {
        $result = Pesan::findOrFail($pesan_id);
        return view('pages.invoice',['pesan' => $result]);
    }

    public function adminHome()
    {
        $pengunjunganakanak = Pesan::all()->sum('anakanak');
        $pengunjungdewasa = Pesan::all()->sum('dewasa');
        return view('admin.indexAdmin', compact('pengunjunganakanak', 'pengunjungdewasa'));
    }
}
