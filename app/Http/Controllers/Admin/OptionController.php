<?php

namespace App\Http\Controllers\Admin;

use App\Models\Option;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Redirect;

class OptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $options = Option::paginate(8);
        return view('admin.options.index', ['options' => $options]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.options.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'libelle' => 'required|unique:options,libelle'
            ]
        );
        $option = new Option($validatedData);
        $option->save();
        return Redirect::route('options.index')->with('success', $option->libelle . ' ajoutée avec succès');
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
     * @param Option $option
     */
    public function edit(Option $option)
    {
        return view('admin.options.edit', ['option' => $option]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Option $option
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Option $option)
    {

        $validatedData = $request->validate([
            'libelle' => 'required|unique:options,libelle,' . $option->id
        ]);
        $option->libelle = $validatedData['libelle'];
        $option->save();

        return Redirect::route('options.index')->with('success', $option->libelle . ' modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     * @param Option $option
     */
    public function destroy(Option $option)
    {
        $option->delete();
        return Redirect::route('options.index')->with('success', $option->libelle . ' supprimé avec succès');
    }
}
