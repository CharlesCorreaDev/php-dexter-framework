# A Classe Dom\DtdNamedNodeMap

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.dom-dtdnamednodemap.php

---

# A Classe Dom\DtdNamedNodeMap

(PHP 8 >= 8.4.0)

## Introdução

Representa um mapa de nós nomeados para entidades e nós de notação do
DTD.

## Resumo da classe

class ****Dom\DtdNamedNodeMap****
implements
[IteratorAggregate](class.iteratoraggregate.md),
[Countable](class.countable.md) {

/\* Propriedades \*/

public
readonly
[int](language.types.integer.md)
[$length](class.dom-dtdnamednodemap.md#dom-dtdnamednodemap.props.length);

/\* Métodos \*/

/\* Not documented yet \*/

}

## Propriedades

length
:   O número total de entidades e nós de notação.

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
