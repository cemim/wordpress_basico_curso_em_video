# Site Wordpress-5.9.2 - Curso em Vídeo do Gustavo Guanabara

## Requisitos
- Git;
- Docker;
- Docker Compose;

## Permissões Wordpress
- Comandos devem ser dados na raíz do projeto:
```
$ sudo find . -type d -exec chmod 775 {} \;
$ sudo find . -type f -exec chmod 664 {} \;
$ sudo chmod 640 ./wp-config.php 
$ sudo chown -R www-data:www-data . -R
```

## Compilar
- Entrar no diretório docker: 
```
$ cd docker
```
- Executat os containers:
```
$ docker-compose up -d
```

## Acesso ao Ambiente do Wordpress
- Acessar pelo navegador no endereço de [localhost](http://localhost/ "localhost");

- Usuário: "cursoemvideo";
- Senha: "cursoemvideo";