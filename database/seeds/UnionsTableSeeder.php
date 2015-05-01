<?php
 
use Illuminate\Database\Seeder;
 
class UnionsTableSeeder extends Seeder {
 
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('unions')->delete();
 
        $unions = array(
            ['id' => 1, 'id_cita' => '1', 'id_contacto' => '1'],
            ['id' => 2, 'id_cita' => '1', 'id_contacto' => '2'],
	    ['id' => 3, 'id_cita' => '1', 'id_contacto' => '3'],
	    ['id' => 4, 'id_cita' => '2', 'id_contacto' => '1'],
	    ['id' => 5, 'id_cita' => '2', 'id_contacto' => '3'],
        );
 
        // Uncomment the below to run the seeder
        DB::table('unions')->insert($unions);
    }
 
}
