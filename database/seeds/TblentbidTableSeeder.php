<?php

use Illuminate\Database\Seeder;

class TblentbidTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tblentbid')->delete();
        
        \DB::table('tblentbid')->insert(array (
            0 => 
            array (
                'idnentbid' => 1,
                'idnentauc' => 1,
                'usersid' => 2,
                'datissbid' => '2019-11-15 13:52:20',
                'prcunibid' => '10000.00',
                'qununibid' => '5.00',
                'created_at' => '2019-11-15 13:52:34',
                'updated_at' => '2019-11-15 13:52:35',
            ),
            1 => 
            array (
                'idnentbid' => 2,
                'idnentauc' => 1,
                'usersid' => 2,
                'datissbid' => '2019-11-15 14:02:23',
                'prcunibid' => '0.00',
                'qununibid' => '0.00',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}