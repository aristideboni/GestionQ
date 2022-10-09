<?php

namespace App\Http\Controllers;

use App\Models\Habitant;
use App\Models\Logement;
use App\Models\Pays;
use App\Models\Quartier;
use App\Models\Ville;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        $villescount = Ville::count();
        $paysscount = Pays::count();
        $quartierscount = Quartier::count();
        $habitantscount = Habitant::count();
        $villes = Ville::all();
        
        $pays = Pays::all();
        $quartiers = Quartier::all();
        $logements = Logement::all();
        

        return view('home.dashboard', compact(
            'villescount',
            'paysscount',
            'villes',
            'pays',
            'quartierscount',
            'habitantscount',
            'quartiers',
            'logements',
            
        ));
    }


}
