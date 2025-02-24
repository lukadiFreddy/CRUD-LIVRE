<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livres;

class LivreController extends Controller
{
    public function listeLivre()
    {
        $livres = Livres::all();
        return view('liste_Livre', compact('livres'));
    }

    public function ajoutLivre()
    {
        return view('ajout_livre');
    }

    public function ajoutLivreAction(Request $req)
    {

        $req->validate([
            'auteur' => 'required',
            'titre' => 'required',
            'prix' => 'required',
            'description' => 'required',
        ]);

        $livre = new Livres();
        $livre->auteur = $req->auteur;
        $livre->titre = $req->titre;
        $livre->prix = $req->prix;
        $livre->description = $req->description;
        $livre->save();

        return redirect('liste_Livre')->with('status', 'Le livre à été ajouté avec succès');
    }

    public function updateLivre($id) {
        return view()
    }
}
