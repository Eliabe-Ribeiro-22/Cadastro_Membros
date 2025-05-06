# Cadastro_Membros

## Sobre o projeto

Projeto que será desenvolvido para permitir o gerenciamento de membros da igreja Assembleia de Deus em Campo Belo do Sul. Funções de CRUD. Nele, poderemos cadastrar um membro, excluí-lo, alterar suas informações, pesquisar os membros por nome. E imprimir membros por determinada congregação, imprimir todos os membros através da criação de PDF's.

## Tecnologias utilizadas

Laravel, MySQL, CSS, HTML,

## Log de eventos

### 17/01 - Terça-feira - Eliabe

----

- Criado repositório Cadastro de Membros, no GitHub.

----

- Clonagem do repositório para minha máquina local.

----

- Realizada a instalação do Laravel na aplicação

----

- Desenvolvimento do CRUD - Create - Implementado funcionalidade de cadastramento de membros

----

- Desenvolvimento do CRUD - Read - Implementado funcionalidade de pesquisa dos membros, através de campo com botão de pesquisa

----

- Desenvolvimento do CRUD - Delete - Implementado funcionalidade de exclusão de membros. Com isso, o usuário clica no ícone de lixeira próximo ao membro, realizando assim a exclusão dele.

----

- Desenvolvimento do CRUD - Update - Implementado funcionalidade de alteração de membros.

  - Com isso, o usuário clica no ícone de lápis próximo ao membro, e assim, o formulário de alteração é aberto com todas as informações do membro. E após o usuário clicar no botão alterar desse formulário, realiza-se a alteração desse membro.

    - Isso tudo ocorre através da _rota/controller_ update, juntamente com o _model_ Membro e auxílio do _Eloquent_, nativo do Laravel.

----

#### 01/02 - Quarta-feira - Eliabe

- Refatoração do CRUD - Create - Com isso, todos os campos do cadastro de membros possuem corretamente a funcionalidade de cadastramento.

----

- Refatoração do CRUD - Read - As principais informações dos membros são exibidos na página inicial do site, de acordo com as requisições do cliente.

----

- Refatoração do CRUD - Update - Com isso, todos os campos do cadastro de membros possuem corretamente a funcionalidade de alteração.
