# Formulário em Laravel 6.0.*


_Formulário de contato com envio de email e cadastro em banco de dados utilizando o framework PHP [Laravel 6.0](http://www.laravel.com)._


## Pré-requisitos
- Laravel 6.0 instalado e traduzido;
- Environment file (.env) previamente configurado com as conexões do seu banco de dados;
- Conta de email com o serviço SMTP ativado.

## Etapas
* Estruturação da Database com o recurso "migration";
* Criação do Model;
* Configuração da Route;
* Criação e configuração do Controller;
* Criação e configuração das Views;
* Configuração do SMTP no Environment file (.env)  ;

### Preparação
Execute o comando abaixo para efetuar o download dos arquivos deste repositório.
```sh
git clone https://github.com/acranerafael/Formulario_php.git

```
ou faça o download do [arquivo](https://github.com/acranerafael/Formulario_php/archive/master.zip)

### Etapa 1: Estruturação da Database
Copie o arquivo `2020_02_18_001152_criar_tabela.php` para o diretório `../database/migrations/` e digite o comando abaixo (no diretório raiz da sua aplicação):
```sh
php artisan migrate:refresh

```

### Etapa 2: Criação do Model
Copie o arquivo `Contact.php` para o diretório `app/`

### Etapa 3: Configuração da Route
Copie ou edite o arquivo `web.php` que está localizado no diretório `routes/`

### Etapa 4: Criação e configuração do Controller
Execute o comando abaixo dentro do diretorio raiz:
```sh
php artisan make:controller ContactController

```

Em seguida, substitua o arquivo `app/Http/Controllers/ContactController.php`


### Etapa 5: Criação e configuração das Views


Copie o arquivo `resources/views/welcome.blade.php` ou edite o "index" da sua aplicação


### Etapa 6: Configuração do SMTP no Environment file (.env)
