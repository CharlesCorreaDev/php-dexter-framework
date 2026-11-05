# Retorna a quantidade de memória alocada para o PHP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.memory-get-usage.php

---

# memory\_get\_usage

(PHP 4 >= 4.3.2, PHP 5, PHP 7, PHP 8)

memory\_get\_usage — Retorna a quantidade de memória alocada para o PHP

### Descrição

function **memory\_get\_usage**([bool](language.types.boolean.md) `$real_usage` = **`false`**): [int](language.types.integer.md)

Retorna a quantidade de memória, em bytes, que está sendo alocada
atualmente para o script PHP.

### Parâmetros

`real_usage`
:   Defina isso como **`true`** para obter a memória total alocada do
    sistema, incluindo páginas não utilizadas.
    Se não estiver definido ou informado como **`false`**, apenas a memória usada é relatada.

> **Nota**:
>
> O PHP não rastreia memória que não é alocada por `emalloc()`

### Valor Retornado

Retorna a quantidade de memória em bytes.

### Examples

**Exemplo #1 Um exemplo de **memory\_get\_usage()****

```
<?php
// Este é apenas um exemplo, os número abaixo serão
// diferentes dependendo do sistema

echo memory_get_usage() . "\n"; // 36640

$a = str_repeat("Hello", 4242);

echo memory_get_usage() . "\n"; // 57960

unset($a);

echo memory_get_usage() . "\n"; // 36744

?>
```

### Veja também

- [memory\_get\_peak\_usage()](function.memory-get-peak-usage.md) - Retorna o pico de memória alocada pelo PHP
- [memory\_limit](ini.core.md#ini.memory-limit)

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
