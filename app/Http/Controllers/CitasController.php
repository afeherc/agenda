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
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$this->validate($request, $this->rules);
		$input = Input::all();
		Cita::create( $input );
 
		return Redirect::route('citas.index')->with('message', 'Cita creada!');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
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
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Cita $cita)
	{
		return view('citas.edit', compact('cita'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update()
	{
		$contactos = Contacto::all();
		return view('citas.showContactos', compact('contactos'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Cita $cita)
	{
		$cita->delete();
 
		return Redirect::route('citas.index')->with('message', 'Cita eliminada!');
	}
	
}
