<div class="nav-samsung">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <ul>
                    <li><a href="{{ route('admin.noticias.index') }}" class="@if(Route::getFacadeRoot()->current()->uri() === "administrador/noticias") active @else inative @endif">Listar notícias</a></li>
                    <li><a href="{{ route('admin.noticias.adicionar') }}" class="@if(Route::getFacadeRoot()->current()->uri() == "administrador/noticias/adicionar") active @else inative @endif">Cadastrar notícia</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>