<h1 align="center">
Todo App - Laravel
</h1>

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




