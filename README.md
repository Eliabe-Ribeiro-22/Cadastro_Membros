# Cadastro_Membros

## Sobre o projeto

Projeto que será desenvolvido para permitir o gerenciamento de membros da igreja Assembleia de Deus em Campo Belo do Sul. Funções de CRUD. Nele, poderemos cadastrar um membro, excluí-lo, alterar suas informações, pesquisar os membros por nome. E imprimir membros por determinada congregação, imprimir todos os membros através da criação de PDF's.

## Tecnologias utilizadas

Laravel, MySQL, CSS, HTML,

<h2 name="log">Log de eventos</h2>

### 17/01 - Terça-feira - Eliabe

Criado repositório Cadastro de Membros, no GitHub.

Clonagem do repositório para minha máquina local.

Realizada a instalação do Laravel na aplicação

----
### 17/01 - Terça-feira - Eliabe

Desenvolvimento do CRUD - Create - Implementado funcionalidade de cadastramento de membros

----
### 17/01 - Terça-feira - Eliabe

Desenvolvimento do CRUD - Read - Implementado funcionalidade de pesquisa dos membros, através de campo com botão de pesquisa

----
### 17/01 - Terça-feira - Eliabe

Desenvolvimento do CRUD - Delete - Implementado funcionalidade de exclusão de membros. Com isso, o usuário clica no ícone de lixeira próximo ao membro, realizando assim a exclusão dele.

----
#### 17/01 - Terça-feira - Eliabe

Desenvolvimento do CRUD - Update - Implementado funcionalidade de alteração de membros. 

Com isso, o usuário clica no ícone de lápis próximo ao membro, e assim, o formulário de alteração é aberto com todas as informações do membro. E após o usuário clicar no botão alterar desse formulário, realiza-se a alteração desse membro.

Isso tudo ocorre através da _rota/controller_ update, juntamente com o *model* Membro e auxílio do *Eloquent*, nativo do Laravel.