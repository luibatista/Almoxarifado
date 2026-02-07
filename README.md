# 📦 Sistema de Almoxarifado Web (IFBA)

Sistema web desenvolvido para o gerenciamento de estoque e fluxo de requisições do Almoxarifado do IFBA. O projeto permite o controle de usuários, gestão de produtos e realização de pedidos de materiais.

## 🚀 Funcionalidades

O sistema possui as seguintes funcionalidades principais:

### 👤 Gestão de Usuários (Autenticação)
- **Cadastro de Usuários:** Criação de nova conta com Nome, Matrícula, E-mail Institucional e Senha.
- **Login:** Acesso seguro ao sistema.
- **Recuperação de Senha:** Fluxo completo para redefinir a senha caso o usuário a esqueça (validação de e-mail e criação de nova senha).
- **Logout:** Encerramento seguro da sessão.

### 📦 Gestão de Estoque (Admin)
- **Cadastrar Produto:** Adição de novos itens ao sistema com Nome, Categoria e Imagem (Upload).
- **Listar Produtos:** Visualização de todos os itens cadastrados no banco de dados.
- **Excluir Produto:** Remoção de itens do estoque.

### 🛒 Fluxo de Requisição
- **Navegação por Categorias:** Visualização de produtos filtrados por setor (Alimentos, Informática, Limpeza, Papelaria).
- **Carrinho de Compras:** Adicionar itens à lista de requisição (interação via JavaScript).
- **Fazer Requisição:** Finalização do pedido dos itens selecionados.

---

## 🛠️ Tecnologias Utilizadas

- **Front-end:** HTML5, CSS3, JavaScript (jQuery).
- **Back-end:** PHP (Nativo).
- **Banco de Dados:** MySQL.
- **Servidor Local:** Apache (via XAMPP/WAMP).

---

## ⚙️ Como Rodar o Projeto

### Pré-requisitos
Certifique-se de ter o **XAMPP** (ou similar) instalado na sua máquina.

### 1. Instalação
1. Clone ou baixe este repositório.
2. Mova a pasta do projeto para o diretório do servidor (geralmente `C:\xampp\htdocs\Almoxarifado`).

### 2. Configuração do Banco de Dados
1. Abra o **phpMyAdmin** (`http://localhost/phpmyadmin`).
2. Crie um banco de dados chamado `almox`.
3. Execute o seguinte script SQL na aba **SQL**:

```sql
CREATE DATABASE IF NOT EXISTS almox;
USE almox;

CREATE TABLE IF NOT EXISTS usuarios (
    id_user INT AUTO_INCREMENT PRIMARY KEY,
    nome_user VARCHAR(100) NOT NULL,
    email_user VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    matricula VARCHAR(20)
);

CREATE TABLE IF NOT EXISTS produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    categoria VARCHAR(50),
    imagem VARCHAR(255)
);

-- Usuário Admin Padrão
INSERT INTO usuarios (nome_user, email_user, senha, matricula) 
VALUES ('Admin', 'admin@ifba.edu.br', '1234', '001');