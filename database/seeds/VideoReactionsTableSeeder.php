<?php

use Illuminate\Database\Seeder;

class VideoReactionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //About Benfica vs BVB
        $video_reaction = new \App\VideoReaction();
        $video_reaction->topic_id = 1;
        $user = \App\User::where('username', '=', 'edersonmoraes1')->first();
        $video_reaction->user_id = $user->id;
        $video_reaction->title = "No chance you're going to score";
        $video_reaction->cover_photo = 'https://unsplash.it/640/360?random';
        $video_reaction->save();

        $video_reaction2 = new \App\VideoReaction();
        $video_reaction2->topic_id = 1;
        $user = \App\User::where('username', '=', 'pierr17bvb')->first();
        $video_reaction2->user_id = $user->id;
        $video_reaction2->title = "I'm already thinking on how i'm going to celebrate!";
        $video_reaction2->cover_photo = 'https://unsplash.it/640/360?random';
        $video_reaction2->save();

        $video_reaction3 = new \App\VideoReaction();
        $video_reaction3->topic_id = 1;
        $user = \App\User::where('username', '=', 'edersonmoraes1')->first();
        $video_reaction3->user_id = $user->id;
        $video_reaction3->title = "Ahahahhaah";
        $video_reaction3->cover_photo = 'https://unsplash.it/640/360?random';
        $video_reaction3->save();

        //About Ronaldo Vs Messi
        $video_reaction4 = new \App\VideoReaction();
        $video_reaction4->topic_id = 2;
        $user = \App\User::where('username', '=', 'edersonmoraes1')->first();
        $video_reaction4->user_id = $user->id;
        $video_reaction4->title = "I'm not sure who is the best, but neither of them ever scored to me";
        $video_reaction4->cover_photo = 'https://unsplash.it/640/360?random';
        $video_reaction4->save();
    }
}
