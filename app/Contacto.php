<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model {

	public function citas(){
                return $this->belongsToMany('App\Cita');
        }


}
