# laravelapi

Api para Listar Filmes e Livros
Tanto Filmes e Livros temos campos em comum
1-titulo
2-ano
3-autor

como consumir api

#Filmes

Todos os filmes
GET api/filmes

Listar por Id
GET api/filme/{id}

CRIAR
POST api/filme
parametros body - titulo, ano e autor

Atualizar
POST api/filme/{id}
parametros body - titulo, ano e autor

Deletar

DELETE api/filme{id}

#Livros

Todos os filmes
GET api/livros

Listar por Id
GET api/livro/{id}

CRIAR
POST api/livro
parametros body - titulo, ano e autor

Atualizar
POST api/livro/{id}
parametros body - titulo, ano e autor

Deletar

DELETE api/livro{id}


para rodar o projeto digite no terminal php artisan serve