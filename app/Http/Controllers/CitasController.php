<?php namespace App\Http\Controllers;

use Input;
use Redirect;
use App\Cita;
use App\Contacto;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CitasController extends Controller {
	
    protected $rules = [
        'nom' => ['required', 'min:1'],
        'slug' => ['required','min:1'],
        'lloc' => ['required'],
        'fecha' => ['required']
    ];
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $citas = Cita::all();
        return view('citas.index', compact('citas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $contactos = Contacto::all();
        return view('citas.create', compact('contactos'));
    }

    /**
     * Stores a newly created resource in storage.
     * 
     * @param Request $request
     * @return type
     */
    public function store(Request $request)
    {
        $this->validate($request, $this->rules);
        $input = Input::all();
        Cita::create( $input );

        return Redirect::route
            ('citas.index')->with('message', 'Cita creada!');
    }

    /**
     * Display the specified resource.
     *
     * @param  Cita $cita
     * @return Response
     */
    public function show(Cita $cita)
    {
        $contactos = Contacto::all();
        return view('citas.show', compact('cita','contactos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Cita $cita
     * @return Response
     */
    public function edit(Cita $cita)
    {
        return view('citas.edit', compact('cita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @return Response
     */
    public function update()
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Cita $cita
     * @return Response
     */
    public function destroy(Cita $cita)
    {
        $cita->delete();
        return Redirect::route('citas.index')->with('message', 'Cita eliminada!');
    }

}
