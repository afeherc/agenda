<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model {
	protected $guarded= ['id'];
	public function citas(){
                return $this->belongsToMany('App\Cita');
        }


}
