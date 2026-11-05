# Resto da divisão de dois números

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gmp-div-r.php

---

# gmp\_div\_r

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

gmp\_div\_r — Resto da divisão de dois números

### Descrição

function **gmp\_div\_r**([GMP](class.gmp.md)|[int](language.types.integer.md)|[string](language.types.string.md) `$num1`, [GMP](class.gmp.md)|[int](language.types.integer.md)|[string](language.types.string.md) `$num2`, [int](language.types.integer.md) `$rounding_mode` = **`GMP_ROUND_ZERO`**): [GMP](class.gmp.md)

Calcula o resto da divisão inteira de
`num1` por `num2`. O
resto tem o sinal do argumento `num1`,
se não for zero.

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
:   Consulte a função [gmp\_div\_q()](function.gmp-div-q.md) para descrição
    do argumento `rounding_mode`.

### Valor Retornado

O resto, como um número GMP.

### Examples

**Exemplo #1 Exemplo de **gmp\_div\_r()****

```
<?php
$div = gmp_div_r("105", "20");
echo gmp_strval($div) . "\n";
?>
```

O exemplo acima produzirá:

```
5
```

### Veja também

- [gmp\_div\_q()](function.gmp-div-q.md) - Divide números
- [gmp\_div\_qr()](function.gmp-div-qr.md) - Divide números e obtém quociente e resto

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
