# Operação binária XOR

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gmp-xor.php

---

# gmp\_xor

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

gmp\_xor — Operação binária XOR

### Descrição

function **gmp\_xor**([GMP](class.gmp.md)|[int](language.types.integer.md)|[string](language.types.string.md) `$num1`, [GMP](class.gmp.md)|[int](language.types.integer.md)|[string](language.types.string.md) `$num2`): [GMP](class.gmp.md)

Faz a operação binária exclusiva OR (XOR) de dois números GMP.

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

**Exemplo #1 Exemplo de **gmp\_xor()****

```
<?php
$xor1 = gmp_init("1101101110011101", 2);
$xor2 = gmp_init("0110011001011001", 2);

$xor3 = gmp_xor($xor1, $xor2);

echo gmp_strval($xor3, 2) . "\n";
?>
```

O exemplo acima produzirá:

```
1011110111000100
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
