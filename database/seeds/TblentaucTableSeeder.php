<?php

use Illuminate\Database\Seeder;

class TblentaucTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tblentauc')->delete();
        
        \DB::table('tblentauc')->insert(array (
            0 => 
            array (
                'idnentauc' => 1,
                'idnentprd' => 1,
                'datstrauc' => '2019-11-15 13:55:41',
                'datendauc' => '2019-11-15 13:52:59',
                'basprcauc' => '10000.00',
                'created_at' => '2019-11-15 13:51:04',
                'updated_at' => '2019-11-15 13:51:04',
            ),
            1 => 
            array (
                'idnentauc' => 2,
                'idnentprd' => 2,
                'datstrauc' => '2019-11-15 13:56:38',
                'datendauc' => '0000-00-00 00:00:00',
                'basprcauc' => '2000.00',
                'created_at' => '2019-11-15 13:56:47',
                'updated_at' => '2019-11-15 13:56:47',
            ),
        ));
        
        
    }
}