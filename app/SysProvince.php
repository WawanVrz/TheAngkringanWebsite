<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SysProvince extends Model
{
    use SoftDeletes;

    protected $table = 'master_province';

    protected $dates = ['deleted_at'];
}
