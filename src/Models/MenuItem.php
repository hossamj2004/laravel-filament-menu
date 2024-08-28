<?php

namespace YourNamespace\Models;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    protected $fillable = ['label', 'url', 'icon', 'parent_id'];
    public $timestamps = true;
}
