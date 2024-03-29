<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Produk;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // mengambil data produk
    	$produk = produk::paginate(10);
    	// mengirim data produk ke view produk
    	return view('admin/produk/produk', ['produk' => $produk]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
    		'nama_produk' => 'required',
    		'jenis_produk' => 'required'
    	]);
        Produk::create([
    		'nama_produk' => $request->nama_produk,
    		'jenis_produk' => $request->jenis_produk
    	]);
    	return redirect('/produk');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Belum Fix
        $produk = Produk::find($id);
        return view('edit', ['produk' => $produk]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request,[
            'nama_produk' => 'required',
            'jenis_produk' => 'required'
            ]);
            $produk = Pegawai::find($id);
            $produk->nama_produk = $request->nama_produk;
            $produk->jenis_produk = $request->jenis_produk;
            $produk->save();
            return redirect('/produk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $produk = produk::find($id);
        $produk->delete();
        return redirect('/produk');
    }
}
