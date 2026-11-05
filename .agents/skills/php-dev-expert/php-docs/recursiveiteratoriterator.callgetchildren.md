# Obtém filhos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/recursiveiteratoriterator.callgetchildren.php

---

# RecursiveIteratorIterator::callGetChildren

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

RecursiveIteratorIterator::callGetChildren — Obtém filhos

### Descrição

public function **RecursiveIteratorIterator::callGetChildren**(): [?](language.types.null.md)[RecursiveIterator](class.recursiveiterator.md)

Obtém os filhos do elemento atual.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um **RecursiveIterator()** em caso de sucesso, ou **`null`** em caso de falha.

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
