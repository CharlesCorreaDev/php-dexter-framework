# Espreita o nó desde o início da lista duplamente encadeada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/spldoublylinkedlist.bottom.php

---

# SplDoublyLinkedList::bottom

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

SplDoublyLinkedList::bottom — Espreita o nó desde o início da lista duplamente encadeada

### Descrição

public function **SplDoublyLinkedList::bottom**(): [mixed](language.types.mixed.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O valor do primeiro nó.

### Erros/Exceções

Lança [RuntimeException](class.runtimeexception.md) quando a estrutura de dados está vazia.

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
