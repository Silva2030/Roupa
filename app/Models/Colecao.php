<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class colecao extends Model
{
    use HasFactory;

    protected $table = 'colecoes';
    protected $primaryKey = 'idcolecao';

    protected $fillable = [
        'nomecolecao',
        'descricao',
        'dataLancamento',
    ];

    // Relacionamento: uma coleção tem muitos produtos
    public function produtos()
    {
        return $this->hasMany(Produto::class, 'idcolecao', 'idcolecao');
    }
}
