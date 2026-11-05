# Inicia uma conexão em um soquete

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.socket-connect.php

---

# socket\_connect

(PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8)

socket\_connect — Inicia uma conexão em um soquete

### Descrição

function **socket\_connect**([Socket](class.socket.md) `$socket`, [string](language.types.string.md) `$address`, [?](language.types.null.md)[int](language.types.integer.md) `$port` = **`null`**): [bool](language.types.boolean.md)

Inicia uma conexão ao endereço informado em `address` usando a instância de [Socket](class.socket.md)
fornecida em `socket`, que precisa ser uma instância [Socket](class.socket.md)
criada com [socket\_create()](function.socket-create.md).

### Parâmetros

`socket`
:   Uma instância de [Socket](class.socket.md) criada com
    [socket\_create()](function.socket-create.md).

`address`
:   O parâmetro `address` pode ser um endereço IPv4
    na notação de quatro inteiros separados por pontos (ex.: `127.0.0.1`) se
    `socket` for **`AF_INET`**, um endereço
    válido IPv6 (ex.: `::1`) se o suporte a IPv6 estiver habilitado e
    `socket` for **`AF_INET6`**
    ou o caminho para um soquete de domínio Unix, se a família de soquete for
    **`AF_UNIX`**.

`port`
:   O parâmetro `port` é usado somente
    na conexão a um soquete **`AF_INET`** ou
    **`AF_INET6`** (nesses casos é mandatório), e designa
    a porta no servidor remoto à qual uma conexão deve ser realizada.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha. O código de erro pode ser recuperado com
[socket\_last\_error()](function.socket-last-error.md). Este código pode ser passado a
[socket\_strerror()](function.socket-strerror.md) para obter uma explicação textual do
erro.

> **Nota**:
>
> Se o soquete for não bloqueante, esta função retorna **`false`** com um
> erro `Operation now in progress` (operação agora em andamento).

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `socket` agora espera uma instância de [Socket](class.socket.md); anteriormente, um [resource](language.types.resource.md) era esperado. |
| 8.0.0 | `port` agora pode ser nulo. |

### Veja também

- [socket\_bind()](function.socket-bind.md) - Vincula um nome a um soquete
- [socket\_listen()](function.socket-listen.md) - Escuta uma conexão em um soquete
- [socket\_create()](function.socket-create.md) - Cria um soquete (ponto de extremidade para comunição)
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
