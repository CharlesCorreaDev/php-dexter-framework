# Consulta o lado local do soquete fornecido, o que pode resultar em servidor/porta ou em um caminho do sistema de arquivos Unix, dependendo do seu tipo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.socket-getsockname.php

---

# socket\_getsockname

(PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8)

socket\_getsockname — Consulta o lado local do soquete fornecido, o que pode resultar em servidor/porta ou em um caminho do sistema de arquivos Unix, dependendo do seu tipo

### Descrição

function **socket\_getsockname**([Socket](class.socket.md) `$socket`, [string](language.types.string.md) `&$address`, [int](language.types.integer.md) `&$port` = **`null`**): [bool](language.types.boolean.md)

> **Nota**:
>
> **socket\_getsockname()** não deve ser usado com
> soquetes **`AF_UNIX`** criados com [socket\_connect()](function.socket-connect.md).
> Somente soquetes criados com [socket\_accept()](function.socket-accept.md) ou um soquete de servidor
> primário após uma chamada a [socket\_bind()](function.socket-bind.md) retornarão
> valores significativos.

### Parâmetros

`socket`
:   Uma instância de [Socket](class.socket.md) criada com [socket\_create()](function.socket-create.md)
    ou [socket\_accept()](function.socket-accept.md).

`address`
:   Se o soquete fornecido for do tipo **`AF_INET`** ou
    **`AF_INET6`**, **socket\_getsockname()**
    retornará o *endereço IP* local na notação apropriada (por exemplo,
    `127.0.0.1` ou `fe80::1`) no
    parâmetro `address` e, se o parâmetro
    opcional `port` estiver presente, retornará também a porta associada.

    Se o soquete fornecido for do tipo **`AF_UNIX`**,
    **socket\_getsockname()** retornará o caminho do sistema
    de arquivos Unix (por exemplo, `/var/run/daemon.sock`) no
    parâmetro `address`.

`port`
:   Se fornecida, esta variável conterá a porta associada.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha. **socket\_getsockname()** pode também retornar
**`false`** se o tipo de soquete não for **`AF_INET`**,
**`AF_INET6`** ou **`AF_UNIX`**. Neste
caso, o último código de erro de soquete *NÃO É* atualizado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | Agora recupera o índice da interface e sua representação em string quando usado em um soquete da família **`AF_PACKET`**. |
| 8.0.0 | O parâmetro `socket` agora espera uma instância de [Socket](class.socket.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Veja também

- [socket\_getpeername()](function.socket-getpeername.md) - Consulta o lado remoto do soquete fornecido
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
