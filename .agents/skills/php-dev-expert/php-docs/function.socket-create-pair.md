# Cria um par de soquetes indistinguíveis e os armazena em um array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.socket-create-pair.php

---

# socket\_create\_pair

(PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8)

socket\_create\_pair — Cria um par de soquetes indistinguíveis e os armazena em um array

### Descrição

function **socket\_create\_pair**(  
    [int](language.types.integer.md) `$domain`,  
    [int](language.types.integer.md) `$type`,  
    [int](language.types.integer.md) `$protocol`,  
    [array](language.types.array.md) `&$pair`  
): [bool](language.types.boolean.md)

**socket\_create\_pair()** cria dois soquetes conectados e
indistinguíveis e os armazena em `pair`.
Esta função é comumente usada em IPC (Comunicação Entre Processos).

### Parâmetros

`domain`
:   O parâmetro `domain` especifica a família de
    protocolos a ser usada pelo soquete. Consulte [socket\_create()](function.socket-create.md)
    para a lista completa.

`type`
:   O parâmetro `type` seleciona o tipo de comunicação
    a ser usado pelo soquete. Consulte [socket\_create()](function.socket-create.md) para a
    lista completa.

`protocol`
:   O parâmetro `protocol` define o protocolo específico
    dentro do domínio informado em `domain` a ser usado
    durante a comunicação no soquete retornado. O valor adequado pode ser recuperado por
    nome usando [getprotobyname()](function.getprotobyname.md). Se
    o protocolo desejado for TCP ou UDP, as constantes correspondentes
    **`SOL_TCP`** e **`SOL_UDP`**
    também podem ser usadas.

    Consulte [socket\_create()](function.socket-create.md) para a lista completa de protocolos
    suportados.

`pair`
:   Referência a um array no qual serão inseridas as duas instâncias de [Socket](class.socket.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `pair` é agora uma referência a um array de instâncias [Socket](class.socket.md); anteriormente, era uma referência a um array de [resource](language.types.resource.md)s. |

### Examples

**Exemplo #1 Exemplo de **socket\_create\_pair()****

```
<?php
$sockets = array();

/* No Windows é necessário usar AF_INET */
$domain = (strtoupper(substr(PHP_OS, 0, 3)) == 'WIN' ? AF_INET : AF_UNIX);

/* Configura o par de soquetes */
if (socket_create_pair($domain, SOCK_STREAM, 0, $sockets) === false) {
    echo "socket_create_pair falhou. Motivo: ".socket_strerror(socket_last_error());
}
/* Envia e recebe dados */
if (socket_write($sockets[0], "ABCdef123\n", strlen("ABCdef123\n")) === false) {
    echo "socket_write() falhou. Motivo: ".socket_strerror(socket_last_error($sockets[0]));
}
if (($data = socket_read($sockets[1], strlen("ABCdef123\n"), PHP_BINARY_READ)) === false) {
    echo "socket_read() falhou. Motivo: ".socket_strerror(socket_last_error($sockets[1]));
}
var_dump($data);

/* Fecha os soquetes */
socket_close($sockets[0]);
socket_close($sockets[1]);
?>
```

**Exemplo #2 Exemplo de IPC com **socket\_create\_pair()****

```
<?php
$ary = array();
$strone = 'Mensagem do Pai.';
$strtwo = 'Mensagem do Filho.';

if (socket_create_pair(AF_UNIX, SOCK_STREAM, 0, $ary) === false) {
    echo "socket_create_pair() falhou. Motivo: ".socket_strerror(socket_last_error());
}
$pid = pcntl_fork();
if ($pid == -1) {
    echo 'Não foi possível bifurcar o processo.';
} elseif ($pid) {
    /* pai */
    socket_close($ary[0]);
    if (socket_write($ary[1], $strone, strlen($strone)) === false) {
        echo "socket_write() falhou. Motivo: ".socket_strerror(socket_last_error($ary[1]));
    }
    if (socket_read($ary[1], strlen($strtwo), PHP_BINARY_READ) == $strtwo) {
        echo "Recebida $strtwo\n";
    }
    socket_close($ary[1]);
} else {
    /* filho */
    socket_close($ary[1]);
    if (socket_write($ary[0], $strtwo, strlen($strtwo)) === false) {
        echo "socket_write() falhou. Motivo: ".socket_strerror(socket_last_error($ary[0]));
    }
    if (socket_read($ary[0], strlen($strone), PHP_BINARY_READ) == $strone) {
        echo "Recebida $strone\n";
    }
    socket_close($ary[0]);
}
?>
```

### Veja também

- [socket\_create()](function.socket-create.md) - Cria um soquete (ponto de extremidade para comunição)
- [socket\_create\_listen()](function.socket-create-listen.md) - Abre um soquete em uma porta para aceitar conexões
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
