# Divisão exata de números

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gmp-divexact.php

---

# gmp\_divexact

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

gmp\_divexact — Divisão exata de números

### Descrição

function **gmp\_divexact**([GMP](class.gmp.md)|[int](language.types.integer.md)|[string](language.types.string.md) `$num1`, [GMP](class.gmp.md)|[int](language.types.integer.md)|[string](language.types.string.md) `$num2`): [GMP](class.gmp.md)

Divide `num1` por `num2`,
usando um algoritimo rápido de "divisão exata". Esta função produz
resultados corretos apenas quando sabe anteriormente que
`num2` é divisor de `num1`.

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

### Valor Retornado

Um objeto [GMP](class.gmp.md).

### Examples

**Exemplo #1 Exemplo **gmp\_divexact()****

```
<?php
$div1 = gmp_divexact("10", "2");
echo gmp_strval($div1) . "\n";

$div2 = gmp_divexact("10", "3"); // resultado errado
echo gmp_strval($div2) . "\n";
?>
```

O exemplo acima produzirá:

```
5
2863311534
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
