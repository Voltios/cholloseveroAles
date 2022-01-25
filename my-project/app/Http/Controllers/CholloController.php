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
        return view("index", @compact("chollos"));
    }

    public function crear()
    {
        return view("chollos.crear");
    }

    public function crearChollo(Request $request)
    {
        try {

            $request->fnuevoPrecio;
            $nuevoChollo = new Chollo;
            $nuevoChollo->titulo = $request->ftit;
            $nuevoChollo->descripcion = $request->fdesc;
            $nuevoChollo->url = $request->furl;
            $nuevoChollo->categoria = $request->fcat;
            $nuevoChollo->precio = doubleval($request->fprecio);
            $nuevoChollo->precioDescuento = doubleval($request->fnuevoPrecio);
            $nuevoChollo->puntuacion = 0;
            $nuevoChollo->disponible = true;
            $nuevoChollo->save();
        } catch (Exception $e) {
            return back()->with("mensaje", "Error al insertar el chollo, comprueba todos los campos");
        }

        return back()->with("mensaje", "Chollo insertado correctamente");
    }
    public function editar($id)
    {
        $chollo  = Chollo::findOrFail($id);
        return view("editar", @compact("chollo"));
    }

    public function informacion($id)
    {
        $chollo = Chollo::findOrFail($id);
        return view("chollos.infoChollo", @compact("chollo"));
    }
}
