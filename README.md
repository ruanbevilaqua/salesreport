# SalesReport

## Sobre este projeto

Este projeto foi desenvolvido para atender a seguinte user history: 
1. um cliente pretende visualizar algumas informações de vendas.
2. o cliente deve ter acesso utilizando usuário e senha.
3. pode ser possível imprimir ou exportar informações. 

## Para rodar este projeto

Esse projeto foi implementado utilizando Laravel 6, então utilize:

1. PHP 7.2^
2. MySQL
3. Composer
4. Café

Depois de baixar esse repositório execute o comando "composer update" para que todas as dependências descritas no arquivo "composer.json" sejam baixadas. (O composer geralmente demora um pouquinho, então vá buscar uma xícara de café).

Acesse o arquivo .env e altere as variáveis de ambiente para o seu ambiente.

Não esqueça de alterar informações como o nome do banco de dados, o usuário e a senha.

Até o final dessa implementação decidirei se fornecerei as migrations e seeders para a criação do banco de dados com algumas informações pré definidas ou se disponibilizarei o dump do banco de dados.

## Sobre as funcionalidades disponíveis / funcionalidades exibidas

O sistema possui as seguintes entidades: User, Client, Order, Payment, Product.
Como o objetivo deste sistema não é fazer a gestão de todas essas entidades, quem logar só poderá acessar "completamente" as funcionalidades de Pedidos (Order), Produtos (Product) e Clientes (Cliente).

Isso também ainda não é um CRUD (talvez um CRD, e apenas para uma parcela das entidades), então não procure os métodos de atualização para os dados pois isso não foi implementado.

Contudo, se você desejar, pode criar um novo usuário utilizando algum cliente REST como Imsomnia ou Postman. Basta enviar um POST para ${url}/api/register informando name, email, password e password_confirmation.

## Sobre o desenvolvedor

O projeto foi desenvolvido por Ruan Diego Bevilaqua (ruan.bevilaqua@gmail.com).

## Licença (License)

O projeto está sob licensa MIT. 
Use-o como quiser.
Pull requests são sempre bem vindos.

## Quero ver isso funcionando

Você pode acessar a aplicação ao vivo heroku! Acesse http://shielded-refuge-15984.herokuapp.com/ e utilize o usuário "user@relatorio.com.br" ou "adminer@jwtsystem.com" e a senha "123456".