# A Enumeração Dom\AdjacentPosition

> **Fonte / Source:** https://www.php.net/manual/pt_BR/enum.dom-adjacentposition.php

---

# A Enumeração Dom\AdjacentPosition

(PHP 8 >= 8.4.0)

## Introdução

A enumeração **AdjacentPosition** é usada para especificar
onde, em relação ao elemento de contexto, a inserção deve ser executada
usando **Dom\Element::insertAdjacentElement()**
ou **Dom\Element::insertAdjacentText()**.

## Resumo da enumeração

enum ****AdjacentPosition****  
{

case BeforeBegin
; //
Insere antes do elemento de contexto.
Isso só é possível se o elemento estiver em um documento e tiver um pai.

case AfterBegin
; //
Insere antes do primeiro filho do elemento de contexto.

case BeforeEnd
; //
Insere depois do último filho do elemento de contexto.

case AfterEnd
; //
Insere depois do elemento de contexto.
Isso só é possível se o elemento estiver em um documento e tiver um pai.

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
