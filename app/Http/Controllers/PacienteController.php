<?php

namespace App\Http\Controllers;

use App\models\Paciente;
use App\models\Persona;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacientes = Paciente::query()
            ->join('persona', 'paciente.persona_id', '=', 'persona.id')
            ->select('paciente.id', 'persona.ci', 'persona.nombre', 'persona.apellido', 'persona.telefono', 'paciente.seguro')
            ->get();
        return view('pages.paciente.index', compact('pacientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.paciente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $persona = new Persona();
        $persona->ci = $request->input('ci');
        $persona->nombre = $request->input('nombre');
        $persona->apellido = $request->input('apellido');
        $persona->sexo = $request->input('sexo');
        $persona->telefono = $request->input('telefono');
        $persona->correo = $request->input('correo');
        $persona->direccion = $request->input('direccion');

        $persona->save();

        $paciente = new Paciente();
        $paciente->seguro = $request->input('seguro');
        $paciente->observacion = $request->input('observacion');
        $paciente->persona_id = $persona->id;

        $paciente->save();

        return redirect()->route('paciente.index')->withStatus(__('Paciente creado con éxito.'));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\models\Paciente $paciente
     * @return \Illuminate\Http\Response
     */
    public function show(Paciente $paciente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\models\Paciente $paciente
     * @return \Illuminate\Http\Response
     */
    public function edit(Paciente $paciente)
    {
        return view('pages.paciente.edit')->with('paciente',$paciente);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\models\Paciente $paciente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paciente $paciente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\models\Paciente $paciente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paciente $paciente)
    {
        //
    }
}
