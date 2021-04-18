<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
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
        $model = str_slug('kategori','-');
        
            $keyword = $request->get('search');
            $perPage = 25;

            if (!empty($keyword)) {
                $kategori = Kategori::where('nama_kategori', 'LIKE', "%$keyword%")
                ->paginate($perPage);
            } else {
                $kategori = Kategori::paginate($perPage);
            }

            return view('Kategori.kategori.index', compact('kategori'));
        
        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $model = str_slug('kategori','-');
            return view('Kategori.kategori.create');
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
        $model = str_slug('kategori','-');
            $this->validate($request, [
			'nama_kategori' => 'required'
		]);
            $requestData = $request->all();
            
            Kategori::create($requestData);
            return redirect('kategori')->with('flash_message', 'Kategori added!');
        
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
        $model = str_slug('kategori','-');
            $kategori = Kategori::findOrFail($id);
            return view('Kategori.kategori.show', compact('kategori'));
        
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
        $model = str_slug('kategori','-');
            $kategori = Kategori::findOrFail($id);
            return view('Kategori.kategori.edit', compact('kategori'));
        
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
        $model = str_slug('kategori','-');
       
            $this->validate($request, [
			'nama_kategori' => 'required'
		]);
            $requestData = $request->all();
            
            $kategori = Kategori::findOrFail($id);
             $kategori->update($requestData);

             return redirect('kategori')->with('flash_message', 'Kategori updated!');

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
        $model = str_slug('kategori','-');
            Kategori::destroy($id);
            return redirect('kategori')->with('flash_message', 'Kategori deleted!');
        return response(view('403'), 403);

    }
}
