<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'description'];

    /**
     * Get the video reactions for the topic.
     */
    public function video_reactions()
    {
        return $this->hasMany('App\VideoReaction', 'topic_id', 'id');
    }

}
