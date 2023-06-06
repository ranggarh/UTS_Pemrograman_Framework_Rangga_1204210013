<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use App\Models\Satuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = 'List Barang My Inventory | Pengadaan Barang Elektronik';

        //Eloquent
        $barangs = Barang::all();

        return view('barang.index', [
            'pageTitle' => $pageTitle,
            'barangs' => $barangs
        ]);

        // $barangs = DB::table('barangs')
        // ->select('*', 'barangs.id as barang_id','satuans.namaSatuan as satuan_nama')
        // ->leftJoin('satuans', 'barangs.satuan_id', '=', 'satuans.id')
        // ->get();

        // return view('barang.index', compact('pageTitle', 'barangs'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Input Barang My Inventory | Pengadaan Barang Elektronik';
        //eloquent
        $satuans = Satuan::all();
        // $satuans = DB::table('satuans')->get();

        return view('barang.create', compact('pageTitle', 'satuans'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'numeric' => 'Isi :attribute dengan angka'
        ];

        $validator = Validator::make($request->all(), [
            'kodeBarang' => 'required',
            'namaBarang' => 'required',
            'deskripsi' => 'required',
            'satuan' => 'required',
            'harga'=> 'required|numeric'
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        //eloquent
        $barang = New Barang;
        $barang->kodeBarang = $request->kodeBarang;
        $barang->namaBarang = $request->namaBarang;
        $barang->deskripsi = $request->deskripsi;
        $barang->satuan_id = $request->satuan;
        $barang->harga = $request->harga;
        $barang->save();

        // DB::table('barangs')->insert([
        //     'kodeBarang' => $request->kodeBarang,
        //     'namaBarang' => $request->namaBarang,
        //     'deskripsi' => $request->deskripsi,
        //     'satuan_id' => $request->satuan,
        //     'harga' => $request->harga
        // ]);
        return redirect()->route('listBarang.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pageTitle = 'Edit Barang MyInventory | Rangga Raditya Hariyanto';

        //eloquent
        $satuans = Satuan::all();
        $barang = Barang::find($id);
        // $barang->kodeBarang = $request->kodeBarang;
        // $barang->namaBarang = $request->kodeBarang;
        // $barang->deskripsi = $request->deskripsi;
        // $barang->satuan_id = $request->satuan;
        // $barang->harga = $request->harga;
        // $barang->save();
        // $satuans = DB::table('satuans')->get();
        // $barang = DB::table('barangs')
        // ->select('*', 'barangs.id as barang_id', 'satuans.namaSatuan as satuan_nama')
        // ->leftJoin('satuans','barangs.satuan_id', '=','satuans.id')
        // ->where('barangs.id', $id)
        // ->first();
        return view('barang.edit', compact('pageTitle', 'satuans', 'barang'));
        // return redirect()->route('listBarang.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'numeric' => 'Isi :attribute dengan angka'
        ];

        $validator = Validator::make($request->all(), [
            'kodeBarang' => 'required',
            'namaBarang' => 'required',
            'deskripsi' => 'required',
            'satuan' => 'required',
            'harga'=> 'required|numeric'
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        //eloquent
        $barang = Barang::find($id);

        $barang->kodeBarang = $request->kodeBarang;
        $barang->namaBarang = $request->namaBarang;
        $barang->deskripsi = $request->deskripsi;
        $barang->satuan_id = $request->satuan;
        $barang->harga = $request->harga;
        $barang->save();
        // DB::table('barangs')
        // ->where('id',$id)
        // ->update([
        //     'kodeBarang'=>$request->input('kodeBarang'),
        //     'namaBarang'=>$request->input('namaBarang'),
        //     'harga'=> $request->input('harga'),
        //     'deskripsi'=> $request->input('deskripsi'),
        //     'satuan_id'=> $request->input('satuan')
        // ]);
        return redirect()->route('listBarang.index');
        // return view('barang.index', compact('$pageTitle','barang'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //eloquent
        Barang::find($id)->delete();
        // DB::table('barangs')
        // ->where('id', $id)
        // ->delete();

        return redirect()->route('listBarang.index');
    }
}
