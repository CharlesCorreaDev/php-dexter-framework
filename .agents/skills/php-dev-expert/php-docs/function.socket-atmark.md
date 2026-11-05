# Determina se o soquete está na marca fora-de-banda

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.socket-atmark.php

---

# socket\_atmark

(PHP 8 >= 8.3.0, PHP 8)

socket\_atmark — Determina se o soquete está na marca fora-de-banda

### Descrição

function **socket\_atmark**([Socket](class.socket.md) `$socket`): [bool](language.types.boolean.md)

Determina se o soquete informado em `socket` está na marca fora-de-banda.

### Parâmetros

`socket`
:   Uma instância de [Socket](class.socket.md) criada com [socket\_create()](function.socket-create.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Usando **socket\_atmark()** para verificar se o soquete está pronto para ler dados fora-de-banda**

```
<?php
$socketServer = socket_create( AF_INET, SOCK_STREAM, SOL_TCP );
socket_set_option( $socketServer, SOL_SOCKET, SO_REUSEADDR, 1 );
socket_bind( $socketServer, '127.0.0.1' );
socket_listen( $socketServer );

$socketClient = socket_create( AF_INET, SOCK_STREAM, SOL_TCP );
socket_getsockname( $socketServer, $stAddr, $uPort );
socket_connect( $socketClient, $stAddr, $uPort );

$socket = socket_accept( $socketServer );
socket_shutdown( $socket, 1 );

$st = 'Estes são dados normais.';
socket_send( $socketClient, $st, strlen( $st ), 0 );
$st = '!'; # TCP permite somente um byte de dados urgentes.
socket_send( $socketClient, $st, strlen( $st ), MSG_OOB );
$st = 'Não tão urgente.';
socket_send( $socketClient, $st, strlen( $st ), 0 );
socket_shutdown( $socketClient );

do {
    if ( socket_atmark( $socket ) ) {
        $rc = socket_recv( $socket, $st, 65536, MSG_OOB );
        echo "Dados urgentes recebidos: ({$rc}) {$st}\n";
    } else {
        $rc = socket_recv( $socket, $st, 1024, 0 );
        echo "Dados normais recebidos: ({$rc}) {$st}\n";
    }
} while ( $rc > 0 );
socket_close( $socketServer );
socket_close( $socketClient );
socket_close( $socket );
?>
```

O exemplo acima produzirá:

```
Received normal data: (20) Estes são dados normais.
Received urgent data: (1) !
Received normal data: (14) Não tão urgente.
Received normal data: (0)
```

### Veja também

- [socket\_connect()](function.socket-connect.md) - Inicia uma conexão em um soquete
- [socket\_create()](function.socket-create.md) - Cria um soquete (ponto de extremidade para comunição)

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
