# Verificação de potência perfeita

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gmp-perfect-power.php

---

# gmp\_perfect\_power

(PHP 7 >= 7.3.0, PHP 8)

gmp\_perfect\_power — Verificação de potência perfeita

### Descrição

function **gmp\_perfect\_power**([GMP](class.gmp.md)|[int](language.types.integer.md)|[string](language.types.string.md) `$num`): [bool](language.types.boolean.md)

Verifica se `num` é uma potência perfeita.

### Parâmetros

`num`
:   Um objeto [GMP](class.gmp.md), um [int](language.types.integer.md)
    ou uma [string](language.types.string.md) que possa ser interpretado como um número seguindo a mesma lógica
    como se a string fosse usada em [gmp\_init()](function.gmp-init.md) com detecção
    automática de base (ou seja, quando `base` é igual a 0).

### Valor Retornado

Retorna **`true`** se `num` for uma potência perfeita, **`false`** caso contrário.

### Veja também

- [gmp\_perfect\_square()](function.gmp-perfect-square.md) - Verificação de quadrado perfeito

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
