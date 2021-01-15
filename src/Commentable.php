<?php

namespace KirschbaumDevelopment\NovaComments;

use App\Models\NovaComment;

trait Commentable
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function comments()
    {
        return $this->morphMany(NovaComment::class, 'commentable');
    }
}
