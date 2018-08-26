<?php
/**
 *
 * Estágio - Samsung Ocean - NoticiaController.php
 *
 * Todos os direitos reservados: brenopereira <breno.pereira@alumiar.me>
 * Arquivo alterado em: 8/25/18 4:39 AM
 *
 */

namespace App\Http\Controllers\Admin\Noticias;

use App\Http\Controllers\Controller;
use App\Http\Requests\Noticia\CreateRequestNoticia;
use App\Repositories\Noticias\NoticiaInterface;
use Storage, Session;

/**
 * Class NoticiaController
 * @property NoticiaInterface noticia
 * @package App\Http\Controllers\Admin\Noticias
 */
class NoticiaController extends Controller {

    /**
     * NoticiaController constructor.
     * @param NoticiaInterface $NoticiaInterface
     */
    public function __construct(NoticiaInterface $NoticiaInterface)
    {
        $this->noticia = $NoticiaInterface;

        \Carbon\Carbon::setLocale('pt_BR');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $noticias = $this->noticia->paginate(10);
        return view('admin.noticias.index')->with('noticias', $noticias);
    }

    public function create()
    {
        return view('admin.noticias.create');
    }

    /**
     * @param CreateRequestNoticia $request
     * @return mixed
     */
    public function store(CreateRequestNoticia $request)
    {
        $imagem = Storage::put('/public', $request->file('imagem'));
        $this->noticia->create($request->except('imagem') + ['imagem' => $imagem, 'slug' => str_slug($request->get('titulo') . str_random(20))]);
        Session::flash('sucesso', 'Notícia criada com sucesso!');
        return redirect()->route('admin.noticias.index');
    }

    public function destroy($slug)
    {
        $this->noticia->destroy($slug);
        Session::flash('sucesso', 'Notícia apagada com sucesso!');
        return redirect()->route('admin.noticias.index');
    }
}