@extends('admin.templates.base', ['titulo' => 'Listagem de notícias', 'descricao' => 'Listagem de todas as notícias do sistema'])

@section('content')
    <div class="container">
        <div class="row container-samsung">
            <div class="col-md-12">
                @if(\Session::has('sucesso'))
                    <div class="alert m-alert m-alert--default alert-success" role="alert">
                        {{ \Session::get('sucesso') }}
                    </div>
                @endif
                <h3>Listagem de notícias</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Título</th>
                            <th>Descrição</th>
                            <th>Autor</th>
                            <th>Data</th>
                            <th class="text-center">Opções</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($noticias->count() >= 1)
                            @foreach($noticias as $noticia)
                                <tr>
                                    <td>{{ $noticia->titulo }}</td>
                                    <td>{!!  str_limit(strip_tags($noticia->descricao), 100, '...')  !!}</td>
                                    <td>{{ $noticia->autor }}</td>
                                    <td>{{ $noticia->created_at->diffForHumans() }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('admin.noticia.apagar', ['slug' => $noticia->slug]) }}" class="link-admin">Apagar</a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="5" class="text-center">
                                    Nenhuma notícia cadastrada
                                </td>
                            </tr>
                        @endif
                    </tbody>
                </table>

                {{ $noticias->links() }}
            </div>
        </div>
    </div>
@endsection