<?php

namespace App\Http\Controllers;

use App\Models\Quartier;
use App\Models\Ville;
use Illuminate\Http\Request;

class QuartierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function quartierList()
    {
        //$quartiers = Quartier::all();
        $quartiers = Quartier::orderBy('LibQuartier', 'asc')->paginate(5);

        return view('home.list.quartierList', compact('quartiers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function quartierAdd()
    {
        $villes = Ville::all();

        return view('home.add.quartierAdd', compact('villes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function quartierCreate(Request $request)
    {
        $request->validate([
            'LibQuartier' => 'required',
            'ville_id' => 'required',
        ]);

        Quartier::create([
            'LibQuartier' => $request->LibQuartier,
            'ville_id' => $request->ville_id,
        ]);

        return back()->with('success', 'Quartier ajouté avec succès!');
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
    public function quartierEdit($id)
    {
        $villes = Ville::all();
        $quartier= Quartier::findOrFail($id);
        return view('home.edit.quartierEdit', compact("villes","quartier"));
    }

    
    public function quartierUpdate(Request $request, $id)
    {
        $request->validate([
            'ville_id' => 'required',
            'LibQuartier' => 'required',
        ]);
        
        $quartiers= Quartier::findOrFail($id);
        $quartiers->update($request->all());
        dd('$request');
        return back()->with('success', 'Quartier mis à jour avec succès!');
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
    }
}
