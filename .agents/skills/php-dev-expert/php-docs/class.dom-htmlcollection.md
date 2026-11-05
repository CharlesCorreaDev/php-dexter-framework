# A Classe Dom\HTMLCollection

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.dom-htmlcollection.php

---

# A Classe Dom\HTMLCollection

(PHP 8 >= 8.4.0)

## Introdução

Representa um conjunto estático de elementos.

## Resumo da classe

class ****Dom\HTMLCollection****
implements
[IteratorAggregate](class.iteratoraggregate.md),
[Countable](class.countable.md) {

/\* Propriedades \*/

public
readonly
[int](language.types.integer.md)
[$length](class.dom-htmlcollection.md#dom-htmlcollection.props.length);

/\* Métodos \*/

/\* Not documented yet \*/

}

## Propriedades

length
:   O número de elementos.

## Notas

> **Nota**:
>
> A extensão DOM usa codificação UTF-8 ao trabalhar com métodos ou propriedades.
> Os métodos do analisador detectam automaticamente a codificação ou permitem que o chamador especifique uma codificação.

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
