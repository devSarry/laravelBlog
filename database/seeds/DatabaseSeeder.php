<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Article;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call('ArticlesTableSeeder');

        $this->command->info('Articles table seeded!');
    }

}

class ArticlesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('articles')->delete();
        DB::table('users')->delete();

        $faker = Faker\Factory::create();

        for ($i = 0; $i < 10; $i ++)
        {
            User::create(array(
                'name' => $faker->name,
                'email'    => $faker->email,
                'password' => Hash::make('password')
            ));
        }


        for ($i = 0; $i < 20; $i ++)
        {
            $userId = User::all()->random()->id;
            Article::create(array(
                'title'        => $faker->realText(30),
                'author'       => $faker->lastName,
                'body'         => $faker->realText(),
                'published_at' => $faker->date('Y-m-d'),
                'user_id'       => $userId
            ));
        }


    }
}