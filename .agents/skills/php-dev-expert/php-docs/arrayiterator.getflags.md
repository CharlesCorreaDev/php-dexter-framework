# Retorna as flags de comportamento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/arrayiterator.getflags.php

---

# ArrayIterator::getFlags

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

ArrayIterator::getFlags — Retorna as flags de comportamento

### Descrição

public function **ArrayIterator::getFlags**(): [int](language.types.integer.md)

Retorna as flags de comportamento do [ArrayIterator](class.arrayiterator.md). Veja o método
[ArrayIterator::setFlags](arrayiterator.setflags.md)
para saber as flags disponíveis.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna as flags de comportamento do ArrayIterator.

### Veja também

- [ArrayIterator::setFlags()](arrayiterator.setflags.md) - Define as flags que irão alterar o comportamento
- [ArrayIterator::valid()](arrayiterator.valid.md) - Verifica se o iterador de array contém mais entradas

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
