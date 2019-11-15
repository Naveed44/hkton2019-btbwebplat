<?php

use Illuminate\Database\Seeder;

class CatentqulTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('catentqul')->delete();
        
        \DB::table('catentqul')->insert(array (
            0 => 
            array (
                'idnentqul' => 7,
                'dscentqul' => 'Categoria A',
                'created_at' => '2019-11-15 10:11:58',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'idnentqul' => 8,
                'dscentqul' => 'Categoria B',
                'created_at' => '2019-11-15 10:14:05',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'idnentqul' => 9,
                'dscentqul' => 'Categoria C',
                'created_at' => '2019-11-15 13:37:29',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}