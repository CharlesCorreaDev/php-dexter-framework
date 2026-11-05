# Converte um número GMP para uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gmp-strval.php

---

# gmp\_strval

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

gmp\_strval — Converte um número GMP para uma string

### Descrição

function **gmp\_strval**([GMP](class.gmp.md)|[int](language.types.integer.md)|[string](language.types.string.md) `$num`, [int](language.types.integer.md) `$base` = 10): [string](language.types.string.md)

Converte o número GMP para uma representação em string na base
`base`. A base padrão é 10.

### Parâmetros

`num`
:   O número GMP que será convertido para uma string.

    Um objeto [GMP](class.gmp.md), um [int](language.types.integer.md)
    ou uma [string](language.types.string.md) que possa ser interpretado como um número seguindo a mesma lógica
    como se a string fosse usada em [gmp\_init()](function.gmp-init.md) com detecção
    automática de base (ou seja, quando `base` é igual a 0).

`base`
:   A base do número retornado. A base padrão é 10.
    Valores permitidos para base são de 2 à 62 e -2 a -36.

### Valor Retornado

O número, como uma [string](language.types.string.md).

### Examples

**Exemplo #1 Convertendo um número GMP para uma string**

```
<?php
$a = gmp_init("0x41682179fbf5");
printf("Decimal: %s, 36-based: %s", gmp_strval($a), gmp_strval($a,36));
?>
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
