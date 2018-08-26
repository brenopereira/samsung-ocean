<?php
/**
 *
 * Estágio - Samsung Ocean - NoticiaController.php
 *
 * Todos os direitos reservados: brenopereira <breno.pereira@alumiar.me>
 * Arquivo alterado em: 8/24/18 9:26 PM
 *
 */

namespace App\Http\Controllers\Noticias;

use App\Http\Controllers\Controller;
use App\Repositories\Noticias\NoticiaInterface;

/**
 * Class NoticiaController
 * @package App\Http\Controllers\Noticias
 */
class NoticiaController extends Controller
{
    /**
     * NoticiaController constructor.
     * @param NoticiaInterface $noticia
     */
    public function __construct(NoticiaInterface $noticia)
    {

        $this->noticia = $noticia;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $noticias = [];

        foreach ($this->noticia->all() as $key => $noticia){
            $noticias[$key] = [
                'id' => $noticia->id,
                'titulo' => $noticia->titulo,
                'descricao' => str_limit(strip_tags($noticia->descricao), 150, '...'),
                'imagem_destaque' => $noticia->imagem_destaque,
                'autor' => $noticia->autor,
                'data' => $noticia->data,
                'slug' => $noticia->slug
            ];
        }

        return response()->json($noticias);
    }

    /**
     * Display the specified resource.
     *
     * @param $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $noticia = $this->noticia->find($slug);
        return response()->json($noticia);
    }
}
