# Retorna um iterador sobre a lista de tokens

> **Fonte / Source:** https://www.php.net/manual/pt_BR/dom-tokenlist.getiterator.php

---

# Dom\TokenList::getIterator

(PHP 8 >= 8.4.0)

Dom\TokenList::getIterator — Retorna um iterador sobre a lista de tokens

### Descrição

public function **Dom\TokenList::getIterator**(): [Iterator](class.iterator.md)

Retorna um iterador sobre a lista de tokens.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um iterador sobre a lista de tokens.

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
