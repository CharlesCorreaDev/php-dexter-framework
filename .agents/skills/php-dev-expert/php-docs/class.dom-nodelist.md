# A Classe Dom\NodeList

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.dom-nodelist.php

---

# A Classe [Dom\NodeList](class.dom-nodelist.md)

(PHP 8 >= 8.4.0)

## Introdução

Representa uma lista viva de nós.

Este é o equivalente moderno e compatível com as especificações de
[DOMNodeList](class.domnodelist.md).

## Resumo da classe

class ****Dom\NodeList****
implements
[IteratorAggregate](class.iteratoraggregate.md),
[Countable](class.countable.md) {

/\* Propriedades \*/

public
readonly
[int](language.types.integer.md)
[$length](class.dom-nodelist.md#dom-nodelist.props.length);

/\* Métodos \*/

/\* Not documented yet \*/

}

## Propriedades

length
:   O número de nós na lista. A faixa de índices válidos para nós filhos
    é de 0 a `length - 1`, inclusive.

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
