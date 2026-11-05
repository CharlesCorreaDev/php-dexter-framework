# Operação binária OR

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gmp-or.php

---

# gmp\_or

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

gmp\_or — Operação binária OR

### Descrição

function **gmp\_or**([GMP](class.gmp.md)|[int](language.types.integer.md)|[string](language.types.string.md) `$num1`, [GMP](class.gmp.md)|[int](language.types.integer.md)|[string](language.types.string.md) `$num2`): [GMP](class.gmp.md)

Faz a operação binária inclusiva OR de dois números GMP.

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

Um objeto [GMP](class.gmp.md).

### Examples

**Exemplo #1 Exemplo de **gmp\_or()****

```
<?php
$or1 = gmp_or("0xfffffff2", "4");
echo gmp_strval($or1, 16) . "\n";
$or2 = gmp_or("0xfffffff2", "2");
echo gmp_strval($or2, 16) . "\n";
?>
```

O exemplo acima produzirá:

```
fffffff6
fffffff2
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
