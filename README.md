# Formulário de contato utilizando Laravel 6.0.*


_Formulário de contato com envio de email e cadastro em banco de dados utilizando o framework PHP [Laravel 6.0](https://laravel.com/docs/6.x)._


## Pré-requisitos
- Laravel 6.0 instalado e traduzido;
- Environment file (.env) previamente configurado com as conexões do seu banco de dados;
- Composer instalado;
- Conta de email com o serviço SMTP ativado.

## Etapas
* Estruturação da Database com o recurso "migration";
* Criação do Model;
* Configuração da Route;
* Criação e configuração do Controller;
* Criação e configuração das Views;
* Instalação do Guzzle;
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
Execute o comando abaixo para instalar o pacote do Laravel para formulários
```sh
composer require laravelcollective/html
```

Copie o arquivo `resources/views/welcome.blade.php` ou edite o "index" da sua aplicação

Copie o arquivo `email.blade.php` para o diretório `resources/views/`


### Etapa 6: Instalação do Guzzle (PHP stream handler)
```sh
composer require guzzlehttp/guzzle
```

### Etapa 7: Configuração do SMTP no Environment file 
Para a utilização do SMTP Google será necessário adicionar uma camada extra de segurança, conhecida como autenticação de dois fatores.
Para a configuração correta da autenticação, acesse os sites:

* [Ativar a verificação em duas etapas](https://support.google.com/accounts/answer/185839).
* [Fazer login usando senhas de app](https://support.google.com/accounts/answer/185833?hl=pt-BR).

Após a configuração completa da autenticação, execute o comando abaixo para habilitar o uso do SMTP no Laravel
```sh
php artisan make:mail smtp
```
Em seguida, edite as especificações do seu servidor de SMTP no arquivo `.env`
Por exemplo:
```sh
MAIL_DRIVER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=digite_o_seu_email_aqui@gmail.com
MAIL_PASSWORD=digite_o_seu_apppassword(token gerado pelo google)
MAIL_ENCRYPTION=tls
```



































