<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parceria extends Model
{
    use HasFactory;

    protected $table = 'parcerias'; // nome da tabela

    protected $fillable = [
        'nome',
        'email',
        'telefone',
    ];
}