# A classe DOMNodeList

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.domnodelist.php

---

# A classe DOMNodeList

(PHP 5, PHP 7, PHP 8)

## Introdução

Representa uma lista viva de nós.

## Resumo da classe

class ****DOMNodeList****
implements
[IteratorAggregate](class.iteratoraggregate.md),
[Countable](class.countable.md) {

/\* Propriedades \*/

public
readonly
[int](language.types.integer.md)
[$length](class.domnodelist.md#domnodelist.props.length);

/\* Métodos \*/

public function [count](domnodelist.count.md)(): [int](language.types.integer.md)

public function [getIterator](domnodelist.getiterator.md)(): [Iterator](class.iterator.md)

public function [item](domnodelist.item.md)([int](language.types.integer.md) `$index`): [DOMElement](class.domelement.md)|[DOMNode](class.domnode.md)|[DOMNameSpaceNode](class.domnamespacenode.md)|[null](language.types.null.md)

}

## Propriedades

length
:   O número de nós na lista. A faixa de índices válidos para nós filhos
    é de 0 a `length - 1`, inclusive.

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | **DOMNodeList** implementa [IteratorAggregate](class.iteratoraggregate.md) agora. Anteriormente, foi implementado [Traversable](class.traversable.md) em vez disso. |
| 7.2.0 | A interface [Countable](class.countable.md) é implementada e retorna o valor da propriedade [length](class.domnodelist.md#domnodelist.props.length). |

## Notas

> **Nota**:
>
> Nós na lista podem ser acessados pela sintaxe de array.

## Veja também

- [» Especificação da W3C para NodeList.](https://www.w3.org/TR/2003/WD-DOM-Level-3-Core-20030226/DOM3-Core.html#core-ID-536297177)

## Índice

- [DOMNodeList::count](domnodelist.count.md) — Obtém o número de nós na lista
- [DOMNodeList::getIterator](domnodelist.getiterator.md) — Retorna um iterador externo
- [DOMNodeList::item](domnodelist.item.md) — Recupera um nó especificado pelo índice

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
