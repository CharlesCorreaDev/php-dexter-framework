# A classe DOMNamedNodeMap

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.domnamednodemap.php

---

# A classe DOMNamedNodeMap

(PHP 5, PHP 7, PHP 8)

## Resumo da classe

class ****DOMNamedNodeMap****
implements
[IteratorAggregate](class.iteratoraggregate.md),
[Countable](class.countable.md) {

/\* Propriedades \*/

public
readonly
[int](language.types.integer.md)
[$length](class.domnamednodemap.md#domnamednodemap.props.length);

/\* Métodos \*/

public function [count](domnamednodemap.count.md)(): [int](language.types.integer.md)

public function [getIterator](domnamednodemap.getiterator.md)(): [Iterator](class.iterator.md)

public function [getNamedItem](domnamednodemap.getnameditem.md)([string](language.types.string.md) `$qualifiedName`): [?](language.types.null.md)[DOMNode](class.domnode.md)

public function [getNamedItemNS](domnamednodemap.getnameditemns.md)([?](language.types.null.md)[string](language.types.string.md) `$namespace`, [string](language.types.string.md) `$localName`): [?](language.types.null.md)[DOMNode](class.domnode.md)

public function [item](domnamednodemap.item.md)([int](language.types.integer.md) `$index`): [?](language.types.null.md)[DOMNode](class.domnode.md)

}

## Propriedades

length
:   O número de nós no mapa. A faixa de índices válidos para nós filhos
    é de `0` a `length - 1`, inclusive.

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Os métodos não implementados **DOMNamedNodeMap::setNamedItem()**, **DOMNamedNodeMap::removeNamedItem()**, **DOMNamedNodeMap::setNamedItemNS()** e **DOMNamedNodeMap::removeNamedItem()** foram removidos. |
| 8.0.0 | **DOMNamedNodeMap** implementa [IteratorAggregate](class.iteratoraggregate.md) agora. Anteriormente, [Traversable](class.traversable.md) foi implementado em seu lugar. |

## Notas

> **Nota**:
>
> Nós no mapa podem ser acessados pela sintaxe de array.

## Índice

- [DOMNamedNodeMap::count](domnamednodemap.count.md) — Obtém o número de nós no mapa
- [DOMNamedNodeMap::getIterator](domnamednodemap.getiterator.md) — Recupera um iterador externo
- [DOMNamedNodeMap::getNamedItem](domnamednodemap.getnameditem.md) — Recupera um nó especificado pelo nome
- [DOMNamedNodeMap::getNamedItemNS](domnamednodemap.getnameditemns.md) — Recupera um nó especificado pelo nome local e URI do namespace
- [DOMNamedNodeMap::item](domnamednodemap.item.md) — Recupera um nó especificado pelo índice

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
