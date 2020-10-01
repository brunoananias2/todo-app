<h1 align="center">
Todo App - Laravel
</h1>

Aplicação **Todo list** (Lista de Tarefas) desenvolvida em Laravel com persistência de dados em PostgreSQL. Foi criado um controller para utilização com a view padrão do Laravel (Utilizando, HTML, CSS e Bootstrap) e outro controller para a API com as rotas de comunicação com a aplicação desenvolvida em ReactJs disponível [Nesse Repositório](https://github.com/brunoananias2/todo-app-reactjs).

### Itens Concluídos
- A. Criar uma aplicação java web utilizando PHP usando o Framework Laravel
- B. Utilizar persistência em um banco de dados Postegres SQL
- C. Utilizar Eloquent ORM
- D. Utilizar Bootstrap 4
- G. Criar single page app utilizando VueJS, React ou Angular
- H. Publicar projeto no heroku

<p align="center">Deploy no <a href="https://todo-brunoananias.herokuapp.com/">Heroku</a>.</p>

<hr>

![](https://i.imgur.com/HhaAIiD.jpg)

## Desenvolvedor

[<img src="https://avatars1.githubusercontent.com/u/4417927?&v=4" width="75px;"/>](https://github.com/brunoananias2)

[Bruno Ananias](https://github.com/brunoananias2)

### Pré requisitos
1. Composer instalado.
2. PHP 7.2 ou superior.

### Instalação e execução

1. Dentro da pasta raiz execute o comando `composer install`;
2. Crie uma base de dados em Postgresql e em seguida configure o arquivo _database.php_ alterando a linha:<br>
`'default' => env('DB_CONNECTION', 'pgsql'),`<br>
3. Configure o arquivo _.env_ com os dados da conexão do banco de dados;
4. Execute o comando `php artisan migrate` para rodar as migrations;
5. Execute o comando `php artisan serv` para iniciar a aplicação.




