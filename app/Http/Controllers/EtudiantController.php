<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;


class EtudiantController extends Controller
{
    // 
    function Liste_etudiant(){
        $etudiants =  Etudiant::paginate(4);
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
            'nom' => 'required',
            'prenom' => 'required',
            'niveau' => 'required',
        ]);
    
        $etudiant = Etudiant::find($request->id);
    
        // Vérifiez si les nouvelles valeurs sont différentes des anciennes
        if ($etudiant->nom !== $request->nom || $etudiant->prenom !== $request->prenom || $etudiant->niveau !== $request->niveau) {
            $etudiant->nom = $request->nom;
            $etudiant->prenom = $request->prenom;
            $etudiant->niveau = $request->niveau;
            $etudiant->update();
    
            return redirect()->route('Ajouter')->with('status', 'Étudiant a été modifié avec succès');
        } else {
            return redirect()->route('Update', ['id' => $etudiant->id])->with('status', 'Aucune modification n\'a été apportée à l\'étudiant');
         }
    }
    
    public function DeleteEtudiant($id){

        $etudiant = Etudiant::find($id);
        $etudiant->delete();
        return redirect()->route('Liste')->with('status','Etudiant est bien supprimer avec succee');  

    }
    public function rechercher(Request $request)
    {
        $recherche = $request->input('recherche');
        // Effectuez la recherche des étudiants en fonction de la valeur de recherche
        $etudiants = Etudiant::where('nom', 'like', '%' . $recherche . '%')
                                ->orWhere('prenom', 'like', '%' . $recherche . '%')
                                ->orWhere('niveau', 'like', '%' . $recherche . '%')
                                ->get();
    
        return view('recherche', compact('etudiants'));
    }
    
    public function rechercherAffiche(){
        $etudiants =  Etudiant::all();
        return view('recherche',compact('etudiants'));
    }
    
}
