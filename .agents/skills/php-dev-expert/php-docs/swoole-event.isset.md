# Verifica se um socket está sendo monitorado no loop de eventos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/swoole-event.isset.php

---

# Swoole\Event::isset

(No version information available, might only be in Git)

Swoole\Event::isset — Verifica se um socket está sendo monitorado no loop de eventos

### Descrição

public static function **Swoole\Event::isset**([mixed](language.types.mixed.md) `$fd`, [int](language.types.integer.md) `$events`
 =
SWOOLE\_EVENT\_READ | SWOOLE\_EVENT\_WRITE
): [bool](language.types.boolean.md)

Verifica se o descritor de arquivo especificado está sendo monitorado para os tipos de evento indicados no loop de eventos.

### Parâmetros

`fd`
:   Descritor de arquivo (recurso de fluxo/socket, inteiro ou objeto).

`events`
:   Tipos de evento a verificar (máscara de bits de **`SWOOLE_EVENT_READ`** e/ou **`SWOOLE_EVENT_WRITE`**).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Verificando o status do monitoramento de eventos**

```
<?php
$fp = stream_socket_client("tcp://www.qq.com:80");
Swoole\Event::add($fp, function ($fp) {
    echo fread($fp, 8192);
}, null, SWOOLE_EVENT_READ);

var_dump(Swoole\Event::isset($fp, SWOOLE_EVENT_READ)); // Exibe: true
var_dump(Swoole\Event::isset($fp, SWOOLE_EVENT_WRITE)); // Exibe: false
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
