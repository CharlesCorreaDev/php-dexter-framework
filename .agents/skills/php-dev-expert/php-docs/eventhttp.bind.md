# Vincula um servidor HTTP no endereço e porta especificados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventhttp.bind.php

---

# EventHttp::bind

(PECL event >= 1.2.6-beta)

EventHttp::bind — Vincula um servidor HTTP no endereço e porta especificados

### Descrição

public
function **EventHttp::bind**(
[string](language.types.string.md) `$address`
, 
[int](language.types.integer.md) `$port`
): [void](language.types.void.md)

Vincula um servidor HTTP no endereço e porta especificados.

Pode ser chamado várias vezes para vincular o mesmo servidor HTTP a várias
portas diferentes.

### Parâmetros

`address`
:   Uma string contendo o endereço IP para
    escuta
    (`listen(2)`).

`port`
:   O número da porta para escutar.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1
Exemplo de **EventHttp::bind()****

```
<?php
$base = new EventBase();
$http = new EventHttp($base);

$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);

if (!$http->bind("127.0.0.1", 8088)) {
    exit("bind(1) falhou\n");
};
if (!$http->bind("127.0.0.1", 8089)) {
    exit("bind(2) falhou\n");
};

$http->setCallback("/about", function($req) {
    echo "URI: ", $req->getUri(), PHP_EOL;
    $req->sendReply(200, "OK");
    echo "OK\n";
});

$base->dispatch();
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Client:

$ nc 127.0.0.1 8088
GET /about HTTP/1.0
Connection: close

HTTP/1.0 200 OK
Content-Type: text/html; charset=ISO-8859-1
Connection: close

$ nc 127.0.0.1 8089
GET /unknown HTTP/1.0
Connection: close

HTTP/1.1 404 Not Found
Content-Type: text/html
Date: Wed, 13 Mar 2013 04:14:41 GMT
Content-Length: 149
Connection: close

<html><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL /unknown was not found on this server.</p></body></html>

Server:
URI: /about
OK
```

### Veja também

- [EventHttp::accept()](eventhttp.accept.md) - Faz com que um servidor HTTP aceite conexões no recurso ou fluxo de soquete especificado

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
