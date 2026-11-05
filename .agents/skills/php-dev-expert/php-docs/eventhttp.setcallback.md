# Define uma função de retorno para o URI especificado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventhttp.setcallback.php

---

# EventHttp::setCallback

(PECL event >= 1.4.0-beta)

EventHttp::setCallback — Define uma função de retorno para o URI especificado

### Descrição

public
function **EventHttp::setCallback**(
[string](language.types.string.md) `$path`
, 
[string](language.types.string.md) `$cb`
, 
[string](language.types.string.md) `$arg`
 = ?): [void](language.types.void.md)

Define uma função de retorno para o URI especificado.

### Parâmetros

`path`
:   O caminho para o qual será chamada a função de retorno.

`cb`
:   A função de retorno do tipo
    [callable](language.types.callable.md)
    que é chamada no caminho
    (`path`) especificado.
    Deve corresponder ao seguinte protótipo:

    function **callback**(
    [EventHttpRequest](class.eventhttprequest.md) `$req`
     = NULL
    , 
    [mixed](language.types.mixed.md) `$arg`
     = NULL
    ): [void](language.types.void.md)

    `req`
    :   Objeto
        [EventHttpRequest](class.eventhttprequest.md).

    `arg`
    :   Dados personalizados.

`arg`
:   Dados personalizados.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1
Exemplo de **EventHttp::setCallback()****

```
<?php
/*
 * Servidor HTTP simples.
 *
 * Para testar:
 * 1) Execute-o em uma porta de sua escolha, por exemplo:
 * $ php examples/http.php 8010
 * 2) Em outro terminal, conecte-se a algum endereço nesta porta
 * e faça uma solicitação GET ou POST (outras são desativadas aqui), por exemplo:
 * $ nc -t 127.0.0.1 8010
 * POST /about HTTP/1.0
 * Content-Type: text/plain
 * Content-Length: 4
 * Connection: close
 * (pressione Enter)
 *
 * Resultado:
 * a=12
 * HTTP/1.0 200 OK
 * Content-Type: text/html; charset=ISO-8859-1
 * Connection: close
 *
 * 3) Veja o que o servidor exibe na janela do terminal anterior.
 */

function _http_dump($req, $data) {
    static $counter      = 0;
    static $max_requests = 2;

    if (++$counter >= $max_requests)  {
        echo "O contador atingiu o máximo de solicitações $max_requests. Saindo\n";
        exit();
    }

    echo __METHOD__, " chamado\n";
    echo "requisição:"; var_dump($req);
    echo "dados:"; var_dump($data);

    echo "\n===== DUMP =====\n";
    echo "Comando:", $req->getCommand(), PHP_EOL;
    echo "URI:", $req->getUri(), PHP_EOL;
    echo "Cabeçalhos de entrada:"; var_dump($req->getInputHeaders());
    echo "Cabeçalhos de saída:"; var_dump($req->getOutputHeaders());

    echo "\n >> Enviando resposta ...";
    $req->sendReply(200, "OK");
    echo "OK\n";

    echo "\n >> Lendo buffer de entrada ...\n";
    $buf = $req->getInputBuffer();
    while ($s = $buf->readLine(EventBuffer::EOL_ANY)) {
        echo $s, PHP_EOL;
    }
    echo "Não há mais dados no buffer\n";
}

function _http_about($req) {
    echo __METHOD__, PHP_EOL;
    echo "URI: ", $req->getUri(), PHP_EOL;
    echo "\n >> Enviando resposta ...";
    $req->sendReply(200, "OK");
    echo "OK\n";
}

function _http_default($req, $data) {
    echo __METHOD__, PHP_EOL;
    echo "URI: ", $req->getUri(), PHP_EOL;
    echo "\n >> Enviando resposta ...";
    $req->sendReply(200, "OK");
    echo "OK\n";
}

$port = 8010;
if ($argc > 1) {
    $port = (int) $argv[1];
}
if ($port <= 0 || $port > 65535) {
    exit("Porta inválida");
}

$base = new EventBase();
$http = new EventHttp($base);
$http->setAllowedMethods(EventHttpRequest::CMD_GET | EventHttpRequest::CMD_POST);

$http->setCallback("/dump", "_http_dump", array(4, 8));
$http->setCallback("/about", "_http_about");
$http->setDefaultCallback("_http_default", "valor de dados personalizados");

$http->bind("0.0.0.0", 8010);
$base->loop();
?>
```

O exemplo acima produzirá
algo semelhante a:

```
a=12
HTTP/1.0 200 OK
Content-Type: text/html; charset=ISO-8859-1
Connection: close
```

### Veja também

- [EventHttp::setDefaultCallback()](eventhttp.setdefaultcallback.md) - Define a função de retorno padrão para lidar com solicitações que não são capturadas por funções de retorno específicas

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
