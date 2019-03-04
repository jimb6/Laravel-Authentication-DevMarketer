<?php

use Illuminate\Database\Seeder;

class TeacherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('teachers')->insert([
            'username' => 'jeff',
            'password' => Hash::make('12346789'),
            'firstname' => 'Jefferson',
            'middlename' => 'Pusta',
            'lastname' => 'Buot',
            'sex' => 'Male',
            'dob' => '1996-03-14',
            'mother_tongue' => 'Bisaya',
            'religion' => 'Catholic',
            'street' => 'Purok 5 Daupinas',
            'barangay' => 'Manuel Roxas',
            'municipality' => 'Governor Generoso',
            'province' => 'Davao Oriental',
            'contact' => '09486802687',
        ]);
    }
}
