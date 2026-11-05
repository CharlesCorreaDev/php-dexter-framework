# A enumeração RoundingMode

> **Fonte / Source:** https://www.php.net/manual/pt_BR/enum.roundingmode.php

---

# A enumeração RoundingMode

(PHP 8 >= 8.4.0)

## Introdução

A enumeração **RoundingMode** é usada para especificar como o arredondamento
deve ser realizado por [round()](function.round.md),
[bcround()](function.bcround.md) e [BCMath\Number::round()](bcmath-number.round.md).

## Resumo da enumeração

enum ****RoundingMode****  
{

case HalfAwayFromZero
; //
Arredonda para o inteiro mais próximo.
Se a parte decimal for igual a `5`,
arredonda para o inteiro com maior valor absoluto.

case HalfTowardsZero
; //
Arredonda para o inteiro mais próximo.
Se a parte decimal for igual a `5`,
arredonda para o inteiro com menor valor absoluto.

case HalfEven
; //
Arredonda para o inteiro mais próximo.
Se a parte decimal for igual a `5`,
arredonda para o inteiro par.

case HalfOdd
; //
Arredonda para o inteiro mais próximo.
Se a parte decimal for igual a `5`,
arredonda para o inteiro ímpar.

case TowardsZero
; //
Arredonda para o inteiro mais próximo com um valor absoluto menor ou igual.

case AwayFromZero
; //
Arredonda para o inteiro mais próximo com um valor absoluto maior ou igual.

case NegativeInfinity
; //
Arredonda para o maior inteiro que seja menor ou igual.

case PositiveInfinity
; //
Arredonda para o menor inteiro que seja maior ou igual.

}

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
