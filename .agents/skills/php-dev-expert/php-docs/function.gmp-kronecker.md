# Símbolo de Kronecker

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gmp-kronecker.php

---

# gmp\_kronecker

(PHP 7 >= 7.3.0, PHP 8)

gmp\_kronecker — Símbolo de Kronecker

### Descrição

function **gmp\_kronecker**([GMP](class.gmp.md)|[int](language.types.integer.md)|[string](language.types.string.md) `$num1`, [GMP](class.gmp.md)|[int](language.types.integer.md)|[string](language.types.string.md) `$num2`): [int](language.types.integer.md)

Esta função computa o símbolo de Kronecker de `num1` e
`num2`.

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

Retorna o símbolo de Kronecker de `num1` e
`num2`.

### Veja também

- [gmp\_jacobi()](function.gmp-jacobi.md) - Símbolo de Jacobi
- [gmp\_legendre()](function.gmp-legendre.md) - Símbolo de Legendre

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
