# Constrói objeto EventHttpRequest

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventhttprequest.construct.php

---

# EventHttpRequest::\_\_construct

(PECL event >= 1.4.0-beta)

EventHttpRequest::\_\_construct — Constrói objeto EventHttpRequest

### Descrição

public
function **EventHttpRequest::\_\_construct**(
[callable](language.types.callable.md) `$callback`
, 
[mixed](language.types.mixed.md) `$data`
 = **`null`**
)

Constrói objeto EventHttpRequest.

### Parâmetros

`callback`
:   É invocado no caminho da requisição. Deve corresponder ao seguinte protótipo:

    function **callback**(
    [EventHttpRequest](class.eventhttprequest.md) `$req`
     = **`null`**
    , 
    [mixed](language.types.mixed.md) `$arg`
     = **`null`**
    ): [void](language.types.void.md)

`data`
:   Dados personalizados do usuário passados ​​para a função de retorno.

### Examples

**Exemplo #1
Exemplo de **EventHttpRequest::\_\_construct()****

```
<?php

function _request_handler($req, $base) {
    echo __FUNCTION__, PHP_EOL;

    if (is_null($req)) {
        echo "Timed out\n";
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

### Veja também

- [EventHttpRequest::cancel()](eventhttprequest.cancel.md) - Cancela uma requisição HTTP pendente
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
