<?php

namespace App\Http\Controllers;

use App\Models\Chollo;
use Exception;
use Illuminate\Http\Request;

class CholloController extends Controller
{
    public function main()
    {
        $chollos = Chollo::all();
        $chollos = Chollo::paginate(5);
        return view("index", @compact("chollos"));
    }


    public function informacion($id)
    {
        // return auth()->user();
        $chollo = Chollo::findOrFail($id);
        return view("chollos.infoChollo", compact("chollo"));
    }

    public function destacados()
    {
        $chollos = Chollo::orderBy("puntuacion", "desc")->get();
        return view("index", compact("chollos"));
    }

    public function nuevos()
    {
        $chollos = Chollo::orderBy("created_at", "desc")->get();
        return view("index", compact("chollos"));
    }

    public function cbd()
    {
        $chollos = Chollo::all()->where("categoria", "CAN");
        return view("index", @compact("chollos"));
    }
    public function lsd()
    {
        $chollos = Chollo::all()->where("categoria", "LSD");
        return view("index", @compact("chollos"));
    }
    public function oxd()
    {
        $chollos = Chollo::all()->where("categoria", "OXI");
        return view("index", @compact("chollos"));
    }
    public function mda()
    {
        $chollos = Chollo::all()->where("categoria", "MDA");
        return view("index", @compact("chollos"));
    }
    public function ben()
    {
        $chollos = Chollo::all()->where("categoria", "COC");
        return view("index", @compact("chollos"));
    }
    public function mrf()
    {
        $chollos = Chollo::all()->where("categoria", "DIA");
        return view("index", @compact("chollos"));
    }
    public function psc()
    {
        $chollos = Chollo::all()->where("categoria", "SET");
        return view("index", @compact("chollos"));
    }

  
}
