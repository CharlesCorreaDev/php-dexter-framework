# Retorna se o $index solicitado existe

> **Fonte / Source:** https://www.php.net/manual/pt_BR/spldoublylinkedlist.offsetexists.php

---

# SplDoublyLinkedList::offsetExists

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

SplDoublyLinkedList::offsetExists — Retorna se o $index solicitado existe

### Descrição

public function **SplDoublyLinkedList::offsetExists**([int](language.types.integer.md) `$index`): [bool](language.types.boolean.md)

### Parâmetros

`index`
:   O índice sendo verificado.

### Valor Retornado

**`true`** se o `index` solicitado existe, caso contrário, **`false`**

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
