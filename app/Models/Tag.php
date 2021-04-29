<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $table = 'tags';
    protected $primaryKey = 'id_tag';

    public function posts()
    {
        return $this->morphedByMany('App\Models\Post', 'taggable', 'taggables', 'id_tag');
    }

    public function videos()
    {
        return $this->morphedByMany('App\Models\Video', 'taggable','taggables', 'id_tag');
    }
}
