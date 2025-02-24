<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LivreController extends Controller
{
    public function listeLivre()
    {

        return view('liste_Livre');
    }

    public function ajoutLivre()
    {
        return view('ajout_livre');
    }
}
