
## Problema de DB ou Front-end

Problema nas guias do formulário de alteração:

### IDEAL

#### CSS - Correto

- Os radio buttons tem display none, por isso não aparecem na tela e
NÃO são ENVIADOS para o envio do formulário via request!

#### Banco de Dados - MySQL

Como não temos um campo chamado `tabs`, caso o *name* desse **radio buttons.tabs**
SEJA ENVIADO, ocorre um problema no operação do BANCO DE DADOS: MySQL!

E isso ocorre corretamente no formulário de salvar um registro!

----

### PROBLEMA

#### CSS

Quando aperto em uma guia, a guia clicada muda de cor(mais escuro)
E a não clicada, passa a ter a cor mais clara!

Sabe porque começou a dar esse erro: PQ eu tirei o `name` dos radio buttons, por 
isso o HTML não entende que são radio buttons "irmãos", ou seja, checou UM, não
checkou o outro

## Banco de Dados

Antes, eu tinha deixado o name dos radiobuttos, e por isso, 
na hora de eu alterar um membro, ele pegava o valor dos radio buttons, usando o NAME,

E tentava salvar eles em uma tabela do banco de dados, porém ele não encontra a
tabela,

E Aí ocorre um problema no MySQL, por não encotrar a coluna correspondente no banco

----

### Possível solução:

- Criar uma coluna no Banco de Dados chamada TABS, e devolver o name dos radiobuttons

- Trocar os radios buttons por checkboxes, e programar via JavaScript -> que quando apertar um checkbox, ele faz algo que deixa o checkbox selecionado -> mais escuro e o não -> mais claro