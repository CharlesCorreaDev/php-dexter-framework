# Retorna uma lista de módulos carregados do Apache

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.apache-get-modules.php

---

# apache\_get\_modules

(PHP 4 >= 4.3.2, PHP 5, PHP 7, PHP 8)

apache\_get\_modules — Retorna uma lista de módulos carregados do Apache

### Descrição

function **apache\_get\_modules**(): [array](language.types.array.md)

Retorna uma lista de módulos carregados do Apache.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um [array](language.types.array.md) de módulos carregados do Apache.

### Examples

**Exemplo #1 Exemplo da função **apache\_get\_modules()****

```
<?php
print_r(apache_get_modules());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [0] => core
    [1] => http_core
    [2] => mod_so
    [3] => sapi_apache2
    [4] => mod_mime
    [5] => mod_rewrite
)
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
