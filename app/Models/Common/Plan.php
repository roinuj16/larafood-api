<?php

namespace LarAPI\Models\Common;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{

    protected $fillable = ['name', 'url', 'price', 'description'];

}
