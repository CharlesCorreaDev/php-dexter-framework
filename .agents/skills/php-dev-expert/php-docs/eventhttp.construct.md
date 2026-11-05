# Constrói objeto EventHttp (o servidor HTTP)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventhttp.construct.php

---

# EventHttp::\_\_construct

(PECL event >= 1.2.6-beta)

EventHttp::\_\_construct — Constrói objeto EventHttp (o servidor HTTP)

### Descrição

public
function **EventHttp::\_\_construct**(
[EventBase](class.eventbase.md) `$base`
, 
[EventSslContext](class.eventsslcontext.md) `$ctx`
 = **`null`**
)

Constrói o objeto do servidor HTTP.

### Parâmetros

`base`
:   Base de eventos associada.

`ctx`
:   Objeto da classe [EventSslContext](class.eventsslcontext.md).
    Transforma servidor HTTP simples em servidor HTTPS. Isso significa que
    se
    `ctx`
    estiver configurado corretamente, os eventos de buffer subjacentes serão baseados
    em soquetes OpenSSL. Assim, todo o tráfego passará pelo SSL ou TLS.

    > **Nota**:
    >
    > Este parâmetro está disponível somente se
    > `Event`
    > for compilado com suporte OpenSSL e somente com
    > `Libevent
    > 2.1.0-alpha`
    > e superior.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL event 1.9.0 | Suporte OpenSSL (`ctx`) adicionado. |

### Examples

**Exemplo #1 Servidor HTTP simples**

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
 * $ nc -t 127.0.0.1 8010
 * GET /dump HTTP/1.0
 * Content-Type: text/plain
 * Content-Encoding: UTF-8
 * Connection: close
 * (pressione Enter)
 *
 * Resultado:
 * HTTP/1.0 200 OK
 * Content-Type: text/html; charset=ISO-8859-1
 * Connection: close
 * (pressione Enter)
 *
 * $ nc -t 127.0.0.1 8010
 * GET /unknown HTTP/1.0
 * Connection: close
 *
 * Resultado:
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

HTTP/1.0 200 OK
Content-Type: text/html; charset=ISO-8859-1
Connection: close
(pressione Enter)

HTTP/1.0 200 OK
Content-Type: text/html; charset=ISO-8859-1
Connection: close
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
