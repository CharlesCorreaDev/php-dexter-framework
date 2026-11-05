# Envia uma mensagem de erro HTML para o cliente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventhttprequest.senderror.php

---

# EventHttpRequest::sendError

(PECL event >= 1.4.0-beta)

EventHttpRequest::sendError — Envia uma mensagem de erro HTML para o cliente

### Descrição

public
function **EventHttpRequest::sendError**(
[int](language.types.integer.md) `$error`
, 
[string](language.types.string.md) `$reason`
 = **`null`**
): [void](language.types.void.md)

Envia uma mensagem de erro HTML para o cliente.

### Parâmetros

`error`
:   O código de erro HTTP.

`reason`
:   Uma breve explicação do erro. Se for igual a **`null`**, o significado padrão do
    código de erro será usado.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1
Exemplo de **EventHttpRequest::sendError()****

```
<?php
function _http_400($req) {
    $req->sendError(400);
}

$base = new EventBase();
$http = new EventHttp($base);

$http->setCallback("/err400", "_http_400");

$http->bind("0.0.0.0", 8010);
$base->loop();
?>
```

### Veja também

- [EventHttpRequest::sendReply()](eventhttprequest.sendreply.md) - Envia uma resposta HTML ao cliente

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
