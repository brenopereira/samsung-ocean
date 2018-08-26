<?php
/**
 *
 * Estágio - Samsung Ocean - Noticia.php
 *
 * Todos os direitos reservados: brenopereira <breno.pereira@alumiar.me>
 * Arquivo alterado em: 8/24/18 8:18 PM
 *
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Storage;

/**
 * Class Noticia
 * @package App\Models
 */
class Noticia extends Model
{
    protected $fillable = [
        'titulo',
        'descricao',
        'imagem',
        'autor',
        'data',
        'slug'
    ];

    protected $hidden = [
        'imagem'
    ];

    protected $appends = [
        'imagem_destaque'
    ];

    public function getImagemDestaqueAttribute()
    {
        return Storage::url($this->imagem);
    }
}
