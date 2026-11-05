# Remove um nó do início da lista duplamente encadeada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/spldoublylinkedlist.shift.php

---

# SplDoublyLinkedList::shift

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

SplDoublyLinkedList::shift — Remove um nó do início da lista duplamente encadeada

### Descrição

public function **SplDoublyLinkedList::shift**(): [mixed](language.types.mixed.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O valor do nó removido.

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
