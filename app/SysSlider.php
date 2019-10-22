<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SysSlider extends Model
{
    use SoftDeletes;

    protected $table = 'sys_slider';

    protected $dates = ['deleted_at'];
}
