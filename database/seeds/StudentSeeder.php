<?php

use Illuminate\Database\Seeder;
use App\Student;
use Faker\Generator as Faker;
use Carbon\Carbon;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        
        //dati inseriti manualmente

        // $students = config();

        // foreach($students as $student){
        //     $newStudent = new Student();
        //     $newStudent->name = $student['name'];
        //     $newStudent->data_nascita = Carbon::createFromFormat('d/m/Y',$student['data_nascita']);
        //     $newStudent->citta = $student['citta'];

        //     $newStudent->save();
        // }

        //dati inseriti con il faker    

        for($i=0;$i<10;$i++){
            $newStudent = new Student();
            $newStudent->name = $faker->name();
            $newStudent->data_nascita = $faker->date();
            $newStudent->citta = $faker->city();
            $newStudent->save();
        }
    }
}
