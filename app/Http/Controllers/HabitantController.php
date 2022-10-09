<?php

namespace App\Http\Controllers;

use App\Models\Habitant;
use App\Models\Logement;
use App\Models\Pays;
use App\Models\Quartier;
use App\Models\Ville;
use Illuminate\Http\Request;

class HabitantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function habitantList()
    {
        //$habitants = Habitant::all();
        $habitants = Habitant::orderBy('nom', 'asc')->paginate(5);

        return view('home.list.habitantList', compact('habitants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function habitantAdd()
    {
        //$pays = Pays::all();
        //$villes = Ville::all();
        $quartiers = Quartier::all();
        $logements = Logement::all();
        $habitants = Habitant::all();

        return view('home.add.habitantAdd', compact('habitants','quartiers', 'logements'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function habitantCreate(Request $request)
    {
        //dd($request);
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'DatNaiss' => ['required', "date"],
            'tel' => ['required', 'numeric'],
            'quartier_id' => 'required|exists:quartiers,id',
            'logement_id' => 'required|exists:logements,id',

        ]);


        $habitant = new Habitant();
       
        $habitant->nom= $request->nom;
        $habitant->prenom= $request->prenom;
        $habitant->DatNaiss= $request->DatNaiss;
        $habitant->tel= $request->tel;
        $habitant->quartier_id= $request->quartier_id;
        $habitant->logement_id= $request->logement_id;
        $habitant->save();

        return back()->with('success', 'habitant ajouté avec succès!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function habitantEdit($id)
    {
        $quartiers = Quartier::all();
        $logements = Logement::all();
        $habitant = Habitant::find($id);
        return view('home.edit.habitantEdit', compact("quartiers", "logements", "habitant"));
    }


    public function habitantUpdate(Request $request, $id)
    {
        
        
        $habitant = Habitant::find($id);
        $habitant->nom = $request->input('nom');
        $habitant->prenom = $request->input('prenom');
        $habitant->DatNaiss = $request->input('DatNaiss');
        $habitant->tel = $request->input('tel');
        $habitant->quartier_id = $request->input('quartier_id');
        $habitant->logement_id = $request->input('logement_id');
        $habitant->update();

        return back()->with('success', 'Habitant mis à jour avec succès!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function habitantDelete(Habitant $habitant)
    {
        $habitant->delete();
        return back()->with("successDelete", "habitant supprimé avec succès!");
    }
}
