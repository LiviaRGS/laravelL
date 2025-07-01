<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Produto extends Model
{
    protected $fillable = [
        'nome',
        'preco',
        'descricao',
        'categoria_id',
        'imagem'
    ];

    public function categoria(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
