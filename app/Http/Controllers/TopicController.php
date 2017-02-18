<?php

namespace App\Http\Controllers;

use App\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    /**
     * @param $id
     */
    public function show($id){
        $topic = Topic::where('id' , '=', $id)->first();

        if(count($topic) == 0){
            return response(["message" => "No topic found with that id"], 200)
                ->header('Content-Type', 'application/json');
        }

        $topic->video_reactions;

        foreach ($topic->video_reactions as $video_reaction){
            $video_reaction->video_sizes;
        }

        return response($topic, 200)
            ->header('Content-Type', 'application/json');
    }
}
