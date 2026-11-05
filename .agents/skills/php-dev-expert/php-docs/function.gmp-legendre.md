# Símbolo de Legendre

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gmp-legendre.php

---

# gmp\_legendre

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

gmp\_legendre — Símbolo de Legendre

### Descrição

function **gmp\_legendre**([GMP](class.gmp.md)|[int](language.types.integer.md)|[string](language.types.string.md) `$num1`, [GMP](class.gmp.md)|[int](language.types.integer.md)|[string](language.types.string.md) `$num2`): [int](language.types.integer.md)

Computa o
[» 
Símbolo de Legendre](https://primes.utm.edu/glossary/page.php?sort=LegendreSymbol) de `num1` e
`num2`. `num2` deve ser ímpar
e positivo.

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

    Precisa ser ímpar e positivo.

### Valor Retornado

Um objeto [GMP](class.gmp.md).

### Examples

**Exemplo #1 Exemplo da **gmp\_legendre()****

```
<?php
echo gmp_legendre("1", "3") . "\n";
echo gmp_legendre("2", "3") . "\n";
?>
```

O exemplo acima produzirá:

```
1
0
```

### Veja também

- [gmp\_jacobi()](function.gmp-jacobi.md) - Símbolo de Jacobi
- [gmp\_kronecker()](function.gmp-kronecker.md) - Símbolo de Kronecker

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
