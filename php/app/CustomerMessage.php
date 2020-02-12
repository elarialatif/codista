<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerMessage extends Model
{
    protected $fillable = [
        'name', 'number', 'email', 'subject', 'message'
    ];
}
