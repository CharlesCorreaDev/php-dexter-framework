# Faz uma requisição HTTP pela conexão especificada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventhttpconnection.makerequest.php

---

# EventHttpConnection::makeRequest

(PECL event >= 1.4.0-beta)

EventHttpConnection::makeRequest — Faz uma requisição HTTP pela conexão especificada

### Descrição

public
function **EventHttpConnection::makeRequest**(
[EventHttpRequest](class.eventhttprequest.md) `$req`
, 
[int](language.types.integer.md) `$type`
, 
[string](language.types.string.md) `$uri`
): [bool](language.types.boolean.md)

Faz uma requisição HTTP pela conexão especificada.
`type`
é uma das
constantes
`EventHttpRequest::CMD_*`.

### Parâmetros

`req`
:   O objeto de conexão sobre o qual a requisição será enviada.

`type`
:   Uma das
    [constantes
    `EventHttpRequest::CMD_*`](class.eventhttprequest.md#eventhttprequest.constants).

`uri`
:   O URI associado à requisição.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1
Exemplo de **EventHttpConnection::makeRequest()****

```
<?php
function _request_handler($req, $base) {
    echo __FUNCTION__, PHP_EOL;

    if (is_null($req)) {
        echo "Tempo limite atingido\n";
    } else {
        $response_code = $req->getResponseCode();

        if ($response_code == 0) {
            echo "Conexão recusada\n";
        } elseif ($response_code != 200) {
            echo "Resposta inesperada: $response_code\n";
        } else {
            echo "Sucesso: $response_code\n";
            $buf = $req->getInputBuffer();
            echo "Corpo:\n";
            while ($s = $buf->readLine(EventBuffer::EOL_ANY)) {
                echo $s, PHP_EOL;
            }
        }
    }

    $base->exit(NULL);
}

$address = "127.0.0.1";
$port = 80;

$base = new EventBase();
$conn = new EventHttpConnection($base, NULL, $address, $port);
$conn->setTimeout(5);
$req = new EventHttpRequest("_request_handler", $base);

$req->addHeader("Host", $address, EventHttpRequest::OUTPUT_HEADER);
$req->addHeader("Content-Length", "0", EventHttpRequest::OUTPUT_HEADER);
$conn->makeRequest($req, EventHttpRequest::CMD_GET, "/index.cphp");

$base->loop();
?>
```

O exemplo acima produzirá
algo semelhante a:

```
_request_handler
Sucesso: 200
Corpo:
PHP, date:
2013-03-13T20:27:52+05:00
```

### Veja também

- [EventHttpRequest::addHeader()](eventhttprequest.addheader.md) - Adiciona um cabeçalho HTTP aos cabeçalhos da requisição

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
