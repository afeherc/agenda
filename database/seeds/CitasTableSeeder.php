<?php
 
use Illuminate\Database\Seeder;
 
class CitasTableSeeder extends Seeder {
 
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('citas')->delete();
 
        $citas = array(
            ['id' => 1, 'nom' => 'Cita 1', 'slug' => 'cita-1', 'lloc'=>'Barna', 'fecha'=> '2015-04-29', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'nom' => 'Cita 2', 'slug' => 'cita-2', 'lloc'=>'Badalona', 'fecha'=> '2015-07-29','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'nom' => 'Cita 3', 'slug' => 'cita-3', 'lloc'=>'Santaco', 'fecha'=> '2015-08-29','created_at' => new DateTime, 'updated_at' => new DateTime],
	    ['id' => 4, 'nom' => 'Cita amb el metge', 'slug' => 'metge', 'lloc'=>'Aribau, 315', 'fecha'=> '2015-04-08','created_at' => new DateTime, 'updated_at' => new DateTime],
        );
 
        // Uncomment the below to run the seeder
        DB::table('citas')->insert($citas);
    }
 
}
