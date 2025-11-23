# Trabalho Avaliativo – Backend com PHP, Docker, Laravel e MySQL

## Objetivo do Projeto

Este projeto foi desenvolvido como parte de um trabalho avaliativo para criar um ambiente completo de desenvolvimento utilizando Docker, rodando uma aplicação Laravel conectada a um banco de dados MySQL. O foco está no desenvolvimento backend, organização do projeto e implementação de um CRUD básico para as entidades `Categoria` e `Produto`.

---

## Funcionalidades Implementadas

### CRUD de Categorias

Cada categoria possui os seguintes atributos:

- **id**: Identificador único.
- **nome**: Nome da categoria (obrigatório).
- **descricao**: Descrição da categoria (opcional).
- **timestamps**: Datas de criação e atualização.

Funcionalidades:

- **Criar Categoria**: Formulário para adicionar uma nova categoria.
- **Listar Categorias**: Exibe todas as categorias cadastradas.
- **Editar Categoria**: Permite atualizar os dados de uma categoria existente.
- **Excluir Categoria**: Remove uma categoria do sistema.

### CRUD de Produtos

Cada produto possui os seguintes atributos:

- **id**: Identificador único.
- **nome**: Nome do produto.
- **descricao**: Descrição do produto.
- **preco**: Preço do produto.
- **categoria_id**: Relacionamento com a categoria correspondente.
- **timestamps**: Datas de criação e atualização.

Funcionalidades:

- **Criar Produto**: Formulário para adicionar um novo produto.
- **Listar Produtos**: Exibe todos os produtos cadastrados, organizados por categoria.
- **Editar Produto**: Permite atualizar os dados de um produto existente.
- **Excluir Produto**: Remove um produto do sistema.

---

## Estrutura do Projeto

### Arquivos Entregues

- **docker-compose.yml**: Configuração do ambiente Docker (PHP, MySQL, PHPMyAdmin).
- **Dockerfile**: Configuração do ambiente PHP com extensões necessárias.
- **Projeto Laravel**: Código-fonte da aplicação.
- **Migrations**: Arquivos para criação das tabelas `categorias` e `produtos`.
- **Models**: Classes `Categoria` e `Produto` com boas práticas do Eloquent.
- **Controllers**: `CategoriaController` e `ProdutoController` com métodos para CRUD.
- **Rotas**: Configuração no arquivo `web.php`.
- **Views**: Formulários simples em Blade para as operações CRUD.

---

## Como Rodar o Projeto

### Pré-requisitos

- **Docker** e **Docker Compose** instalados.
- **Composer** instalado (opcional, caso queira rodar localmente sem Docker).

### Passos

1. Clone o repositório:
   ```bash
   git clone <URL_DO_REPOSITORIO>
   ```
2. Acesse a pasta do projeto:
   ```bash
   cd prova-php
   ```
3. Suba os containers com Docker:
   ```bash
   docker-compose up -d
   ```
4. Acesse o projeto no navegador:
   ```
   http://localhost:8000
   ```

---

## Estrutura de Pastas

- **app/**: Contém os arquivos principais do Laravel (Controllers, Models, etc.).
- **database/migrations/**: Arquivos de migração para o banco de dados.
- **resources/views/**: Arquivos Blade para as views.
- **routes/web.php**: Definição das rotas da aplicação.
- **Docker/**: Configuração do ambiente Docker.

---

## Observações

- O front-end utiliza os formulários padrão do Laravel Blade.
- O banco de dados é gerenciado pelo MySQL rodando em um container Docker.
- O PHPMyAdmin está disponível em `http://localhost:8080` para gerenciar o banco de dados.

---

## Autor

- **Nome do Aluno**: [Seu Nome Aqui]
- **Data**: Novembro de 2025
