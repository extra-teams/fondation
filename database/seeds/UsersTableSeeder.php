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
                'name' => 'yebay',
                'email' => 'admin@yebay.ci',
                'email_verified_at' => NULL,
                'password' => '$2y$10$0.6d4DYEWSEWizCFASrb/uWHHEiNL43Xqr36pv9YnA2EQgtqIXJbG',
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
                'id' => 5,
                'name' => 'HM collection',
                'email' => 'fofanayasmine41@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$3867Nh4zteFnTyKIJvw18uPX.GVb2/URpCR4E35VmzQO6RGBW.u6i',
                'remember_token' => NULL,
                'created_at' => '2020-11-20 02:26:53',
                'updated_at' => '2020-11-20 02:26:53',
            ),
            4 => 
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
            5 => 
            array (
                'id' => 8,
                'name' => 'Curty mondial’s',
                'email' => '89956949kn@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$uMUwsCN15X1vYdE5FzQkGOFde1ZSHFoBAt8qOyjYKq851DHM9xOWK',
                'remember_token' => 'Q592kb2oZjfHrzWXjg7WLhLVpz1IJab9Y38hvhxWwOGWPEx4yHuUbX8QoTSk',
                'created_at' => '2020-11-21 17:35:34',
                'updated_at' => '2020-11-21 17:35:34',
            ),
            6 => 
            array (
                'id' => 9,
                'name' => 'The plug street W',
                'email' => 'ThePlugstoreciv@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$rox3Y2TfNPUsamHZ2WRhvulrYJP55/0mObusYcJRHy8LPmqbUrjUW',
                'remember_token' => NULL,
                'created_at' => '2020-11-30 11:34:08',
                'updated_at' => '2020-11-30 11:34:08',
            ),
            7 => 
            array (
                'id' => 10,
                'name' => 'Rocc shoes',
                'email' => 'paulericlokossou@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$G7oT1O/G7rLyi/kyIFTWS.bcZ7PLOvIjRlu/AqvyPmu4fyvXpa4ci',
                'remember_token' => NULL,
                'created_at' => '2020-11-30 11:40:23',
                'updated_at' => '2020-11-30 11:40:23',
            ),
        ));
        
        
    }
}