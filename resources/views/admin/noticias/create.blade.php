@extends('admin.templates.base', ['titulo' => 'Cadastrar notícia', 'descricao' => 'Cadastre uma nova notícia'])

@section('content')
    <div class="container">
        <div class="row container-samsung">
            @if(count($errors) >= 1)
                <div class="col-md-12">
                    @foreach($errors->all() as $error)
                        <div class="alert m-alert m-alert--default alert-info" role="alert">
                            {{ $error }}
                        </div>
                    @endforeach
                </div>
            @endif
            <div class="col-md-12">
                <form action="{{ route('admin.noticias.criar') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="titulo">Título da notícia</label>
                                <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Digite o título">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="autor">Autor da notícia</label>
                                <input type="text" class="form-control" id="autor" name="autor" placeholder="Digite o nome do autor">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="data">Data da notícia</label>
                                <input type="text" class="form-control" id="data" name="data" readonly="true" placeholder="Digite o título" value="{{ \Carbon\Carbon::now()->format('d-m-Y') }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="titulo">Imagem da notícia</label>
                                <input type="file" accept="image/jpeg" name="imagem">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="descricao">Descrição da notícia</label>
                                <textarea class="form-control" id="descricao" name="descricao" placeholder="Digite a descrição da notícia" cols="5" rows="5"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button class="btn btn-default btn-success">
                                Cadastrar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script>
        tinymce.init({
            selector: '#descricao'
        });
    </script>
@endsection