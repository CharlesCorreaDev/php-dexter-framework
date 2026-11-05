# Retorna o status do coletor de referência circular

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gc-enabled.php

---

# gc\_enabled

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

gc\_enabled — Retorna o status do coletor de referência circular

### Descrição

function **gc\_enabled**(): [bool](language.types.boolean.md)

Retorna o status do coletor de referência circular.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se o coletor de lixo estiver habilitado, **`false`** caso contrário.

### Examples

**Exemplo #1 Um exemplo de **gc\_enabled()****

```
<?php
if(gc_enabled()) gc_collect_cycles();
?>
```

### Veja também

- [Coleta de Lixo](features.gc.md)

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
