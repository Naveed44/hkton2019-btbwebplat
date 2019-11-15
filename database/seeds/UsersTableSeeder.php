<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Magnimus Software',
                'email' => 'rednazkela@gmail.com',
                'email_verified_at' => '2019-11-15 13:31:08',
                'password' => '$2y$10$k0wPNCSTa9DpnWO/eKW8kexicKIQS5pjH9T1Y/j11i5aVSKigsgoS',
                'remember_token' => NULL,
                'created_at' => '2019-11-15 13:31:15',
                'updated_at' => '2019-11-15 13:31:16',
                'role' => 0,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'La Costeña',
                'email' => 'lacosteña@gmail.com',
                'email_verified_at' => '2019-11-15 13:32:39',
                'password' => '$2y$10$k0wPNCSTa9DpnWO/eKW8kexicKIQS5pjH9T1Y/j11i5aVSKigsgoS',
                'remember_token' => NULL,
                'created_at' => '2019-11-15 13:32:42',
                'updated_at' => '2019-11-15 13:32:43',
                'role' => 2,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Sociedad Cooperativa Unión Campesina',
                'email' => 'unioncampesinasc@gmail.com',
                'email_verified_at' => '2019-11-15 13:33:42',
                'password' => '$2y$10$k0wPNCSTa9DpnWO/eKW8kexicKIQS5pjH9T1Y/j11i5aVSKigsgoS',
                'remember_token' => NULL,
                'created_at' => '2019-11-15 13:33:45',
                'updated_at' => '2019-11-15 13:33:46',
                'role' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Isidora',
                'email' => 'isidora@gmail.com',
                'email_verified_at' => '2019-11-15 13:57:53',
                'password' => '$2y$10$k0wPNCSTa9DpnWO/eKW8kexicKIQS5pjH9T1Y/j11i5aVSKigsgoS',
                'remember_token' => NULL,
                'created_at' => '2019-11-15 13:58:52',
                'updated_at' => '2019-11-15 13:58:53',
                'role' => 2,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'La Chata',
                'email' => 'lachata@gmail.cm',
                'email_verified_at' => '2019-11-15 14:01:23',
                'password' => '$2y$10$k0wPNCSTa9DpnWO/eKW8kexicKIQS5pjH9T1Y/j11i5aVSKigsgoS',
                'remember_token' => NULL,
                'created_at' => '2019-11-15 14:01:39',
                'updated_at' => '2019-11-15 14:01:39',
                'role' => 2,
            ),
        ));
        
        
    }
}