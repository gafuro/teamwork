<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    protected $fillable = ['due_dt','body','created_at','updated_at','completed_tag'];

    public function completed()
    {
        $this->completed_flag = 1;
        $this->save();
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }
}
