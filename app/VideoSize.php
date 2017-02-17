<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VideoSize extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['slug', 'content_type', 'url', 'width', 'height'];

    /**
     * Get the Video Reaction that owns this size.
     */
    public function video_reaction()
    {
        return $this->belongsTo('App\VideoReaction');
    }
}
