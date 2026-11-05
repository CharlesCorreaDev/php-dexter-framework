# Retorna um array com os nomes de todos os módulos compilados e carregados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.get-loaded-extensions.php

---

# get\_loaded\_extensions

(PHP 4, PHP 5, PHP 7, PHP 8)

get\_loaded\_extensions — Retorna um array com os nomes de todos os módulos compilados e carregados

### Descrição

function **get\_loaded\_extensions**([bool](language.types.boolean.md) `$zend_extensions` = **`false`**): [array](language.types.array.md)

Esta função retorna os nomes de todos os módulos compilados e
carregados no interpretador PHP.

### Parâmetros

`zend_extensions`
:   Retorna apenas extensões Zend, caso contrário, extensões comuns, como
    mysqli, serão listadas. O padrão é **`false`** (retorna extensões comuns).

### Valor Retornado

Retorna um array indexado com todos os nomes dos módulos.

### Examples

**Exemplo #1 Exemplo de **get\_loaded\_extensions()****

```
<?php
print_r(get_loaded_extensions());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [0] => Core
    [1] => date
    [2] => libxml
    [3] => pcre
    [4] => sqlite3
    [5] => zlib
    [6] => ctype
    [7] => dom
    [8] => fileinfo
    [9] => filter
    [10] => hash
    [11] => json
    [12] => mbstring
    [13] => SPL
    [14] => PDO
    [15] => session
    [16] => posix
    [17] => Reflection
    [18] => standard
    [19] => SimpleXML
    [20] => pdo_sqlite
    [21] => Phar
    [22] => tokenizer
    [23] => xml
    [24] => xmlreader
    [25] => xmlwriter
    [26] => gmp
    [27] => iconv
    [28] => intl
    [29] => bcmath
    [30] => sodium
    [31] => Zend OPcache
)
```

### Veja também

- [get\_extension\_funcs()](function.get-extension-funcs.md) - Retorna um array com os nomes das funções de um módulo
- [extension\_loaded()](function.extension-loaded.md) - Descobre se uma extensão está carregada
- [dl()](function.dl.md) - Carrega uma extensão do PHP durante a execução
- [phpinfo()](function.phpinfo.md) - Mostra informações sobre a configuração do PHP

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
