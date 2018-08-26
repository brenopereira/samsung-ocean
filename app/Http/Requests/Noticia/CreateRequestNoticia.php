<?php
/**
 *
 * Estágio - Samsung Ocean - CreateRequestNoticia.php
 *
 * Todos os direitos reservados: brenopereira <breno.pereira@alumiar.me>
 * Arquivo alterado em: 8/24/18 9:16 PM
 *
 */

namespace App\Http\Requests\Noticia;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class CreateRequestNoticia
 * @package App\Http\Requests\Noticia
 */
class CreateRequestNoticia extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Custom messages validation rules that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'titulo.required' => 'O título da notícia é obrigatório',
            'descricao.required' => 'A descrição da notícia é obrigatória',
            'imagem.required' => 'A imagem da notícia é obrigatória',
            'autor.required' => 'O nome do autor da notícia é obrigatório',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'titulo' => 'required',
            'descricao' => 'required',
            'imagem' => 'required',
            'autor' => 'required'
        ];
    }
}
