<?php

namespace App\Http\Controllers;

use App\Models\Chollo;
use Exception;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct() // este controlador tiene la autenticación activada
    {
        $this->middleware('auth');
    }

    public function borrar($id)
    {
        $borrar = Chollo::findOrFail($id);

        $borrar->delete();
        $chollos = Chollo::all();
        return view("index", compact("chollos"));
    }
    public function actualizar(Request $request, $id)
    {
        $request->validate([
            "fnombre" => "required",
            "fdesc" => "required",
            "fprecio" => "required"

        ]);
        try {

            $cholloActualizar = Chollo::findOrFail($id);
            $cholloActualizar->titulo = $request->fnombre;
            $cholloActualizar->descripcion = $request->fdesc;
            $cholloActualizar->precio = $request->fprecio;
            if ($request->has("fdisponible")) {
                $cholloActualizar->disponible = true;
            } else {
                $cholloActualizar->disponible = false;
            }
            // $cholloActualizar->disponible = $request->fdisp;

            $cholloActualizar->save();

            return back()->with("mensaje", "Producto actualizado con éxito");
        } catch (Exception) {
            return back()->with("mensaje", "Error al actualiza el producto");
        }
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
        return view("chollos.editar", @compact("chollo"));
    }
    public function crear()
    {
        return view("chollos.crear");
    }
}
