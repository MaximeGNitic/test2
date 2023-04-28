<?php

namespace App\Http\Controllers;

use App\Models\OffresEmploi;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use mysqli;

class OffreEmploiController extends Controller
{
    public function getOffreEmploi($id){       
        try{
            $offre_emploi = OffresEmploi::find($id);
            if(!is_null($offre_emploi)){
                return OffresEmploi::find($id);
            }
        }catch(Exception $e){
            return $e;
        }
    }

    public function getOffresEmploi(){
        try{
            return OffresEmploi::all();
        }catch(Exception $e){
            return $e;
        }
    }

    public function addOffreEmploi(Request $request){
        try{
            //stripslashes()
            //htmlentities()
            OffresEmploi::create($request->all());
            return "L'offre d'emploi a ete creer avec succes";
        }catch(Exception $e){
            return $e;
        }
    }

    public function updateOffreEmploi(Request $request, $id){   
        try{
            $offre_emploi = OffresEmploi::find($id);
            if(!is_null($offre_emploi)){
                $offre_emploi->update($request->all());
                return "L'offre d'emploi a ete modifier avec succes";
            }
        }catch(Exception $e){
            return $e;
        }
    }

    public function deleteOffreEmploi($id){       
        try{
            $offre_emploi = OffresEmploi::find($id);
            if(!is_null($offre_emploi)){
                $offre_emploi->delete();
                return "L'offre d'emploi a ete supprimer avec succes";
            }
        }catch(Exception $e){
            return $e;
        }
    }

    public function getOffreTachePoste(){
        return DB::select("SELECT * FROM offres_emplois join taches_offres on offres_emplois.id = taches_offres.offre_id 
                                                        join taches on taches_offres.tache_id = taches.id");
    }
}
