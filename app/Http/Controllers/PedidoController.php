<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pedido;
use App\Paciente;
use App\Medico;
use App\Exame;

class PedidoController extends Controller
{
    //
    public function index()
    {
      $pedidos = Pedido::all();
      return view('pedido.index', compact('pedidos'));
    }
    public function cria()
    {

      $pacientes = Paciente::all();
      $medicos = Medico::all();
      $exames = Exame::all();
      return view('pedido.cria', compact('pacientes','medicos','exames'));


      //return view('pedido.cria', compact('medicos'));


      //return view('pedido.cria', compact('exames'));
    }
    public function armazena()
    {
      Pedido::create(request()->all());
      return redirect('/pedidos');
    }
}
