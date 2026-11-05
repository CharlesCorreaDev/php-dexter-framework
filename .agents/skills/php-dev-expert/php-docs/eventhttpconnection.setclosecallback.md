# Define função de retorno para o fechamento da conexão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventhttpconnection.setclosecallback.php

---

# EventHttpConnection::setCloseCallback

(PECL event >= 1.8.0)

EventHttpConnection::setCloseCallback — Define função de retorno para o fechamento da conexão

### Descrição

public
function **EventHttpConnection::setCloseCallback**(
[callable](language.types.callable.md) `$callback`
, 
[mixed](language.types.mixed.md) `$data`
 = ?): [void](language.types.void.md)

Define função de retorno para o fechamento da conexão.

### Parâmetros

`callback`
:   Função de retorno que é chamada quando a conexão é fechada. Deve corresponder ao
    seguinte protótipo:

    function **callback**(
    [EventHttpConnection](class.eventhttpconnection.md) `$conn`
     = **`null`**
    , 
    [mixed](language.types.mixed.md) `$arg`
     = **`null`**
    ): [void](language.types.void.md)

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1
Exemplo de **EventHttpConnection::setCloseCallback()****

```
<?php
/*
 * Condigurando uma função de retorno de fechamento de conexão
 *
 * O script manipula conexões fechadas usando a API HTTP.
 *
 * Uso:
 * 1) Inicie o servidor:
 * $ php examples/http_closecb.php 4242
 *
 * 2) Abra um cliente em outro terminal.
 * A sessão tipo Telnet deve se parecer com o seguinte:
 *
 * $ nc -t 127.0.0.1 4242
 * GET / HTTP/1.0
 * Connection: close
 *
 * O servidor produzirá algo semelhante ao seguinte:
 *
 * HTTP/1.0 200 OK
 * Content-Type: multipart/x-mixed-replace;boundary=boundarydonotcross
 * Connection: close
 *
 * <html>
 *
 * 3) Encerre a conexão do cliente abruptamente,
 * ou seja, mate o processo, ou apenas pressione Ctrl-C.
 *
 * 4) Verifique se o servidor chamou _close_callback.
 * O script deve gerar a string "_close_callback" na saída padrão.
 *
 * 5) Verifique se o processo do servidor não tem conexões órfãs,
 * por exemplo, com o utilitário `lsof`.
 */

function _close_callback($conn)
{
    echo __FUNCTION__, PHP_EOL;
}

function _http_default($req, $dummy)
{
    $conn = $req->getConnection();
    $conn->setCloseCallback('_close_callback', NULL);

    /*
    Ao habilitar Event::READ, protegemos o servidor contra conexões não fechadas.
    Esta é uma peculiaridade do Libevent. A biblioteca desabilita eventos Event::READ
    nesta conexão, e o servidor não é notificado sobre conexões
    encerradas.

    Então, cada vez que o cliente encerra a conexão abruptamente, obtemos uma conexão
    órfã. Por exemplo, o seguinte é uma parte do comando `lsof -p $PID | grep TCP`
    após o cliente ter encerrado a conexão:

    57-php     15057 ruslan  6u  unix 0xffff8802fb59c780   0t0  125187 socket
    58:php     15057 ruslan  7u  IPv4             125189   0t0     TCP *:4242 (LISTEN)
    59:php     15057 ruslan  8u  IPv4             124342   0t0     TCP localhost:4242->localhost:37375 (CLOSE_WAIT)

    onde $PID é o nosso ID de processo.

    O bloco de código a seguir corrige esse tipo de conexão órfã.
     */
    $bev = $req->getBufferEvent();
    $bev->enable(Event::READ);

    // Temos que liberá-lo explicitamente. Veja EventHttpRequest::getConnection
    $bev->free(); // Temos que liberá-lo explicitamente

    $req->addHeader(
        'Content-Type',
        'multipart/x-mixed-replace;boundary=boundarydonotcross',
        EventHttpRequest::OUTPUT_HEADER
    );

    $buf = new EventBuffer();
    $buf->add('<html>');

    $req->sendReply(200, "OK");
    $req->sendReplyChunk($buf);
}

$port = 4242;
if ($argc > 1) {
    $port = (int) $argv[1];
}
if ($port <= 0 || $port > 65535) {
    exit("Porta inválida");
}

$base = new EventBase();
$http = new EventHttp($base);

$http->setDefaultCallback("_http_default", NULL);
$http->bind("0.0.0.0", $port);
$base->loop();

?>
```

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
