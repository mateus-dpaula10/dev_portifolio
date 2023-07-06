<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $fillable = [
        'nome_home',
        'email_home',
        'assunto_home'
    ];

    protected $table = 'homes';
}
