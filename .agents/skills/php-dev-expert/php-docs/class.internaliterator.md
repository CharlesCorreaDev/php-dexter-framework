# A classe InternalIterator

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.internaliterator.php

---

# A classe InternalIterator

(PHP 8)

## Introdução

Classe para facilitar a implementação de [IteratorAggregate](class.iteratoraggregate.md)
para classes *internas*.

## Resumo da classe

final
class ****InternalIterator****
implements
[Iterator](class.iterator.md) {

/\* Métodos \*/

private function [\_\_construct](internaliterator.construct.md)()

public function [current](internaliterator.current.md)(): [mixed](language.types.mixed.md)

public function [key](internaliterator.key.md)(): [mixed](language.types.mixed.md)

public function [next](internaliterator.next.md)(): [void](language.types.void.md)

public function [rewind](internaliterator.rewind.md)(): [void](language.types.void.md)

public function [valid](internaliterator.valid.md)(): [bool](language.types.boolean.md)

}

## Índice

- [InternalIterator::\_\_construct](internaliterator.construct.md) — Construtor privado para não permitir instanciação direta
- [InternalIterator::current](internaliterator.current.md) — Retorna o elemento atual
- [InternalIterator::key](internaliterator.key.md) — Retorna a chave do elemento atual
- [InternalIterator::next](internaliterator.next.md) — Move para o próximo elemento
- [InternalIterator::rewind](internaliterator.rewind.md) — Retrocede o Iterator para o primeiro elemento
- [InternalIterator::valid](internaliterator.valid.md) — Verifica se a posição atual é válida

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
