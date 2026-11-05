# Define a função de retorno padrão para lidar com solicitações que não são capturadas por funções de retorno específicas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventhttp.setdefaultcallback.php

---

# EventHttp::setDefaultCallback

(PECL event >= 1.4.0-beta)

EventHttp::setDefaultCallback — Define a função de retorno padrão para lidar com solicitações que não são capturadas por funções de retorno específicas

### Descrição

public
function **EventHttp::setDefaultCallback**(
[string](language.types.string.md) `$cb`
, 
[string](language.types.string.md) `$arg`
 = ?): [void](language.types.void.md)

Define a função de retorno padrão para lidar com solicitações que não são capturadas por
funções de retorno específicas.

### Parâmetros

`cb`
:   A função de retorno do tipo
    [callable](language.types.callable.md).
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
:   Dados personalizados do usuário passados ​​para a função de retorno.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1
Exemplo de **EventHttp::setDefaultCallback()****

```
<?php
$base = new EventBase();
$http = new EventHttp($base);

$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);

if (!$http->bind("127.0.0.1", 8088)) {
    exit("bind(1) falhou\n");
};

$http->setDefaultCallback(function($req) {
    echo "URI: ", $req->getUri(), PHP_EOL;
    $req->sendReply(200, "OK");
});

$base->dispatch();
?>
```

### Veja também

- [EventHttp::setCallback()](eventhttp.setcallback.md) - Define uma função de retorno para o URI especificado

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
