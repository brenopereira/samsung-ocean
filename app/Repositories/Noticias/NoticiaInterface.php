<?php
/**
 *
 * Estágio - Samsung Ocean - NoticiaInterface.php
 *
 * Todos os direitos reservados: brenopereira <breno.pereira@alumiar.me>
 * Arquivo alterado em: 8/24/18 9:24 PM
 *
 */

namespace App\Repositories\Noticias;

/**
 * Interface NoticiaInterface
 * @package App\Repositories\Noticias
 */
interface NoticiaInterface {
    /**
     * @return mixed
     */
    public function all();

    /**
     * @param $slug
     * @return mixed
     */
    public function find($slug);

    /**
     * @param array $array
     * @return mixed
     */
    public function create(array $array);

    /**
     * @param $pages
     * @return mixed
     */
    public function paginate($pages);

    /**
     * @param $slug
     * @return mixed
     */
    public function destroy($slug);
}