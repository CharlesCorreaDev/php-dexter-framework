# Compara números

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gmp-cmp.php

---

# gmp\_cmp

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

gmp\_cmp — Compara números

### Descrição

function **gmp\_cmp**([GMP](class.gmp.md)|[int](language.types.integer.md)|[string](language.types.string.md) `$num1`, [GMP](class.gmp.md)|[int](language.types.integer.md)|[string](language.types.string.md) `$num2`): [int](language.types.integer.md)

Compara dois números.

### Parâmetros

`num1`
:   Um objeto [GMP](class.gmp.md), um [int](language.types.integer.md)
    ou uma [string](language.types.string.md) que possa ser interpretado como um número seguindo a mesma lógica
    como se a string fosse usada em [gmp\_init()](function.gmp-init.md) com detecção
    automática de base (ou seja, quando `base` é igual a 0).

`num2`
:   Um objeto [GMP](class.gmp.md), um [int](language.types.integer.md)
    ou uma [string](language.types.string.md) que possa ser interpretado como um número seguindo a mesma lógica
    como se a string fosse usada em [gmp\_init()](function.gmp-init.md) com detecção
    automática de base (ou seja, quando `base` é igual a 0).

### Valor Retornado

Retorna um valor positivo se `a > b`, zero se
`a = b` e um valor negativo se `a <
b`.

### Examples

**Exemplo #1 Exemplo de **gmp\_cmp()****

```
<?php
$cmp1 = gmp_cmp("1234", "1000"); // maior que
$cmp2 = gmp_cmp("1000", "1234"); // menor que
$cmp3 = gmp_cmp("1234", "1234"); // igual a

echo "$cmp1 $cmp2 $cmp3\n";
?>
```

O exemplo acima produzirá:

```
1 -1 0
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
