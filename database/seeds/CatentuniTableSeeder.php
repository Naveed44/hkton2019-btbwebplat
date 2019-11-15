<?php

use Illuminate\Database\Seeder;

class CatentuniTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('catentuni')->delete();
        
        \DB::table('catentuni')->insert(array (
            0 => 
            array (
                'idnentuni' => 1,
                'dscentuni' => 'Kilogramo',
                'created_at' => '2019-11-15 13:37:48',
                'updated_at' => '2019-11-15 13:37:49',
            ),
            1 => 
            array (
                'idnentuni' => 2,
                'dscentuni' => 'Tonelada',
                'created_at' => '2019-11-15 13:37:58',
                'updated_at' => '2019-11-15 13:37:59',
            ),
            2 => 
            array (
                'idnentuni' => 3,
                'dscentuni' => 'Pieza',
                'created_at' => '2019-11-15 13:38:09',
                'updated_at' => '2019-11-15 13:38:10',
            ),
        ));
        
        
    }
}