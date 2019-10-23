<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Promo;
class PromoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        // mengambil data promo
    	$promo = promo::paginate(10);
    	// mengirim data produk ke view promo
    	return view('admin/promo/promo', ['promo' => $promo]);
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
    		'nama_promo' => 'required',
    		'jenis_promo' => 'required',
    		'nominal_promo' => 'required',
    		'expired_date' => 'required'
    	]);
        Promo::create([
    		'nama_promo' => $request->nama_promo,
    		'jenis_promo' => $request->jenis_promo,
    		'nominal_promo' => $request->nominal_promo,
    		'expired_date' => $request->expired_date
    	]);
    	return redirect('/promo');
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
        //
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
        $promo = Promo::find($id);
        $promo->delete();
        return redirect('/promo');
        /* return redirect()->back(); */
    }
}
