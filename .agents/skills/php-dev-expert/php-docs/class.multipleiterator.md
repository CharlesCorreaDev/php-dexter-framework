# A classe MultipleIterator

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.multipleiterator.php

---

# A classe MultipleIterator

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

## Introdução

Um Iterador que itera sequencialmente sobre todos os iteradores anexados

## Resumo da classe

class ****MultipleIterator****
implements
[Iterator](class.iterator.md) {

/\* Constantes \*/

public
const
[int](language.types.integer.md)
[MIT\_NEED\_ANY](class.multipleiterator.md#multipleiterator.constants.mit-need-any);

public
const
[int](language.types.integer.md)
[MIT\_NEED\_ALL](class.multipleiterator.md#multipleiterator.constants.mit-need-all);

public
const
[int](language.types.integer.md)
[MIT\_KEYS\_NUMERIC](class.multipleiterator.md#multipleiterator.constants.mit-keys-numeric);

public
const
[int](language.types.integer.md)
[MIT\_KEYS\_ASSOC](class.multipleiterator.md#multipleiterator.constants.mit-keys-assoc);

/\* Métodos \*/

public function [\_\_construct](multipleiterator.construct.md)([int](language.types.integer.md) `$flags` = MultipleIterator::MIT\_NEED\_ALL | MultipleIterator::MIT\_KEYS\_NUMERIC)

public function [attachIterator](multipleiterator.attachiterator.md)([Iterator](class.iterator.md) `$iterator`, [string](language.types.string.md)|[int](language.types.integer.md)|[null](language.types.null.md) `$info` = **`null`**): [void](language.types.void.md)

public function [containsIterator](multipleiterator.containsiterator.md)([Iterator](class.iterator.md) `$iterator`): [bool](language.types.boolean.md)

public function [countIterators](multipleiterator.countiterators.md)(): [int](language.types.integer.md)

public function [current](multipleiterator.current.md)(): [array](language.types.array.md)

public function [detachIterator](multipleiterator.detachiterator.md)([Iterator](class.iterator.md) `$iterator`): [void](language.types.void.md)

public function [getFlags](multipleiterator.getflags.md)(): [int](language.types.integer.md)

public function [key](multipleiterator.key.md)(): [array](language.types.array.md)

public function [next](multipleiterator.next.md)(): [void](language.types.void.md)

public function [rewind](multipleiterator.rewind.md)(): [void](language.types.void.md)

public function [setFlags](multipleiterator.setflags.md)([int](language.types.integer.md) `$flags`): [void](language.types.void.md)

public function [valid](multipleiterator.valid.md)(): [bool](language.types.boolean.md)

}

## Constantes predefinidas

**`MultipleIterator::MIT_NEED_ANY`**
:   Não requer que todos os subiteradores sejam válidos na iteração.

**`MultipleIterator::MIT_NEED_ALL`**
:   Requer que todos os subiteradores sejam válidos na iteração.

**`MultipleIterator::MIT_KEYS_NUMERIC`**
:   As chaves são criadas a partir da posição dos subiteradores.

**`MultipleIterator::MIT_KEYS_ASSOC`**
:   As chaves são criadas a partir das informações associadas aos subiteradores.

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | As constantes de classe agora são tipadas. |

## Índice

- [MultipleIterator::attachIterator](multipleiterator.attachiterator.md) — Anexa informações do iterador
- [MultipleIterator::\_\_construct](multipleiterator.construct.md) — Constrói um novo MultipleIterator
- [MultipleIterator::containsIterator](multipleiterator.containsiterator.md) — Verifica se um iterador está anexado
- [MultipleIterator::countIterators](multipleiterator.countiterators.md) — Obtém o número de instâncias de iteradores anexadas
- [MultipleIterator::current](multipleiterator.current.md) — Obtém as instâncias do iterador registradas
- [MultipleIterator::detachIterator](multipleiterator.detachiterator.md) — Desanexa um iterador
- [MultipleIterator::getFlags](multipleiterator.getflags.md) — Obtém informações sobre as opções
- [MultipleIterator::key](multipleiterator.key.md) — Obtém as instâncias do iterador registradas
- [MultipleIterator::next](multipleiterator.next.md) — Movimenta todos os subiteradores anexados para frente
- [MultipleIterator::rewind](multipleiterator.rewind.md) — Rebobina todas as instâncias do iterador anexado
- [MultipleIterator::setFlags](multipleiterator.setflags.md) — Define opções
- [MultipleIterator::valid](multipleiterator.valid.md) — Verifica a validade dos subiteradores

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
