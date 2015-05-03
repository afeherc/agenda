<?php
 
use Illuminate\Database\Seeder;
 
class ContactosTableSeeder extends Seeder {
 
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('contactos')->delete();
 
        $contactos = array(
            ['id' => 1, 'nom' => 'Contacto 1', 'slug' => 'contact-1', 'mail'=>'BArna@gmail.com', 'telf'=> '20150429', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'nom' => 'Contacto 2', 'slug' => 'contact-2', 'mail'=>'Bada@lona.sin', 'telf'=> '20150729','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'nom' => 'Sin tacto 3', 'slug' => 'contact-3', 'mail'=>'Santaco@taco.es', 'telf'=> '20150829','created_at' => new DateTime, 'updated_at' => new DateTime],
        );
 
        // Uncomment the below to run the seeder
        DB::table('contactos')->insert($contactos);
    }
 
}
