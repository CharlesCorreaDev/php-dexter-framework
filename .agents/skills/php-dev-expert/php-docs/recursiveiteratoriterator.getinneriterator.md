# Obtém iterador interno

> **Fonte / Source:** https://www.php.net/manual/pt_BR/recursiveiteratoriterator.getinneriterator.php

---

# RecursiveIteratorIterator::getInnerIterator

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

RecursiveIteratorIterator::getInnerIterator — Obtém iterador interno

### Descrição

public function **RecursiveIteratorIterator::getInnerIterator**(): [RecursiveIterator](class.recursiveiterator.md)

Obtém o subiterador ativo atual.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O subiterador ativo atual.

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
