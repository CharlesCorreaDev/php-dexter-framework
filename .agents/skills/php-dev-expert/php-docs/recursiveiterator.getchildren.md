# Retorna um iterador para a entrada atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/recursiveiterator.getchildren.php

---

# RecursiveIterator::getChildren

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

RecursiveIterator::getChildren — Retorna um iterador para a entrada atual

### Descrição

public function **RecursiveIterator::getChildren**(): [?](language.types.null.md)[RecursiveIterator](class.recursiveiterator.md)

Retorna um iterador para a entrada atual do iterador.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um iterador para a entrada atual se ela existir, ou **`null`** caso contrário.

### Veja também

- [RecursiveIterator::hasChildren()](recursiveiterator.haschildren.md) - Retorna se um iterador pode ser criado para a entrada atual

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
