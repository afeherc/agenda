<?php namespace App\Http\Controllers;

use Input;
use Redirect;
use App\Cita;
use App\Contacto;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ContactosController extends Controller {

	protected $rules = [
		'nom' => ['required', 'min:1'],
		'slug' => ['required','min:1'],
		'mail' => ['required'],
	];
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$contactos = Contacto::all();
		return view('contactos.index', compact('contactos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Contacto $contacto)
	{
		return view('contactos.create', compact('contacto'));
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
		Contacto::create( $input );
 
		return Redirect::route('contactos.index')->with('message', 'Contacto creada!');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Contacto $contacto)
	{
		$citas = Cita::all();
		return view('contactos.show', compact('contacto','citas'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Contacto $contacto)
	{
		return view('contactos.edit', compact('contacto'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Contacto $contacto)
	{
		$contacto->delete();
 
		return Redirect::route('contactos.index')->with('message', 'Contacto eliminado!');
	}
	public function showCitasToAdd(){
		$citas = Cita::all();
		return view('contactos.showCitasToAdd', compact('citas'));
	}

}
