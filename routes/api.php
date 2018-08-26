<?php

Route::resource('/noticias', 'Noticias\NoticiaController', ['only' => ['index', 'show']]);
