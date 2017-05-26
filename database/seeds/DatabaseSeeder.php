<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // default way
        DB::table('T_Member')->insert([
            [
            'first_name' => 'admin',
            'last_name' => 'admin',
            'tel' => '0',
            'email' => 'admin@sirianan.com',
            'password' => Hash::make('password'),
            'remember_token'    =>  'jCpDDE2Ia8IwOkQTyuwQaERCBqbLJVUppGOtBiQQ',            
            'role'  =>  'Admin'
            ]
        ]);

        // using factory
        $users = factory(App\User::class, 5)->make();

        // using factory with state
        $users = factory(App\User::class, 1)->states('admin')->make();
    }
}
