<?php
namespace App\Http\Controllers;


class PrimerController extends Controller
{
    function index(){
        return view('mis-views.primer-view', [
            'texto' => 'Hola Mundo'
        ]);
    }
}
