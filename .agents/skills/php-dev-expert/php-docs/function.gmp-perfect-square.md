# Verificação de quadrado perfeito

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gmp-perfect-square.php

---

# gmp\_perfect\_square

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

gmp\_perfect\_square — Verificação de quadrado perfeito

### Descrição

function **gmp\_perfect\_square**([GMP](class.gmp.md)|[int](language.types.integer.md)|[string](language.types.string.md) `$num`): [bool](language.types.boolean.md)

Verifica se um número é um quadrado perfeito.

### Parâmetros

`num`
:   O número a ser verificado como um quadrado perfeito.

    Um objeto [GMP](class.gmp.md), um [int](language.types.integer.md)
    ou uma [string](language.types.string.md) que possa ser interpretado como um número seguindo a mesma lógica
    como se a string fosse usada em [gmp\_init()](function.gmp-init.md) com detecção
    automática de base (ou seja, quando `base` é igual a 0).

### Valor Retornado

Retorna **`true`** se `num` for um quadrado perfeito,
**`false`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **gmp\_perfect\_square()****

```
<?php
// 3 * 3, quadrado perfeito
var_dump(gmp_perfect_square("9"));

// não é um quadrado perfeito
var_dump(gmp_perfect_square("7"));

// 1234567890 * 1234567890, quadrado perfeito
var_dump(gmp_perfect_square("1524157875019052100"));
?>
```

O exemplo acima produzirá:

```
bool(true)
bool(false)
bool(true)
```

### Veja também

- [gmp\_perfect\_power()](function.gmp-perfect-power.md) - Verificação de potência perfeita
- [gmp\_sqrt()](function.gmp-sqrt.md) - Calcula a raiz quadrada
- [gmp\_sqrtrem()](function.gmp-sqrtrem.md) - Raiz quadrada com resto

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
