# Divide números

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gmp-div-q.php

---

# gmp\_div\_q

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

gmp\_div\_q — Divide números

### Descrição

function **gmp\_div\_q**([GMP](class.gmp.md)|[int](language.types.integer.md)|[string](language.types.string.md) `$num1`, [GMP](class.gmp.md)|[int](language.types.integer.md)|[string](language.types.string.md) `$num2`, [int](language.types.integer.md) `$rounding_mode` = **`GMP_ROUND_ZERO`**): [GMP](class.gmp.md)

Divide `num1` por `num2` e
retorna o resultado inteiro.

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
:   O arredondamento do resultado é definido por
    `rounding_mode`, que pode ter os seguintes
    valores:

    - **`GMP_ROUND_ZERO`**: O resultado é
      truncado em direção a 0.
    - **`GMP_ROUND_PLUSINF`**: O resultado é
      arredondado em direção a `+infinito`.
    - **`GMP_ROUND_MINUSINF`**: O resultado é
      arredondado em direção a `-infinito`.

    Um objeto [GMP](class.gmp.md), um [int](language.types.integer.md)
    ou uma [string](language.types.string.md) que possa ser interpretado como um número seguindo a mesma lógica
    como se a string fosse usada em [gmp\_init()](function.gmp-init.md) com detecção
    automática de base (ou seja, quando `base` é igual a 0).

### Valor Retornado

Um objeto [GMP](class.gmp.md).

### Examples

**Exemplo #1 Exemplo de **gmp\_div\_q()****

```
<?php
$div1 = gmp_div_q("100", "5");
echo gmp_strval($div1) . "\n";

$div2 = gmp_div_q("1", "3");
echo gmp_strval($div2) . "\n";

$div3 = gmp_div_q("1", "3", GMP_ROUND_PLUSINF);
echo gmp_strval($div3) . "\n";

$div4 = gmp_div_q("-1", "4", GMP_ROUND_PLUSINF);
echo gmp_strval($div4) . "\n";

$div5 = gmp_div_q("-1", "4", GMP_ROUND_MINUSINF);
echo gmp_strval($div5) . "\n";
?>
```

O exemplo acima produzirá:

```
20
0
1
0
-1
```

### Notas

> **Nota**:
>
> Esta função pode também ser chamada como [gmp\_div()](function.gmp-div.md).

### Veja também

- [gmp\_div\_r()](function.gmp-div-r.md) - Resto da divisão de dois números
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
