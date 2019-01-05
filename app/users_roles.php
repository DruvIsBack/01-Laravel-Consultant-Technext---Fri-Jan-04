<?php

namespace consultant;

use Illuminate\Database\Eloquent\Model;

class users_roles extends Model
{
    protected $fillable = ['uid', 'role'];
}
