# Programação para Web 2 — Arquiteturas Web

## Objetivo da aula

Compreender diferentes formas de organizar uma aplicação Web, comparando três arquiteturas:

- Monólito: HTML, CSS, SQL e PHP no mesmo arquivo.
- MVC: separação entre Model, View e Controller utilizando Laravel.
- API + Frontend: backend responsável pelos dados e frontend em React responsável pela interface.

A aula também abordou conceitos como request/response, HTTP, JSON, API, client-side e server-side.

## Atividades

### 1. Monólito

Implementação de uma loja utilizando PHP e SQLite, com listagem e detalhes dos produtos.

### 2. MVC

Implementação da mesma loja utilizando Laravel e Blade, separando as responsabilidades entre:

- Model
- Controller
- View

### 3. API + React

Criação de uma API utilizando Node.js e Express para fornecer os dados dos produtos em JSON, consumida por uma aplicação React.

### 4. Categorias

Como continuação da atividade, foram adicionadas funcionalidades relacionadas às categorias de produtos.

#### Laravel

- Listagem de categorias.
- Detalhes de uma categoria.
- `CategoriaController`.
- Views de categorias.
- Rotas `/categorias` e `/categorias/{id}`.

#### API + React

- Endpoint `GET /api/categorias`.
- Endpoint `GET /api/categorias/:id`.
- Retorno dos produtos relacionados à categoria.