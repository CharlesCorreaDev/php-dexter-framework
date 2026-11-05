# A classe IteratorIterator

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.iteratoriterator.php

---

# A classe IteratorIterator

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

## Introdução

Este envoltório de iterador permite a conversão de qualquer coisa que seja
[Traversable](class.traversable.md) em um Iterador.
É importante entender que a maioria das classes que não implementam
Iterators têm razões, pois provavelmente elas não permitem o conjunto completo
de recursos de Iterators. Se for o caso, técnicas devem ser fornecidas para prevenir
uso inadequado, caso contrário, espere exceções ou erros fatais.

## Resumo da classe

class ****IteratorIterator****
implements
[OuterIterator](class.outeriterator.md) {

/\* Métodos \*/

public function [\_\_construct](iteratoriterator.construct.md)([Traversable](class.traversable.md) `$iterator`, [?](language.types.null.md)[string](language.types.string.md) `$class` = **`null`**)

public function [current](iteratoriterator.current.md)(): [mixed](language.types.mixed.md)

public function [getInnerIterator](iteratoriterator.getinneriterator.md)(): [?](language.types.null.md)[Iterator](class.iterator.md)

public function [key](iteratoriterator.key.md)(): [mixed](language.types.mixed.md)

public function [next](iteratoriterator.next.md)(): [void](language.types.void.md)

public function [rewind](iteratoriterator.rewind.md)(): [void](language.types.void.md)

public function [valid](iteratoriterator.valid.md)(): [bool](language.types.boolean.md)

}

## Notas

> **Nota**:
>
> Esta classe permite o acesso aos métodos do iterador interno através do método mágico \_\_call.

## Índice

- [IteratorIterator::\_\_construct](iteratoriterator.construct.md) — Cria um iterador de qualquer coisa que seja percorrível
- [IteratorIterator::current](iteratoriterator.current.md) — Obtém o valor atual
- [IteratorIterator::getInnerIterator](iteratoriterator.getinneriterator.md) — Obtém o iterador interno
- [IteratorIterator::key](iteratoriterator.key.md) — Obtém a chave do elemento atual
- [IteratorIterator::next](iteratoriterator.next.md) — Avança para o próximo elemento
- [IteratorIterator::rewind](iteratoriterator.rewind.md) — Rebobina para o primeiro elemento
- [IteratorIterator::valid](iteratoriterator.valid.md) — Verifica se o elemento atual é válido

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
