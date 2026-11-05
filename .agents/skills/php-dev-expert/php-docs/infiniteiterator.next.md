# Movimenta o Iterador Interno para frente ou rebobina

> **Fonte / Source:** https://www.php.net/manual/pt_BR/infiniteiterator.next.php

---

# InfiniteIterator::next

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

InfiniteIterator::next — Movimenta o Iterador Interno para frente ou rebobina

### Descrição

public function **InfiniteIterator::next**(): [void](language.types.void.md)

Movimenta o [Iterator](class.iterator.md) interno para o próximo elemento, se houver um,
caso contrário, rebobina o [Iterator](class.iterator.md) interno de volta ao início.

> **Nota**:
>
> Mesmo um [InfiniteIterator](class.infiniteiterator.md) irá parar se
> o seu [Iterator](class.iterator.md) interno estiver vazio.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [InfiniteIterator::\_\_construct()](infiniteiterator.construct.md) - Constrói um InfiniteIterator

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
