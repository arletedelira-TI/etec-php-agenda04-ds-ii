# 📋 Atividade Prática – Estruturas de Repetição e Funções em PHP

> Projeto desenvolvido para a disciplina **Desenvolvimento de Sistemas II** da **Etec (Centro Paula Souza – EAD)**.

## 👨‍🎓 Informações

- **Instituição:** Etec (Centro Paula Souza – EAD)
- **Curso:** Técnico em Desenvolvimento de Sistemas
- **Componente Curricular:** Desenvolvimento de Sistemas II
- **Estudante:** Arlete de Lira

---

## 📖 Sobre o Projeto

Esta atividade tem como objetivo demonstrar a utilização de **funções**, **estruturas de repetição** e **manipulação de dados em PHP**.

A aplicação recebe dados enviados por um formulário HTML utilizando o método **POST**, realiza a sanitização das informações, verifica a maioridade do usuário e exibe os resultados de forma dinâmica em uma página HTML.

---

## 🚀 Funcionalidades

- Recebimento de dados via formulário HTML.
- Sanitização de texto utilizando funções nativas do PHP.
- Verificação automática de maioridade.
- Processamento de múltiplos usuários com `foreach`.
- Exibição dinâmica dos resultados em HTML.

---

## 🛠️ Conceitos Aplicados

### Funções Personalizadas

Foi criada a função:

```php
validarCadastro(string $nome, int $idade): array
```

Responsável por:

- Padronizar o nome informado;
- Validar a idade;
- Retornar um array contendo os dados tratados.

### Funções Nativas

Foram utilizadas as funções:

- `trim()`
- `strtolower()`
- `ucwords()`

para limpar e padronizar os dados recebidos.

### Estruturas de Repetição

Foi utilizado o laço:

```php
foreach
```

para processar uma lista de usuários e exibir os resultados dinamicamente.

---

## 💻 Tecnologias Utilizadas

- PHP 7.4+
- HTML5
- CSS3

---

## ▶️ Como Executar

### Pré-requisitos

- PHP 7.4 ou superior
- XAMPP, WAMP ou PHP CLI

### Clonar o projeto

```bash
git clone https://github.com/seu-usuario/seu-repositorio.git
```

### Executar

#### Usando XAMPP/WAMP

1. Inicie o Apache.
2. Coloque o projeto dentro da pasta `htdocs` (XAMPP) ou `www` (WAMP).
3. Acesse:

```
http://localhost/nome-da-pasta/cadastro.html
```

#### Usando o servidor interno do PHP

Dentro da pasta do projeto execute:

```bash
php -S localhost:8000
```

Depois abra:

```
http://localhost:8000/cadastro.html
```

---

## 📂 Estrutura do Projeto

```
Agenda04/
├── cadastro.html
├── cadastro.php
├── script.js
├── style.css
├── cyberpunk-background.png
├── mapa-mental.pdf
└── README.md
```

---

## 📚 Conteúdos Praticados

- Funções em PHP
- Arrays
- Arrays multidimensionais
- Estruturas de repetição
- Estruturas condicionais
- Método POST
- Manipulação de Strings
- Boas práticas de organização de código

---

## 📄 Licença

Projeto desenvolvido exclusivamente para fins acadêmicos na **Etec – Centro Paula Souza**.