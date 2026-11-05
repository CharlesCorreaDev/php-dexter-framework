# Operadores

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.operators.php

---

# Operadores

## Índice

- [Precedência de Operadores](language.operators.precedence.md)
- [Aritméticos](language.operators.arithmetic.md)
- [Incremento e Decremento](language.operators.increment.md)
- [Atribuição](language.operators.assignment.md)
- [Binários](language.operators.bitwise.md)
- [Comparação](language.operators.comparison.md)
- [Controle de Erro](language.operators.errorcontrol.md)
- [Execução](language.operators.execution.md)
- [Lógica](language.operators.logical.md)
- [String](language.operators.string.md)
- [Arrays](language.operators.array.md)
- [Tipo](language.operators.type.md)
- [Funcional](language.operators.functional.md)

Um operador é algo que recebe um ou mais valores (ou
expressões, no jargão de programação) e que devolve outro valor (e por isso
os operadores são expressões também).

Operadores podem ser agrupados segundo o número de valores que aceitam. Operadores
unários recebem um único valor, por exemplo `!` (o
[operador lógico de negação](language.operators.logical.md)) ou
`++` (o
[operador de incremento](language.operators.increment.md)).
Operadores binários aceitam dois valores, como os
[operadores aritméticos](language.operators.arithmetic.md)
`+` (soma) e `-` (subtração), além
da maioria dos operadores PHP dessa categoria. Finalmente há um
único [operador
ternário](language.operators.comparison.md#language.operators.comparison.ternary), `? :`, que aceita três valores; normalmente
conhecido simplesmente como "o operador ternário" (embora um
nome melhor fosse operador condicional).

A lista completa dos operadores no PHP está na seção sobre
[Precedência de Operadores](language.operators.precedence.md).
Essa seção também explica precedência e combinações, que governam
exatamente como expressões contendo vários operadores são
avaliados.

Existe uma extensão PECL que permite a sobrecarga de alguns operadores para
objetos. Para mais informações, consulte a seção sobre [Sobrecarga de
Operadores para Objetos](book.operator.md).

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
