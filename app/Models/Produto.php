<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $table = 'produtos';
    protected $primaryKey = 'idProduto';

    protected $fillable = [
        'nome',
        'preco',
        'descricao',
        'estoque',
        'imagem',
        'idCategoria',
        'idColecao',
    ];

    // Produto pertence a uma coleção
    public function colecao()
    {
        return $this->belongsTo(Colecao::class, 'idColecao', 'idColecao');
    }
}
