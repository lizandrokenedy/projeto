# Tecnologias utilizadas

- PHP 7.4
- Laravel 8
- Bootstrap 4

# Instruções para subir o ambiente

#### No terminal execute os seguintes comandos:

- composer install
- cp .env.example .env
- php artisan key:generate

##### Crie uma base de dados no mysql, exemplo: projeto

##### Defina as configurações de conexão com a base de dados criada no arquivo .env

##### Rode as migrations para criar as tabelas, no terminal execute:

- php artisan migrate

##### Você poderá subir a aplicação utilizando apache ou nginx
##### Ou se preferir utilize o artisan para disponibilizar um servidor de acesso rápido na porta 8000, no terminal execute:

- php artisan serve