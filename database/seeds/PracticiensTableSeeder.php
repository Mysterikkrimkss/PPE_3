<?php

use Illuminate\Database\Seeder;

class PracticiensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('practiciens')->insert([
            'matricule' => 'BQ-150-YX' ,
            'name' => 'Dr Thomas',
            'telephone' => '0697482135',
            'mail' => 'drthomas@gmail.com',
            'notoriete' => 'positive',
            'specialite' => 'generaliste',
            'diplome' => 'doctorat medecin',
            'coefficien_prescription' => '5',
            'ville_origine' => 'Nimes',
            'ville' => 'Nimes',
            'adresse' => 'rue dr rocheblave',
            'derniere_visite' => '2019-05-24 10:00:00',
            'nouvelle_visite' => '2019-05-26 15:00:00',
            'date_embauche' => '2018-09-12 08:00:00',
            'created_at' => '2018-09-12 08:00:00',
            'updated_at' => '2019-01-17 08:00:00',

        ]);
    }
}
