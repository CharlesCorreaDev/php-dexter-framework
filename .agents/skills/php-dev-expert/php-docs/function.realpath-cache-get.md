# Obter entradas de cache do caminho absoluto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.realpath-cache-get.php

---

# realpath\_cache\_get

(PHP 5 >= 5.3.2, PHP 7, PHP 8)

realpath\_cache\_get — Obter entradas de cache do caminho absoluto

### Descrição

function **realpath\_cache\_get**(): [array](language.types.array.md)

Obtém o conteúdo do cache do caminho absoluto.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um array com as entradas do caminho absoluto. As chaves são o caminho
absoluto, e os valores são arrays de informações dos dados, contendo o caminho
absoluto, data de expiração, e outras informações mantidas no cache.

### Examples

**Exemplo #1 Exemplo de **realpath\_cache\_get()****

```
<?php
var_dump(realpath_cache_get());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
array(2) {
  ["/test"]=>
  array(4) {
    ["key"]=>
    int(123456789)
    ["is_dir"]=>
    bool(true)
    ["realpath"]=>
    string(5) "/test"
    ["expires"]=>
    int(1260318939)
  }
  ["/test/test.php"]=>
  array(4) {
    ["key"]=>
    int(987654321)
    ["is_dir"]=>
    bool(false)
    ["realpath"]=>
    string(12) "/root/test.php"
    ["expires"]=>
    int(1260318939)
  }
}
```

### Veja também

- [realpath\_cache\_size()](function.realpath-cache-size.md) - Obter o tamanho do cache do caminho absoluto

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
