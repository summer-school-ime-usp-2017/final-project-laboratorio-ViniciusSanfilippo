<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paciente;


class PacienteController extends Controller
{
    //
    public function index()
    {
      $pacientes = Paciente::all();
      return view('paciente.index', compact('pacientes'));
    }
    public function cria()
    {
      return view('paciente.cria');
    }

    public function armazena()
    {
      Paciente::create(request()->all());
      return redirect('/pacientes');
    }
}
