<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserContatos extends Model
{
    
    protected $fillable = [
        'id',
        'user_id',
        'name',
        'email',
        'telefone'
    ];
}
