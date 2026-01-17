<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livres;

class LivreController extends Controller
{
    public function listeLivre()
    {
        $livres = Livres::paginate(1);
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

    public function updateLivre($id)
    {
        $livres = Livres::find($id);

        return view('modifier', compact('livres'));
    }

    public function updateLivreAction(Request $req)
    {
        $req->validate([
            'auteur' => 'required',
            'titre' => 'required',
            'prix' => 'required',
            'description' => 'required',
        ]);
        $livre = Livres::find($req->id);
        $livre->auteur = $req->auteur;
        $livre->titre = $req->titre;
        $livre->prix = $req->prix;
        $livre->description = $req->description;
        $livre->update();

        return redirect('liste_Livre')->with('status', 'Le livre à été modifié avec succès');
    }

    public function deleteLivre($id)
    {

        $livres = Livres::find($id);
        $livres->delete();

        return redirect()->back()->with('status', 'Le livre à bien été supprimé avec succès');
    }
}
