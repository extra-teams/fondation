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
<<<<<<< HEAD
                'name' => 'fondation225',
=======
                'name' => 'fondation',
>>>>>>> 139e293658d7cd542e6cd86fb085c6c456803bb6
                'email' => 'admin@fondation225.ci',
                'email_verified_at' => NULL,
                'password' => '$2y$10$DeptA760k0qWCUEQF/5MmuTQhIm.q0zzmnNqUQB3kUZ4GJGRDxlhC',
                'remember_token' => 'KQ1duRFdO6vDm0uGGsbgJ1YtJTGUCa7lOb5Vi7KXZrSA4zMfVyeIM893KN0J',
                'created_at' => '2020-10-12 19:05:15',
                'updated_at' => '2020-10-12 19:05:15',
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'sminth',
                'email' => 'virtus225one@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$DeptA760k0qWCUEQF/5MmuTQhIm.q0zzmnNqUQB3kUZ4GJGRDxlhC',
                'remember_token' => 'lrN6ifVckXqpSFRkSCSdgKiLNbL8msXLQBPhQSD0t9ITLLYuhPyqbEhFopbO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'guelade kévin',
                'email' => 'kevinguelade@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Cm9PzeCN0yfnwAOFT/jn5eCMbOE5POBJ/ya.iSL6fj7sMYed48B.G',
                'remember_token' => NULL,
                'created_at' => '2020-11-14 09:49:09',
                'updated_at' => '2020-11-14 09:49:09',
            ),
            3 => 
            array (
                'id' => 6,
                'name' => 'JM',
                'email' => 'kadiojean1017@yahoo.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$JpPOvO770jKYTZvVcTcxxejtsZSz/w6U9YiSd9/nXLde0VQLOxdUa',
                'remember_token' => NULL,
                'created_at' => '2020-11-20 02:53:32',
                'updated_at' => '2020-11-20 03:00:50',
            ),
        ));
        
        
    }
}