# Divide números e obtém quociente e resto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gmp-div-qr.php

---

# gmp\_div\_qr

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

gmp\_div\_qr — Divide números e obtém quociente e resto

### Descrição

function **gmp\_div\_qr**([GMP](class.gmp.md)|[int](language.types.integer.md)|[string](language.types.string.md) `$num1`, [GMP](class.gmp.md)|[int](language.types.integer.md)|[string](language.types.string.md) `$num2`, [int](language.types.integer.md) `$rounding_mode` = **`GMP_ROUND_ZERO`**): [array](language.types.array.md)

A função divide `num1` por `num2`.

### Parâmetros

`num1`
:   O número a ser dividido.

    Um objeto [GMP](class.gmp.md), um [int](language.types.integer.md)
    ou uma [string](language.types.string.md) que possa ser interpretado como um número seguindo a mesma lógica
    como se a string fosse usada em [gmp\_init()](function.gmp-init.md) com detecção
    automática de base (ou seja, quando `base` é igual a 0).

`num2`
:   O número pelo qual `num1` será dividido.

    Um objeto [GMP](class.gmp.md), um [int](language.types.integer.md)
    ou uma [string](language.types.string.md) que possa ser interpretado como um número seguindo a mesma lógica
    como se a string fosse usada em [gmp\_init()](function.gmp-init.md) com detecção
    automática de base (ou seja, quando `base` é igual a 0).

`rounding_mode`
:   Consulte a função [gmp\_div\_q()](function.gmp-div-q.md) para uma descrição
    do argumento `rounding_mode`.

### Valor Retornado

Retorna um [array](language.types.array.md), com o primeiro
elemento sendo `[n/d]` (o resultado inteiro da
divisão) e o segundo sendo `(n - [n/d] * d)`
(o resto da divisão).

### Examples

**Exemplo #1 Divisão de números GMP**

```
<?php
$a = gmp_init("0x41682179fbf5");
$res = gmp_div_qr($a, "0xDEFE75");
printf("Result is: q - %s, r - %s",
     gmp_strval ($res[0]), gmp_strval ($res[1]));
?>
```

### Veja também

- [gmp\_div\_q()](function.gmp-div-q.md) - Divide números
- [gmp\_div\_r()](function.gmp-div-r.md) - Resto da divisão de dois números

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
