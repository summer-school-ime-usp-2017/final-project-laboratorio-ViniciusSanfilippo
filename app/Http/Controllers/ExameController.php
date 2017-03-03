<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exame;

class ExameController extends Controller
{
    //
    public function index()
    {
      $exames = Exame::all();
      return view('exame.index', compact('exames'));
    }
    public function cria()
    {
      return view('exame.cria');
    }

    public function armazena()
    {
      Exame::create(request()->all());
      return redirect('/exames');
    }
}
