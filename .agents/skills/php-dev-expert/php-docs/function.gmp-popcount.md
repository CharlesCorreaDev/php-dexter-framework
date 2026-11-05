# Contagem de população

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gmp-popcount.php

---

# gmp\_popcount

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

gmp\_popcount — Contagem de população

### Descrição

function **gmp\_popcount**([GMP](class.gmp.md)|[int](language.types.integer.md)|[string](language.types.string.md) `$num`): [int](language.types.integer.md)

Obtém a contagem de população.

### Parâmetros

`num`
:   Um objeto [GMP](class.gmp.md), um [int](language.types.integer.md)
    ou uma [string](language.types.string.md) que possa ser interpretado como um número seguindo a mesma lógica
    como se a string fosse usada em [gmp\_init()](function.gmp-init.md) com detecção
    automática de base (ou seja, quando `base` é igual a 0).

### Valor Retornado

A contagem de população de `num`, como um [int](language.types.integer.md).

### Examples

**Exemplo #1 Exemplo de **gmp\_popcount()****

```
<?php
$pop1 = gmp_init("10000101", 2); // 3 1's
echo gmp_popcount($pop1) . "\n";
$pop2 = gmp_init("11111110", 2); // 7 1's
echo gmp_popcount($pop2) . "\n";
?>
```

O exemplo acima produzirá:

```
3
7
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
