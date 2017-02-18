<?php

use Illuminate\Database\Seeder;

class VideoReactionVideoSizesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $video_reactions = \App\VideoReaction::all();

        foreach($video_reactions as $video_reaction) {
            //SD - 640X480
            $video_size = new \App\VideoSize();
            $video_size->video_reaction_id = $video_reaction->id;
            $video_size->slug = 'sd';
            $video_size->width = '640';
            $video_size->height = '480';
            $video_size->content_type = 'video/mp4';
            $video_size->url = 'https://d1235ca2z646oc.cloudfront.net/videos/processed/1637/C0195_1.mp4.mp4';
            $video_size->save();

            //HD - 1280X720
            $video_size_hd = new \App\VideoSize();
            $video_size_hd->video_reaction_id = $video_reaction->id;
            $video_size_hd->slug = 'hd';
            $video_size_hd->width = '1280';
            $video_size_hd->height = '720';
            $video_size_hd->content_type = 'video/mp4';
            $video_size_hd->url = 'https://d1235ca2z646oc.cloudfront.net/videos/processed/1637/C0195_1.mp4.mp4';
            $video_size_hd->save();
        }
    }
}
