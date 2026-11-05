# Inicia iteração

> **Fonte / Source:** https://www.php.net/manual/pt_BR/recursivetreeiterator.beginiteration.php

---

# RecursiveTreeIterator::beginIteration

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

RecursiveTreeIterator::beginIteration — Inicia iteração

### Descrição

public function **RecursiveTreeIterator::beginIteration**(): [RecursiveIterator](class.recursiveiterator.md)

Chamado quando a iteração começa (após a primeira chamada de
[RecursiveTreeIterator::rewind()](recursivetreeiterator.rewind.md)).

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um [RecursiveIterator](class.recursiveiterator.md).

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
