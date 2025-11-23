<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transacao extends Model
{
    use HasFactory;

    protected $fillable = ['descricao', 'valor', 'data', 'categoria_id'];

    protected $casts = [
        'data' => 'date',
        'valor' => 'decimal:2',
    ];
}