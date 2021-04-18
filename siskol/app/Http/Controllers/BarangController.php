<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Kategori;

use App\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */

    public function index(Request $request)
    {
        $model = str_slug('barang','-');
       
            $keyword = $request->get('search');
            $perPage = 25;

            if (!empty($keyword)) {
                $barang = Barang::where('tanggal', 'LIKE', "%$keyword%")
                ->orWhere('nama_barang', 'LIKE', "%$keyword%")
                ->orWhere('kategori', 'LIKE', "%$keyword%")
                ->orWhere('jumlah', 'LIKE', "%$keyword%")
                ->orWhere('harga_satuan', 'LIKE', "%$keyword%")
                ->orWhere('kondisi', 'LIKE', "%$keyword%")
                ->paginate($perPage);
            } else {
                $barang = Barang::paginate($perPage);
            }

            return view('Barang.barang.index', compact('barang'));
        
        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $model = str_slug('barang','-');
        $kategori= Kategori::all();
        
            return view('Barang.barang.create', [
                'kategori' => $kategori
            ]);
        

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $model = str_slug('barang','-');
       
            $this->validate($request, [
			'tanggal' => 'required',
			'nama_barang' => 'required',
			'kategori' => 'required',
			'jumlah' => 'required',
			'harga_satuan' => 'required',
			'kondisi' => 'required'
		]);
            $requestData = $request->all();
            
            Barang::create($requestData);
            return redirect('barang')->with('flash_message', 'Barang added!');
        
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $model = str_slug('barang','-');
       
            $barang = Barang::findOrFail($id);
            return view('Barang.barang.show', compact('barang'));
        
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $model = str_slug('barang','-');
       
            $barang = Barang::findOrFail($id);
            return view('Barang.barang.edit', compact('barang'));
        
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $model = str_slug('barang','-');
       
            $this->validate($request, [
			'tanggal' => 'required',
			'nama_barang' => 'required',
			'kategori' => 'required',
			'jumlah' => 'required',
			'harga_satuan' => 'required',
			'kondisi' => 'required'
		]);
            $requestData = $request->all();
            
            $barang = Barang::findOrFail($id);
             $barang->update($requestData);

             return redirect('barang')->with('flash_message', 'Barang updated!');
        
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $model = str_slug('barang','-');
        
            Barang::destroy($id);

            return redirect('barang')->with('flash_message', 'Barang deleted!');
        
      

    }
}
