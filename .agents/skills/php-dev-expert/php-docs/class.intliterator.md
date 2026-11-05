# A classe IntlIterator

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.intliterator.php

---

# A classe IntlIterator

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

## Introdução

Essa classe representa objetos iteradores em toda extensão intl sempre
que o iterador não puder ser identificado com qualquer outro objeto fornecido
pela extensão. O objeto iterador distinto usado internamente pelo
[construtor `foreach`](control-structures.foreach.md) só pode ser obtido (na parte relevante aqui) a partir de
objetos, então objetos dessa classe tem o propósito de fornecer o gancho
através da qual este objeto interno pode ser obtido. Como uma conveniência, essa
classe também implementa a interface [Iterator](class.iterator.md),
permitindo que a coleção de valores sejam navegados usando os métodos
definidos nessa interface. Ambos os métodos e objetos iteradores internos
fornecidos pelo `foreach` são apoiados pelo mesmo
estado (ex. a posição do iterador e o seu valor atual).

As subclasses podem fornecer funcionalidades mais valiosas.

## Resumo da classe

class ****IntlIterator****
implements
[Iterator](class.iterator.md) {

/\* Métodos \*/

public function [current](intliterator.current.md)(): [mixed](language.types.mixed.md)

public function [key](intliterator.key.md)(): [mixed](language.types.mixed.md)

public function [next](intliterator.next.md)(): [void](language.types.void.md)

public function [rewind](intliterator.rewind.md)(): [void](language.types.void.md)

public function [valid](intliterator.valid.md)(): [bool](language.types.boolean.md)

}

## Índice

- [IntlIterator::current](intliterator.current.md) — Retorna o elemento atual
- [IntlIterator::key](intliterator.key.md) — Retorna a chave do elemento atual
- [IntlIterator::next](intliterator.next.md) — Avança para o próximo elemento
- [IntlIterator::rewind](intliterator.rewind.md) — Rebobina o iterador para o primeiro elemento
- [IntlIterator::valid](intliterator.valid.md) — Verifica se a posição atual é válida

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
