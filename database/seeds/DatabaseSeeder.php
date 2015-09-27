<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call('UserTableSeeder');
        $this->call('PostTableSeeder');
        $this->call('ContentTestTableSeeder');

        Model::reguard();
    }
}

class PostTableSeeder extends Seeder
{
    public function run()
    {
        App\Post::truncate();
        factory(App\Post::class,20)->create();
    }
}

class ContentTestTableSeeder extends  Seeder
{
    public function run()
    {
        App\ContentTest::truncate();
        factory(App\ContentTest::class,20)->create();
    }
}
