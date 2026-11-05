# Mostrar o maior valor aleatório possível

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.getrandmax.php

---

# getrandmax

(PHP 4, PHP 5, PHP 7, PHP 8)

getrandmax — Mostrar o maior valor aleatório possível

### Descrição

function **getrandmax**(): [int](language.types.integer.md)

Retorna o valor máximo que pode ser retornado por uma chamada a
[rand()](function.rand.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O maior valor aleatório possível retornado por [rand()](function.rand.md)

### Veja também

- [rand()](function.rand.md) - Gera um número inteiro aleatório
- [srand()](function.srand.md) - Semeia o gerador de números aleatórios
- [mt\_getrandmax()](function.mt-getrandmax.md) - Mostra o maior valor aleatório possível

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
