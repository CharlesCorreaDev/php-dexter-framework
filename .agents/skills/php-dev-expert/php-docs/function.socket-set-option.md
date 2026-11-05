# Define opções para o soquete

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.socket-set-option.php

---

# socket\_set\_option

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

socket\_set\_option — Define opções para o soquete

### Descrição

function **socket\_set\_option**(  
    [Socket](class.socket.md) `$socket`,  
    [int](language.types.integer.md) `$level`,  
    [int](language.types.integer.md) `$option`,  
    [array](language.types.array.md)|[string](language.types.string.md)|[int](language.types.integer.md) `$value`  
): [bool](language.types.boolean.md)

A função **socket\_set\_option()** define a opção
especificada pelo parâmetro `option`, no
nível do protocolo especificado em `level`, para o valor apontado
por `value` no soquete informado em
`socket`.

### Parâmetros

`socket`
:   Uma instância de [Socket](class.socket.md) criada com [socket\_create()](function.socket-create.md)
    ou [socket\_accept()](function.socket-accept.md).

`level`
:   O parâmetro `level` especifica o nível de
    protocolo no qual a opção reside. Por exemplo, para definir opções no
    nível do soquete, um parâmetro `level` de
    **`SOL_SOCKET`** seria usado. Outros níveis, como
    TCP, podem ser usados ​​especificando o número do protocolo desse nível.
    Os números de protocolo podem ser encontrados usando a
    função [getprotobyname()](function.getprotobyname.md).

`option`
:   As opções de soquete disponíveis são as mesmas da
    função [socket\_get\_option()](function.socket-get-option.md).

`value`
:   O valor da opção.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | Agora lança uma exceção quando **`MCAST_LEAVE_GROUP`** ou **`MCAST_LEAVE_SOURCE_GROUP`** são usadas e o valor não é um array ou objeto válido, e lança um [ValueError](class.valueerror.md) quando uma opção de multitransmissão é usada em um soquete que não é da família **`AF_INET`** ou da **`AF_INET6`**. |
| 8.0.0 | O parâmetro `socket` agora espera uma instância de [Socket](class.socket.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **socket\_set\_option()****

```
<?php
$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);

if (!is_resource($socket)) {
    echo 'Não foi possível criar o soquete: '. socket_strerror(socket_last_error()) . PHP_EOL;
}

if (!socket_set_option($socket, SOL_SOCKET, SO_REUSEADDR, 1)) {
    echo 'Não foi possível definir a opção no soquete: '. socket_strerror(socket_last_error()) . PHP_EOL;
}

if (!socket_bind($socket, '127.0.0.1', 1223)) {
    echo 'Não foi possível vincular ao soquete: '. socket_strerror(socket_last_error()) . PHP_EOL;
}

$rval = socket_get_option($socket, SOL_SOCKET, SO_REUSEADDR);

if ($rval === false) {
    echo 'Não foi possível obter a opção do soquete: '. socket_strerror(socket_last_error()) . PHP_EOL;
} else if ($rval !== 0) {
    echo 'SO_REUSEADDR está definida no soquete !' . PHP_EOL;
}
?>
```

### Veja também

- [socket\_create()](function.socket-create.md) - Cria um soquete (ponto de extremidade para comunição)
- [socket\_bind()](function.socket-bind.md) - Vincula um nome a um soquete
- [socket\_strerror()](function.socket-strerror.md) - Retorna uma string descrevendo um erro no soquete
- [socket\_last\_error()](function.socket-last-error.md) - Retorna o último erro no soquete
- [socket\_get\_option()](function.socket-get-option.md) - Obtém opções para o soquete

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
