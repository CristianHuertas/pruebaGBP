<?php

namespace App\Http\Controllers;

use App\Models\Bodega;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Class BodegaController
 * @package App\Http\Controllers
 */
class BodegaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $bodegas = Bodega::paginate();
        $bodegas = DB::table('bodegas')
            ->orderBy('nombre', 'desc')
            ->get();
        // $usuarios = Usuario::all();
        // dd($usuarios);
        return view('bodega.index', compact('bodegas'));
        // ->with('i', (request()->input('page', 1) - 1) * $bodegas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bodega = new Bodega();
        $usuarios = Usuario::all();

        return view('bodega.create', compact('bodega', 'usuarios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Bodega::$rules);

        $bodega = Bodega::create($request->all());

        return redirect()->route('bodegas.index')
            ->with('success', 'Bodega created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bodega = Bodega::find($id);

        return view('bodega.show', compact('bodega'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bodega = Bodega::find($id);

        return view('bodega.edit', compact('bodega'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Bodega $bodega
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bodega $bodega)
    {
        request()->validate(Bodega::$rules);

        $bodega->update($request->all());

        return redirect()->route('bodegas.index')
            ->with('success', 'Bodega updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $bodega = Bodega::find($id)->delete();

        return redirect()->route('bodegas.index')
            ->with('success', 'Bodega deleted successfully');
    }
}
