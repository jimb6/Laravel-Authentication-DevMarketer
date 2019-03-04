<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('students')->insert([
            'username' => 'pustajim',
            'password' => Hash::make('12346789'),
            'firstname' => 'Jimwell',
            'middlename' => 'Pusta',
            'lastname' => 'Buot',
            'sex' => 'Male',
            'dob' => '1997-11-10',
            'mother_tongue' => 'Bisaya',
            'religion' => 'Catholic',
            'street' => 'Purok 5 Daupinas',
            'barangay' => 'Manuel Roxas',
            'municipality' => 'Governor Generoso',
            'province' => 'Davao Oriental',
            'father' => 'Emmanuel P. Buot',
            'mother' => 'Elvira P. Buot',
            'guardian_id' => '0',
            'guardian_rel' => 'Mother',
            'guardian_contact' => '09486802687',
        ]);
    }
}
