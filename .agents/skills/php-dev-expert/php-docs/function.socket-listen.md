# Escuta uma conexão em um soquete

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.socket-listen.php

---

# socket\_listen

(PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8)

socket\_listen — Escuta uma conexão em um soquete

### Descrição

function **socket\_listen**([Socket](class.socket.md) `$socket`, [int](language.types.integer.md) `$backlog` = 0): [bool](language.types.boolean.md)

Após o soquete `socket` ter sido criado
usando [socket\_create()](function.socket-create.md) e vinculado a um nome com
[socket\_bind()](function.socket-bind.md), ele pode ser instruído a escutar conexões
de entrada no `socket`.

**socket\_listen()** é aplicável somente a soquetes do
tipo **`SOCK_STREAM`** ou
**`SOCK_SEQPACKET`**.

### Parâmetros

`socket`
:   Uma instância de [Socket](class.socket.md) criada com [socket\_create()](function.socket-create.md)
    ou [socket\_addrinfo\_bind()](function.socket-addrinfo-bind.md).

`backlog`
:   O parâmetro `backlog` (passivo) define um máximo de conexões de entrada
    que serão enfileiradas para processamento. Se uma solicitação de conexão chegar com a fila
    cheia, o cliente poderá receber um erro com uma indicação de
    `ECONNREFUSED` ou, se o protocolo subjacente suportar
    retransmissão, a solicitação poderá ser ignorada para que novas tentativas possam ser bem-sucedidas.

    > **Nota**:
    >
    > O número máximo passado para o parâmetro `backlog`
    > depende muito da plataforma subjacente. No Linux, ele é
    > truncado silenciosamente para **`SOMAXCONN`**. No win32, se
    > for passado **`SOMAXCONN`**, o provedor de serviços subjacente
    > responsável pelo soquete definirá o passivo para um valor
    > máximo *razoável*. Não há nenhuma provisão padrão para
    > descobrir o valor real do passivo nesta plataforma.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha. O código de erro pode ser recuperado com
[socket\_last\_error()](function.socket-last-error.md). Este código pode ser passado para
[socket\_strerror()](function.socket-strerror.md) para obter uma explicação textual do
erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `socket` agora espera uma instância de [Socket](class.socket.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Veja também

- [socket\_accept()](function.socket-accept.md) - Aceita uma conexão em um soquete
- [socket\_bind()](function.socket-bind.md) - Vincula um nome a um soquete
- [socket\_connect()](function.socket-connect.md) - Inicia uma conexão em um soquete
- [socket\_create()](function.socket-create.md) - Cria um soquete (ponto de extremidade para comunição)
- [socket\_strerror()](function.socket-strerror.md) - Retorna uma string descrevendo um erro no soquete
- [socket\_addrinfo\_bind()](function.socket-addrinfo-bind.md) - Cria e vincula a um soquete a partir de uma informação de endereço

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
