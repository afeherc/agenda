<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model {
	protected $guarded= ['id'];
	public function contactos(){
		return $this->belongsToMany('App\Contacto');
	}

}
