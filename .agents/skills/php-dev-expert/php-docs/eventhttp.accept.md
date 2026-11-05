# Faz com que um servidor HTTP aceite conexões no recurso ou fluxo de soquete especificado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventhttp.accept.php

---

# EventHttp::accept

(PECL event >= 1.2.6-beta)

EventHttp::accept — Faz com que um servidor HTTP aceite conexões no recurso ou fluxo de soquete especificado

### Descrição

public
function **EventHttp::accept**(
[mixed](language.types.mixed.md) `$socket`
): [bool](language.types.boolean.md)

Faz um servidor HTTP aceitar conexões no recurso ou fluxo de soquete especificado.
O soquete deve estar pronto para aceitar conexões.

Pode ser chamado várias vezes para aceitar conexões em soquetes diferentes.

> **Nota**:
>
> Para vincular um soquete, com conexões
> `listen`
> e
> `accept`
> em uma única chamada, use
> [EventHttp::bind()](eventhttp.bind.md).
> **EventHttp::accept()**
> é necessário somente se já houver um soquete pronto para aceitar conexões.

### Parâmetros

`socket`
:   Recurso de soquete, fluxo ou descritor numérico de arquivo que representa um soquete
    pronto para aceitar conexões.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1
Exemplo de **EventHttp::accept()****

```
<?php

$base = new EventBase();
$http = new EventHttp($base);

$addresses = [
    8091 => "127.0.0.1",
    8092 => "127.0.0.2",
];
$i = 0;

$socket = array();

foreach ($addresses as $port => $ip) {
    echo $ip, " ", $port, PHP_EOL;
    $socket[$i] = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);

    if (!socket_bind($socket[$i], $ip, $port)) {
        exit("socket_bind falhou\n");
    }

    socket_listen($socket[$i], 0);
    socket_set_nonblock($socket[$i]);

    if (!$http->accept($socket[$i])) {
        echo "Accept falhou\n";
        exit(1);
    }

    ++$i;
}

$http->setCallback("/some-page", function () {
    echo "(some-page)\n";
    echo "URI: ", $req->getUri(), PHP_EOL;
    $req->sendReply(200, "OK");
    echo "OK\n";
});

$http->setDefaultCallback(function ($req) {
    echo "URI: ", $req->getUri(), PHP_EOL;
    $req->sendReply(200, "OK");
    echo "OK\n";
});

$signal = Event::signal($base, SIGINT, function () use ($base) {
    echo "Capturado SIGINT. Parando...\n";
    $base->stop();
});
$signal->add();

$base->dispatch();
echo "FIM\n";
// Não fechamos os sockets, pois o Libevent já define os
// sinalizadores CLOSE_ON_FREE e CLOSE_ON_EXEC no descritor
// de arquivo associado aos sockets.
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Client:
$ nc 127.0.0.1 8091
GET /about HTTP/1.0
Connection: close

HTTP/1.0 200 OK
Content-Type: text/html; charset=ISO-8859-1
Connection: close

Server:
127.0.0.1 8091
127.0.0.2 8092
URI: /about
OK
```

### Veja também

- [EventHttp::bind()](eventhttp.bind.md) - Vincula um servidor HTTP no endereço e porta especificados

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
