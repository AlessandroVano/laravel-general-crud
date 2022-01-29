<?php

use Illuminate\Database\Seeder;
use App\joke;

class JokesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jokes = config('joke-array');

        foreach ($jokes as $joke) {
            $new_joke = new joke();
            $new_joke->author = $joke['author'];
            $new_joke->title = $joke['title'];
            $new_joke->body = $joke['body'];

            $new_joke->save();
        }
    }
}
