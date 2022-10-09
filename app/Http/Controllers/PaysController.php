<?php

namespace App\Http\Controllers;

use App\Models\Pays;
use Illuminate\Http\Request;

class PaysController extends Controller
{

    public function paysList()
    {
        //$pays = Pays::all();
        $pays = Pays::orderBy('LibPays', 'asc')->paginate(5);

        return view('home.list.paysList', compact('pays'));
    }


    public function paysAdd()
    {
        $pays = Pays::all();

        return view('home.add.paysAdd', compact('pays'));
    }


    public function paysCreate(Request $request)
    {
        $request->validate([
            'LibPays' => 'required',
        ]);

        Pays::create([
            'LibPays' => $request->LibPays,
        ]);

        return back()->with('success', 'Pays ajouté avec succès!');
    }



    public function paysEdit(Pays $pays)
    {
        //$pays = Pays::all();

        return view('home.edit.paysEdit', compact('pays'));
    }


    public function paysUpdate(Request $request, Pays $pays)
    {
        $request->validate([
            'LibPays' => 'required',
        ]);

        $pays->update($request->all());

        return back()->with('success', 'Pays mis à jour avec succès!');
    }


    public function paysDelete(Pays $pays)
    {
        $lib_pays = $pays->LibPays;
        $pays->delete();

        return back()->with("successDelete", "->> $lib_pays <<- supprimé avec succès!");
    }
}
