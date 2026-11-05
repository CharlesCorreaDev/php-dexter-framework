# Abre um soquete em uma porta para aceitar conexões

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.socket-create-listen.php

---

# socket\_create\_listen

(PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8)

socket\_create\_listen — Abre um soquete em uma porta para aceitar conexões

### Descrição

function **socket\_create\_listen**([int](language.types.integer.md) `$port`, [int](language.types.integer.md) `$backlog` = **`SOMAXCONN`**): [Socket](class.socket.md)|[false](language.types.singleton.md)

**socket\_create\_listen()** cria uma nova instância de [Socket](class.socket.md)
do tipo **`AF_INET`** escutando em *todas*
as interfaces locais na porta informada aguardando por novas conexões.

O objetivo desta função é facilitar a tarefa de criação de um novo soquete que
apenas escuta para aceitar novas conexões.

### Parâmetros

`port`
:   A porta na qual deve-se escutar em todas as interfaces.

`backlog`
:   O parâmetro `backlog` define o comprimento máximo
    até o qual a fila de conexões pendentes pode crescer.
    **`SOMAXCONN`** pode ser passado como parâmetro
    `backlog`, consulte
    [socket\_listen()](function.socket-listen.md) para mais informação.

### Valor Retornado

**socket\_create\_listen()** retorna uma nova instância de [Socket](class.socket.md)
em caso de sucesso ou **`false`** em caso de erro. O código de erro pode ser recuperado com
[socket\_last\_error()](function.socket-last-error.md). Este código pode ser passado a
[socket\_strerror()](function.socket-strerror.md) para obter uma explicação textual do
erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | Agora lança um [ValueError](class.valueerror.md) quando `port` é menor que 0 ou maior que 65535. |
| 8.4.0 | O valor padrão de `backlog` agora é **`SOMAXCONN`**. Anteriormente era `128`. |
| 8.0.0 | Em caso de sucesso, esta função agora retorna uma instância de [Socket](class.socket.md); anteriormente, retornava um [resource](language.types.resource.md). |

### Notas

> **Nota**:
>
> Se a intenção for criar um soquete que somente escuta em uma certa
> interface, é necessário usar [socket\_create()](function.socket-create.md),
> [socket\_bind()](function.socket-bind.md) e [socket\_listen()](function.socket-listen.md).

### Veja também

- [socket\_create()](function.socket-create.md) - Cria um soquete (ponto de extremidade para comunição)
- [socket\_create\_pair()](function.socket-create-pair.md) - Cria um par de soquetes indistinguíveis e os armazena em um array
- [socket\_bind()](function.socket-bind.md) - Vincula um nome a um soquete
- [socket\_listen()](function.socket-listen.md) - Escuta uma conexão em um soquete
- [socket\_last\_error()](function.socket-last-error.md) - Retorna o último erro no soquete
- [socket\_strerror()](function.socket-strerror.md) - Retorna uma string descrevendo um erro no soquete

`↑` and `↓` to navigate •
`Enter` to select •
`Esc` to close • `/` to open

document.addEventListener("DOMContentLoaded", function() {
/\*{{{Search Modal\*/
const language = 'local';
initSearchModal();
initPHPSearch(language).then((searchCallback) => {
initSearchUI({language, searchCallback, limit: 30});
});
/\*}}}\*/
});
