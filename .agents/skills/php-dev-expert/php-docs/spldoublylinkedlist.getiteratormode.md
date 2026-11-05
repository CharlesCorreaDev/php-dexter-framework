# Retorna o modo de iteração

> **Fonte / Source:** https://www.php.net/manual/pt_BR/spldoublylinkedlist.getiteratormode.php

---

# SplDoublyLinkedList::getIteratorMode

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

SplDoublyLinkedList::getIteratorMode — Retorna o modo de iteração

### Descrição

public function **SplDoublyLinkedList::getIteratorMode**(): [int](language.types.integer.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna os diferentes modos e flags que afetam a iteração.

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
