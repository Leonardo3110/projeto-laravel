<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voluntario extends Model
{
    use HasFactory;

    protected $table = 'voluntario';

    protected $fillable = [
        'nome',
        'telefone',
        'endereco',
        'cidade',
        'email',
        'texto_livre',
    ];
}