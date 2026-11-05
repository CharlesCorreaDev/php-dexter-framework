# Retorna o pico de memória alocada pelo PHP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.memory-get-peak-usage.php

---

# memory\_get\_peak\_usage

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

memory\_get\_peak\_usage — Retorna o pico de memória alocada pelo PHP

### Descrição

function **memory\_get\_peak\_usage**([bool](language.types.boolean.md) `$real_usage` = **`false`**): [int](language.types.integer.md)

Retorna o pico de memória, em bytes, que foi alocado para o script
PHP.

### Parâmetros

`real_usage`
:   Defina este parâmetro como **`true`** para obter o tamanho real da memória alocada
    do sistema. Se não estiver definido ou se for informado como **`false`**, apenas a memória usada
    por `emalloc()` é relatada.

### Valor Retornado

Retorna o pico de memória em bytes.

### Veja também

- [memory\_get\_usage()](function.memory-get-usage.md) - Retorna a quantidade de memória alocada para o PHP
- [memory\_reset\_peak\_usage()](function.memory-reset-peak-usage.md) - Redefine o pico de uso de memória
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
