<?php

namespace App\Http\Controllers;

use App\Models\Pays;
use App\Models\Ville;
use Illuminate\Http\Request;

class VilleController extends Controller
{

    public function villeList()
    {
        $villes = Ville::orderBy('LibVille', 'asc')->paginate(5);

        return view('home.list.villeList', compact('villes'));
    }


    public function villeAdd()
    {
        $pays = Pays::all();

        return view('home.add.villeAdd', compact('pays'));
    }


    public function villeCreate(Request $request)
    {
        $request->validate([
            'LibVille' => 'required',
            'pays_id' => 'required',
        ]);

        Ville::create([
            'LibVille' => $request->LibVille,
            'pays_id' => $request->pays_id,
        ]);

        return back()->with('success', 'Ville ajouté avec succès!');
    }



    public function villeEdit($id)
    {
        $pays = Pays::all();
        $ville= Ville::findOrFail($id);
        return view('home.edit.villeEdit', compact("ville","pays"));
    }


    public function villeUpdate(Request $request,  $id)
    {
        $request->validate([
            'pays_id' => 'required',
            'LibVille' => 'required',
        ]);
        
        $ville= Ville::findOrFail($id);
        $ville->update($request->all());
        
        return back()->with('success', 'Pays mis à jour avec succès!');
    }


    public function villeDelete(Ville $ville)
    {
        $ville->delete();
        return back()->with("successDelete", "ville supprimé avec succès!");
    }
}
