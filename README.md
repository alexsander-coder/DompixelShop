# Loja virtual DompixelShop

Cadastro de Produtos

## Descrição

DomPixelShop é uma plataforma online de personalização de produtos, alimentada pela potência do Laravel 8 e PHP 8 acompanhados do MySQL e de boas práticas com padrão MVC.
O sistema tem a capacidade de:

- Criar Produtos
- Listar Produtos
- Exibir detalhes de produtos
- Excluir Produtos

## Instruções para executar o projeto

# Configuração do projeto

- O arquivo .env foi retirado do gitignore para facilitar a execução
- crie uma tabela no MySQL chamada: laravel
- Clonar o repositório: [https://github.com/alexsander-coder/DompixelShop.git](https://github.com/alexsander-coder/DompixelShop.git)
- Após concluído acesse a pasta: cd productRegistration
- Dentro da pasta executar os seguintes comandos:

# Instale as dependências do projeto

- `composer install`

# Execute as migrações do banco de dados

- `php artisan migrate`

# Inicie o servidor local

- `php artisan serve`
## ROTA

- products
- http://localhost:8000/products
---
## RFs (Requisitos funcionais)

- [X] Deve ser possível cadastrar produtos;
- [X] Deve ser possível listar produtos;
- [X] Deve ser possível editar produtos;
- [X] Deve ser possível excluir produtos;
- [X] Deve ser possível visualizar detalhes de produtos especificos;

## RNs (Regras de negócio)

- [X] Somente o campo descrição é opcional;

## RNFs (Requisitos não-funcionais)

- [X] O campo preço precisa ser no formato BRL;
- [X] A paginação precisa ser com 5 itens por página;
- [X] A coluna descrição precisa de rolagem;
