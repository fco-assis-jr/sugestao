<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PCempr extends Model
{
    protected $table = 'pcempr';
    protected $connection = 'oracle';
    protected $fillable = ['nome', 'usuariobd', 'senhabd', 'funcao'];
}
