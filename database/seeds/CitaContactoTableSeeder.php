<?php
 
use Illuminate\Database\Seeder;
 
class CitaContactoTableSeeder extends Seeder {
 
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('cita_contacto')->delete();
 
        $unions = array(
            ['cita_id' => '1', 'contacto_id' => '1'],
            ['cita_id' => '1', 'contacto_id' => '2'],
	    ['cita_id' => '1', 'contacto_id' => '3'],
	    ['cita_id' => '2', 'contacto_id' => '1'],
	    ['cita_id' => '2', 'contacto_id' => '3'],
	    ['cita_id' => '2', 'contacto_id' => '2']
        );
 
        // Uncomment the below to run the seeder
        DB::table('cita_contacto')->insert($unions);
    }
 
}
