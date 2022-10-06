<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // fillable
    protected $fillable = ['slug', 'name', 'description', '_lft', '_rgt ', 'parent_id'];

    // belongs to Sites
    public function sites()
    {
        return $this->hasMany(Sites::class);
    }
}
