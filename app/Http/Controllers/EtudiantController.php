<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;


class EtudiantController extends Controller
{
    // 
    function Liste_etudiant(){
        $etudiants =  Etudiant::all();
        return view('listeEtudiant',compact('etudiants'));
    }
    function Ajouter_etudiant(){
        return view('ajouter');
    }
    function verification(Request $request){
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'niveau'=>'required',
        ]);
        $etudiant = new Etudiant();
        $etudiant->nom = $request->nom ;
        $etudiant->prenom = $request->prenom ;
        $etudiant->niveau = $request->niveau ;
        $etudiant->save();
        return redirect()->route('Ajouter')->with('status','Etudiant est bien ajouter avec succee');

    }
    public function updateEtudiant($id){
        $etudiants = Etudiant::find($id);

        return view('modifier',compact('etudiants'));

    }
    public function verification_update(Request $request){
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'niveau'=>'required',
        ]);
        $etudiant = Etudiant::find($request->id);
        $etudiant->nom = $request->nom ;
        $etudiant->prenom = $request->prenom ;
        $etudiant->niveau = $request->niveau ;
        
        $etudiant->update();
        return redirect()->route('Ajouter')->with('status','Etudiant est bien modifier avec succee');  

    }

}
