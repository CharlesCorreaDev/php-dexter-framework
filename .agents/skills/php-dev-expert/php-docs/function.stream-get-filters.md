# Obtém lista de filtros registrados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stream-get-filters.php

---

# stream\_get\_filters

(PHP 5, PHP 7, PHP 8)

stream\_get\_filters — Obtém lista de filtros registrados

### Descrição

function **stream\_get\_filters**(): [array](language.types.array.md)

Obtém a lista de filtros registrados no sistema em execução.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um array indexado contendo o nome de todos os filtros de fluxo
disponíveis.

### Examples

**Exemplo #1 Usando **stream\_get\_filters()****

```
<?php
$streamlist = stream_get_filters();
print_r($streamlist);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array (
  [0] => string.rot13
  [1] => string.toupper
  [2] => string.tolower
  [3] => string.base64
  [4] => string.quoted-printable
)
```

### Veja também

- [stream\_filter\_register()](function.stream-filter-register.md) - Registra um filtro de fluxo definido pelo usuário
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
