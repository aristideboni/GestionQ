<?php

namespace App\Http\Controllers;

use App\Models\Logement;
use App\Models\Quartier;
use Illuminate\Http\Request;

class LogementController extends Controller
{

    public function logementList()
    {
        //$logements = Logement::all();
        $logements = Logement::orderBy('rue', 'asc')->paginate(5);

        return view('home.list.logementList', compact('logements'));
    }

 
    public function logementAdd()
    {
        $quartiers = Quartier::all();

        return view('home.add.logementAdd', compact('quartiers'));
    }

  
    public function logementCreate(Request $request)
    {
        $request->validate([
            'reference' => 'required',
            'rue' => 'required',
            'superficie' => 'required',
            'loyer' => 'required',
            'quartier_id' => 'required',

        ]);

        Logement::create([
            'reference' => $request->reference,
            'rue' => $request->rue,
            'superficie' => $request->superficie,
            'loyer' => $request->loyer,
            'quartier_id' => $request->quartier_id,
        ]);

        return back()->with('success', 'Logement ajouté avec succès!');
    }

 
    public function show($id)
    {
        //
    }

   
    public function logementEdit($id)
    {
        $quartiers = Quartier::all();
        $logement = Logement::findOrFail($id);

        return view('home.edit.logementEdit', compact("quartiers", "logement"));
    }

    
    public function logementUpdate(Request $request, $id)
    {
        //$request->validate([
        //    'reference' => 'required',
        //    'rue' => 'required',
        //    'superficie' => 'required',
        //    'loyer' => 'required',
        //    'quartier_id' => 'required',
        //]);
      
        //$logement = Logement::findOrFail($id);
        //$logement->update($request->all());
        $logement = Logement::findOrFail($id);
        $logement->reference = $request->input('reference');
        $logement->rue = $request->input('rue');
        $logement->superficie = $request->input('superficie');
        $logement->loyer = $request->input('loyer');
        $logement->quartier_id = $request->input('quartier_id');
        $logement->update();

        return back()->with('success', 'Logement mis à jour avec succès!');
    }


    public function destroy($id)
    {
        //
    }
}
