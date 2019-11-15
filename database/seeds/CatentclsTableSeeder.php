<?php

use Illuminate\Database\Seeder;

class CatentclsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('catentcls')->delete();
        
        \DB::table('catentcls')->insert(array (
            0 => 
            array (
                'idnentcls' => 8,
                'dscentcls' => 'Leguminosa',
                'created_at' => '2019-11-15 10:10:50',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'idnentcls' => 9,
                'dscentcls' => 'Fruta',
                'created_at' => '2019-11-15 10:13:08',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'idnentcls' => 10,
                'dscentcls' => 'Legumbre',
                'created_at' => '2019-11-15 10:13:24',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'idnentcls' => 11,
                'dscentcls' => 'Fruto',
                'created_at' => '2019-11-15 10:14:23',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'idnentcls' => 12,
                'dscentcls' => 'Planta',
                'created_at' => '2019-11-15 10:14:37',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'idnentcls' => 13,
                'dscentcls' => 'Verdura',
                'created_at' => '2019-11-15 10:14:47',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}