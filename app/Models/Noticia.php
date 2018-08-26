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
    /**
     * @var array
     */
    protected $fillable = [
        'titulo',
        'descricao',
        'imagem',
        'autor',
        'data',
        'slug'
    ];

    /**
     * @var array
     */
    protected $hidden = [
        'imagem'
    ];

    /**
     * @var array
     */
    protected $appends = [
        'imagem_destaque'
    ];

    /**
     * @return mixed
     */
    public function getImagemDestaqueAttribute()
    {
        return Storage::url($this->imagem);
    }
}
