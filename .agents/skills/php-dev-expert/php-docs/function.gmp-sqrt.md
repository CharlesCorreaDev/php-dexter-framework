# Calcula a raiz quadrada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gmp-sqrt.php

---

# gmp\_sqrt

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

gmp\_sqrt — Calcula a raiz quadrada

### Descrição

function **gmp\_sqrt**([GMP](class.gmp.md)|[int](language.types.integer.md)|[string](language.types.string.md) `$num`): [GMP](class.gmp.md)

Calcula a raiz quadrada de `num`.

### Parâmetros

`num`
:   Um objeto [GMP](class.gmp.md), um [int](language.types.integer.md)
    ou uma [string](language.types.string.md) que possa ser interpretado como um número seguindo a mesma lógica
    como se a string fosse usada em [gmp\_init()](function.gmp-init.md) com detecção
    automática de base (ou seja, quando `base` é igual a 0).

### Valor Retornado

A parte inteira da raiz quadrada, como um número GMP.

### Examples

**Exemplo #1 Exemplo de **gmp\_sqrt()****

```
<?php
$sqrt1 = gmp_sqrt("9");
$sqrt2 = gmp_sqrt("7");
$sqrt3 = gmp_sqrt("1524157875019052100");

echo gmp_strval($sqrt1) . "\n";
echo gmp_strval($sqrt2) . "\n";
echo gmp_strval($sqrt3) . "\n";
?>
```

O exemplo acima produzirá:

```
3
2
1234567890
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
