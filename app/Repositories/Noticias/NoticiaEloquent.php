<?php
/**
 *
 * Estágio - Samsung Ocean - NoticiaEloquent.php
 *
 * Todos os direitos reservados: brenopereira <breno.pereira@alumiar.me>
 * Arquivo alterado em: 8/24/18 9:25 PM
 *
 */

namespace App\Repositories\Noticias;

use App\Models\Noticia;

/**
 * Class NoticiaEloquent
 * @package App\Repositories\Noticias
 */
class NoticiaEloquent implements NoticiaInterface {

    /**
     * @var Noticia
     */
    protected $noticia;

    /**
     * NoticiaEloquent constructor.
     * @param Noticia $noticia
     */
    public function __construct(Noticia $noticia)
    {
        $this->noticia = $noticia;
    }

    /**
     *
     * Função para listar as 10 últimas notícias organizadas pelo ID em ordem decrecente
     *
     * @return mixed
     */
    public function all()
    {
        return $this->noticia->orderBy('id', 'desc')->limit(20)->get();
    }

    /**
     * @param $slug
     * @return mixed
     */
    public function find($slug)
    {
        return $this->noticia->where('slug', $slug)->first();
    }

    /**
     *
     * Função para criar uma nova notíciaa no banco de dados - Validação de campos repassadas no Controller
     *
     * @param array $array
     * @return mixed
     */
    public function create(array $array){
        return $this->noticia->create($array);
    }

    /**
     * @param $pages
     * @return mixed|void
     */
    public function paginate($pages){
        return $this->noticia->paginate($pages);
    }

    /**
     * @param $slug
     * @return mixed
     */
    public function destroy($slug)
    {
        return $this->find($slug)->delete();
    }
}