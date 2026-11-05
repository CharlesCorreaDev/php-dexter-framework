# Redefine o pico de uso de memória

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.memory-reset-peak-usage.php

---

# memory\_reset\_peak\_usage

(PHP 8 >= 8.2.0)

memory\_reset\_peak\_usage — Redefine o pico de uso de memória

### Descrição

function **memory\_reset\_peak\_usage**(): [void](language.types.void.md)

Redefine o pico de uso de memória retornado pela função
[memory\_get\_peak\_usage()](function.memory-get-peak-usage.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **memory\_reset\_peak\_usage()****

```
<?php

var_dump(memory_get_peak_usage());

$a = str_repeat("Hello", 424242);
var_dump(memory_get_peak_usage());

unset($a);
memory_reset_peak_usage();

$a = str_repeat("Hello", 2424);
var_dump(memory_get_peak_usage());

?>
```

O exemplo acima produzirá
algo semelhante a:

```
int(422440)
int(2508672)
int(399208)
```

### Veja também

- [memory\_get\_peak\_usage()](function.memory-get-peak-usage.md) - Retorna o pico de memória alocada pelo PHP

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
