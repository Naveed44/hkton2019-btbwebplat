<?php

use Illuminate\Database\Seeder;

class TblentprdTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tblentprd')->delete();
        
        \DB::table('tblentprd')->insert(array (
            0 => 
            array (
                'idnentprd' => 1,
                'idnentcls' => 8,
                'idnentqul' => 7,
                'idnentuni' => 2,
                'userid' => 3,
                'namentprd' => 'Frijol',
                'dscentprd' => 'Frijol calidad premium para su venta en mercados internacionales',
                'qunentprd' => '5.00',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'idnentprd' => 2,
                'idnentcls' => 12,
                'idnentqul' => 9,
                'idnentuni' => 2,
                'userid' => 3,
                'namentprd' => 'Oregano',
                'dscentprd' => 'Oregano para productos procesados, ',
                'qunentprd' => '3.00',
                'created_at' => '2019-11-15 13:42:13',
                'updated_at' => '2019-11-15 13:42:14',
            ),
            2 => 
            array (
                'idnentprd' => 3,
                'idnentcls' => 10,
                'idnentqul' => 8,
                'idnentuni' => 2,
                'userid' => 3,
                'namentprd' => 'Cacahuate',
                'dscentprd' => 'Cacahuate de temporada anterior',
                'qunentprd' => '4.00',
                'created_at' => '2019-11-15 13:44:19',
                'updated_at' => '2019-11-15 13:44:20',
            ),
        ));
        
        
    }
}