# A Classe Dom\TokenList

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.dom-tokenlist.php

---

# A Classe Dom\TokenList

(PHP 8 >= 8.4.0)

## Introdução

Representa um conjunto de tokens em um atributo (ex.: nomes de classe).

## Resumo da classe

final
class ****Dom\TokenList****
implements
[IteratorAggregate](class.iteratoraggregate.md),
[Countable](class.countable.md) {

/\* Propriedades \*/

public
readonly
[int](language.types.integer.md)
[$length](class.dom-tokenlist.md#dom-tokenlist.props.length);

public
[string](language.types.string.md)
[$value](class.dom-tokenlist.md#dom-tokenlist.props.value);

/\* Métodos \*/

public function [add](dom-tokenlist.add.md)([string](language.types.string.md) `...$tokens`): [void](language.types.void.md)

public function [contains](dom-tokenlist.contains.md)([string](language.types.string.md) `$token`): [bool](language.types.boolean.md)

public function [count](dom-tokenlist.count.md)(): [int](language.types.integer.md)

public function [getIterator](dom-tokenlist.getiterator.md)(): [Iterator](class.iterator.md)

public function [item](dom-tokenlist.item.md)([int](language.types.integer.md) `$index`): [?](language.types.null.md)[string](language.types.string.md)

public function [remove](dom-tokenlist.remove.md)([string](language.types.string.md) `...$tokens`): [void](language.types.void.md)

public function [replace](dom-tokenlist.replace.md)([string](language.types.string.md) `$token`, [string](language.types.string.md) `$newToken`): [bool](language.types.boolean.md)

public function [supports](dom-tokenlist.supports.md)([string](language.types.string.md) `$token`): [bool](language.types.boolean.md)

public function [toggle](dom-tokenlist.toggle.md)([string](language.types.string.md) `$token`, [?](language.types.null.md)[bool](language.types.boolean.md) `$force` = **`null`**): [bool](language.types.boolean.md)

}

## Propriedades

length
:   O número de tokens.

value
:   O valor do atributo vinculado a este objeto.

## Notas

> **Nota**:
>
> A extensão DOM usa codificação UTF-8 ao trabalhar com métodos ou propriedades.
> Os métodos do analisador detectam automaticamente a codificação ou permitem que o chamador especifique uma codificação.

> **Nota**:
>
> Os tokens na lista podem ser acessados ​​pela sintaxe de array.

## Índice

- [Dom\TokenList::add](dom-tokenlist.add.md) — Adiciona os tokens informados à lista
- [Dom\TokenList::contains](dom-tokenlist.contains.md) — Informa se a lista contém um token específico
- [Dom\TokenList::count](dom-tokenlist.count.md) — Retorna o número de tokens na lista
- [Dom\TokenList::getIterator](dom-tokenlist.getiterator.md) — Retorna um iterador sobre a lista de tokens
- [Dom\TokenList::item](dom-tokenlist.item.md) — Retorna um token da lista
- [Dom\TokenList::remove](dom-tokenlist.remove.md) — Remove da lista os tokens informados
- [Dom\TokenList::replace](dom-tokenlist.replace.md) — Substitui um token por outro na lista
- [Dom\TokenList::supports](dom-tokenlist.supports.md) — Informa se o token informado é suportado
- [Dom\TokenList::toggle](dom-tokenlist.toggle.md) — Alterna a presença de um token na lista

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
