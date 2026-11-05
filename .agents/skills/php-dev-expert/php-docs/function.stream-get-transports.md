# Obtém lista de transportes socket registrados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stream-get-transports.php

---

# stream\_get\_transports

(PHP 5, PHP 7, PHP 8)

stream\_get\_transports — Obtém lista de transportes socket registrados

### Descrição

function **stream\_get\_transports**(): [array](language.types.array.md)

Retorna um array indexado contendo os nomes de todos os transportes de socket
disponíveis no sistema em execução.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um array indexado de nomes de transporte de sockets.

### Examples

**Exemplo #1 Usando **stream\_get\_transports()****

```
<?php
$xportlist = stream_get_transports();
print_r($xportlist);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array (
  [0] => tcp
  [1] => udp
  [2] => unix
  [3] => udg
)
```

### Veja também

- [stream\_get\_filters()](function.stream-get-filters.md) - Obtém lista de filtros registrados
- [stream\_get\_wrappers()](function.stream-get-wrappers.md) - Obtém lista de fluxos registrados

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
