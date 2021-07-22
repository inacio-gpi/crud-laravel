<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>
    

## Tecnologias
- [Yarn](https://classic.yarnpkg.com/en/)
- [PHP - Composer](https://getcomposer.org/)
- [GIT](https://git-scm.com/downloads)
## Instalação
Clone este repositório usando o `GIT`
```sh
git clone https://github.com/psiubr/crud-laravel.git
```

Entre no projeto, instale as dependencias e configure seu aquivo `.ENV`

```sh
#entra na pastas
cd crud-laravel

#instale as dependencias e o framework
composer install --no-scripts

#baixe os pacotes
yarn

#crie o arquivo .env
cp .env.example .env

#crie uma nova chave para a aplicação
php artisan key:generate

#depois de configurar o arquivo .env, rodar as migrations
php artisan migrate
```

## Executando
Depois de configurado.. Rode:
```sh
php artisan serve
```
e se tudo ocorrer como o esperado, seu projeto estará rodando em http://localhost:8000/
