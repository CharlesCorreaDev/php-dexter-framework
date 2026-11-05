# Adiciona um sinônimo de servidor ao objeto do servidor HTTP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventhttp.addserveralias.php

---

# EventHttp::addServerAlias

(PECL event >= 1.4.0-beta)

EventHttp::addServerAlias — Adiciona um sinônimo de servidor ao objeto do servidor HTTP

### Descrição

public
function **EventHttp::addServerAlias**(
[string](language.types.string.md) `$alias`
): [bool](language.types.boolean.md)

Adiciona um sinônimo de servidor ao objeto do servidor HTTP.

### Parâmetros

`alias`
:   O sinônimo a adicionar.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1
Exemplo de **EventHttp::addServerAlias()****

```
<?php
$base = new EventBase();
$http = new EventHttp($base);

$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);

if (!$http->bind("127.0.0.1", 8088)) {
    exit("bind(1) falhou\n");
};

if (!$http->addServerAlias("local.net")) {
    exit("Falha ao adicionar sinônimo de servidor\n");
}

$http->setCallback("/about", function($req) {
    echo "URI: ", $req->getUri(), PHP_EOL;
    $req->sendReply(200, "OK");
});
$base->dispatch();
?>
```

### Veja também

- [EventHttp::removeServerAlias()](eventhttp.removeserveralias.md) - Remove sinônimo do servidor

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
