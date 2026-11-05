# Obtém a parte inteira e o resto da raiz enésima

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gmp-rootrem.php

---

# gmp\_rootrem

(PHP 5 >= 5.6.0, PHP 7, PHP 8)

gmp\_rootrem — Obtém a parte inteira e o resto da raiz enésima

### Descrição

function **gmp\_rootrem**([GMP](class.gmp.md)|[int](language.types.integer.md)|[string](language.types.string.md) `$num`, [int](language.types.integer.md) `$nth`): [array](language.types.array.md)

Obtém a raiz enésima (sendo n definido no parâmetro `nth`) do número informado em `num` e
retorna o componente inteiro e o resto do resultado.

### Parâmetros

`num`
:   Um objeto [GMP](class.gmp.md), um [int](language.types.integer.md)
    ou uma [string](language.types.string.md) que possa ser interpretado como um número seguindo a mesma lógica
    como se a string fosse usada em [gmp\_init()](function.gmp-init.md) com detecção
    automática de base (ou seja, quando `base` é igual a 0).

`nth`
:   A raiz positiva para obter de `num`.

### Valor Retornado

Um array de dois elementos, onde o primeiro elemento é o componente inteiro da
raiz e o segundo elemento é o resto, ambos representados como números
GMP.

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
