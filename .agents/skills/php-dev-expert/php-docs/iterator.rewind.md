# Retrocede o Iterator para o primeiro elemento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/iterator.rewind.php

---

# Iterator::rewind

(PHP 5, PHP 7, PHP 8)

Iterator::rewind — Retrocede o Iterator para o primeiro elemento

### Descrição

public function **Iterator::rewind**(): [void](language.types.void.md)

Retrocede para o primeiro elemento do Iterator.

> **Nota**:
>
> Este é o *primeiro* método chamado quando se inicia um
> loop [`foreach`](control-structures.foreach.md). Ele *não será*
> executado *depois* de laços [`foreach`](control-structures.foreach.md).
>
> Como o [`foreach`](control-structures.foreach.md) sempre chama este método antes de iniciar
> uma iteração, o avanço manual (por exemplo através de
> [SplFileObject::seek()](splfileobject.seek.md)) irá reiniciar o iterador.
>
> Para iterar sem retroceder o iterador, encapsule-o em um
> [NoRewindIterator](class.norewinditerator.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Qualquer valor retornado é ignorado.

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
