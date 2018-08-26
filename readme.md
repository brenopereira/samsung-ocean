<p align="center"><img src="http://www.oceanbrasil.com/img/general/logoOceanI.png"></p>

## Sobre o projeto

O projeto consiste em uma pequena plataforma CMS, de gestão de conteúdo. 
Foi criada uma pequena API REST de notícias, onde informa todas as notícias e também, exibe informação de uma única notícia, foi necessário para repassar os dados para o ReactJS, biblioteca utilizada para o Frontend. 
O projeto se tornou em SPA, onde  não há reload da página para a navegação na parte do Frontend. As tecnologias utilizadas foram:

- [Composer](https://getcomposer.org).
- [Laravel 5.6](https://laravel.com).
- [Bootstrap](https://getbootstrap.com/).
- [ReactJS](https://reactjs.org/).
- [SASS](https://sass-lang.com/).
- [NodeJS](https://nodejs.org/en/).

## Rotas criadas
- GET - /api/noticias - Listagem de todas as notícias do banco de dados em formato API REST (JSON).
- /api/noticias/{slug da noticia} - Lista as informações de uma única notícia filtrada pelo SLUG em formato API REST (JSON).

- GET - / - Página princial.
- GET - /login - Página de login (exemplo).
- GET - /administrador/noticias - Página administrativa (sem autenticação) de listagem de todas as notícias.
- GET - /administrador/noticias/adicionar - Página administrativa (sem autenticação) para adição de uma nova notícia.
- POST - /administrador/noticias/adicionar - Rota reservada ao método POST para salvar os dados da criação da notícia ao banco de dados (regras de campos inseridas, ex: Título obrigatório, etc.).
- GET - /administrador/noticias/apagar{slug} - Rota reservada para apagar uma notícia filtrada pelo SLUG.

## Como rodar o projeto

Observação importante: Para utilizar o projeto você deverá conter o PHP 7.1.3 ou superior a esta versão. Para baixar todos os pacotes necessários, deverá também ter o [Composer para windows](https://getcomposer.org/Composer-Setup.exe) ou [Composer para Linux/MacOS](https://getcomposer.org/download/) e rodar o comando após a intalação no diretório do projeto: composer update - Será instalado todos os pacotes necessários.

Para alterações no componentes do ReactJS você precisará do [NodeJS](https://nodejs.org) para compilar os arquivos em JavaScript.

- Para rodar o projeto, é ncessário alterar o arquivo .env (arquivo onde fica as informações do banco de dados), alterando: DB_DATABASE, DB_USERNAME e DB_PASSWORD com as informações do seu servidor de banco de dados
- Rode o comando "php artisan serve", na pasta do projeto para inciar o projeto e acessar: http://localhost:8000, ou configurar o servidor web para a pasta public ou então, copiar todo o projeto para o WAMP, XAMPP, EasyPHP ou outro servidor integrado. 
- Rode o comando: "php artisan storage:link" para linkar todas as imagens as notícias.

## Estrutura de pastas

- /app/Http/Controllers/Admin/Noticias - Responsável por toda a pasta de regra de negócio e onde é feita a lógica da parte administrativa.
- /app/Http/Controllers/Noticias - Pasta onde fica o Controller da API REST que alimenta o Frontend em ReactJS.

- /app/Models - Pasta onde fica o Model, responsável por conectar o Framework a tabela "noticias" ao banco de dados.
- /app/Repositories/Noticias - Pasta onde é organizada toda a lógica de acesso e funções do banco de dados, por exemplo: no arquivo NoticiaEloquent  há uma função all(), ela retorna todos os valores do banco de dados.  O arquivo  NoticiaInterface, é a chamada isolada as funções do Eloquent, onde faz todo o processo de inserção, apagar, e listar as notícias, tornando mais seguro o CMS.

- /resources/assets/js/components/blog/item.js - Arquivo que é usado na página principal (box de notícia), onde pode ser reaproveitado em qualquer parte do site, sem perder o estilo ou prejudicar a estrutura do site principal - O seu estilo fica em /resources/assets/js/components/blog/item.css
- /resources/assets/js/components/header/index.js - Header do Frontend isolado em componente, facilitando a alteração futuramente - O seu estilo fica em /resources/assets/js/components/header/header.css

- /resources/assets/js/pages/blog/detalhe.js - Página do detalhe da notícia, ela carrega todas as informações via API REST e exibe na tela - O seu estilo fica em /resources/assets/js/pages/blog/detalhe.css
- /resources/assets/js/pages/home/home.js - Página principal onde é exibidas todas as notícias - O seu estilo fica em /resources/assets/js/pages/home/home.css

- /resources/assets/sass - Todos os estilos referente ao painel do administrador

- /storage/app/public - Todos as imagens onde são enviadas no cadastro da notícia

## Segurança

O Framework utilizado suporta autenticação, porém não ativei pois não era necessário ao teste, visto que também elevaria o tempo de desenvolvimento para integrar por exemplo, uma notícia ao usuário logado e exibiar a informação na API REST desenvolvida e há um filtro por TOKEN CSRF para evitar ataques aos campos/banco.

# Imagem exemplo
<p align="center"><img src="https://github.com/brenopereira/samsung-ocean/blob/master/home-page.png?raw=true"></p>
