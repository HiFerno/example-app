<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    // Método para mostrar la lista de contactos
    public function index()
    {
        // Extraer los datos de la tabla contactos
        $contactos = Contacto::all();

        // Retornar la vista y pasar los datos
        return view('contactos.index', compact('contactos'));
    }
}
