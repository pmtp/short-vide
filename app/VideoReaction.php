<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VideoReaction extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'video_reactions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'cover_photo'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\User');
    }

    public function video_sizes()
    {
        return $this->hasMany('App\VideoSize', 'video_reaction_id' , 'id');
    }
}
