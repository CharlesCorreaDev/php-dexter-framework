# Mostra o maior valor aleatório possível

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mt-getrandmax.php

---

# mt\_getrandmax

(PHP 4, PHP 5, PHP 7, PHP 8)

mt\_getrandmax — Mostra o maior valor aleatório possível

### Descrição

function **mt\_getrandmax**(): [int](language.types.integer.md)

Retorna o valor máximo que pode ser retornado por uma chamada a
[mt\_rand()](function.mt-rand.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o valor aleatório máximo retornado por uma chamada para
[mt\_rand()](function.mt-rand.md) sem argumentos, que é o valor máximo
que pode ser usado para seu parâmetro `max` sem que o
resultado seja aumentado (e portanto menos aleatório).

### Veja também

- [mt\_rand()](function.mt-rand.md) - Gera um valor aleatório através do Gerador de Números Aleatórios Mersenne Twister
- [mt\_srand()](function.mt-srand.md) - Semeia o Gerador de Números Aleatórios Mersenne Twister
- [getrandmax()](function.getrandmax.md) - Mostrar o maior valor aleatório possível

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
