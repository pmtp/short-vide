<?php

use Illuminate\Database\Seeder;

class TopicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $topic = new \App\Topic();
        $topic->title = "Benfica vs BVB";
        $topic->description = "A lovely champions league match on Valentine's day.";
        $topic->save();

        $anotherTopic = new \App\Topic();
        $anotherTopic->title = "Messi vs Ronaldo";
        $anotherTopic->description = "The eternal rivalry";
        $anotherTopic->save();
    }
}
