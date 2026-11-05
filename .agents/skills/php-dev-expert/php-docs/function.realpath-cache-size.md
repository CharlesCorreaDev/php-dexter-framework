# Obter o tamanho do cache do caminho absoluto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.realpath-cache-size.php

---

# realpath\_cache\_size

(PHP 5 >= 5.3.2, PHP 7, PHP 8)

realpath\_cache\_size — Obter o tamanho do cache do caminho absoluto

### Descrição

function **realpath\_cache\_size**(): [int](language.types.integer.md)

Obtém a quantidade de memória utilizada pelo cache do caminho absoluto.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna quanta memória o cache do caminho absoluto está utilizando.

### Examples

**Exemplo #1 Exemplo de **realpath\_cache\_size()****

```
<?php
var_dump(realpath_cache_size());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
int(412)
```

### Veja também

- [realpath\_cache\_get()](function.realpath-cache-get.md) - Obter entradas de cache do caminho absoluto
- As opções de configurações
  de [realpath\_cache\_size](ini.core.md#ini.realpath-cache-size)

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
