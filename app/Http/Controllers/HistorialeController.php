<?php

namespace App\Http\Controllers;

use App\Models\Historiale;
use Illuminate\Http\Request;

/**
 * Class HistorialeController
 * @package App\Http\Controllers
 */
class HistorialeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $historiales = Historiale::paginate();

        return view('historiale.index', compact('historiales'))
            ->with('i', (request()->input('page', 1) - 1) * $historiales->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $historiale = new Historiale();
        return view('historiale.create', compact('historiale'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Historiale::$rules);

        $historiale = Historiale::create($request->all());

        return redirect()->route('historiales.index')
            ->with('success', 'Historiale created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $historiale = Historiale::find($id);

        return view('historiale.show', compact('historiale'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $historiale = Historiale::find($id);

        return view('historiale.edit', compact('historiale'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Historiale $historiale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Historiale $historiale)
    {
        request()->validate(Historiale::$rules);

        $historiale->update($request->all());

        return redirect()->route('historiales.index')
            ->with('success', 'Historiale updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $historiale = Historiale::find($id)->delete();

        return redirect()->route('historiales.index')
            ->with('success', 'Historiale deleted successfully');
    }
}
