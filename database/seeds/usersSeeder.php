<?php

use Illuminate\Database\Seeder;

class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

       DB::table('users') ->insert([
               'name' => 'admin',
               'email' => 'admin@admin.com',
               'password' =>\Hash::make('admin'),
               'role' => 'admin',
               'created_at'=> new DateTime,
               'updated_at' => new DateTime
           ]
       );

        for ($i=0; $i<10; $i++){

            DB::table('users') -> insert([
                    'name' => $faker->name,
                    'email' => $faker->email,
                    'password' =>\Hash::make('password'),
                    'role' => 'author',
                    'created_at' =>new DateTime,
                    'updated_at' => new DateTime
                ]


            );
        }
    }
}
