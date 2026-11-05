# Retorna se um iterador pode ser criado para a entrada atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/recursiveiterator.haschildren.php

---

# RecursiveIterator::hasChildren

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

RecursiveIterator::hasChildren — Retorna se um iterador pode ser criado para a entrada atual

### Descrição

public function **RecursiveIterator::hasChildren**(): [bool](language.types.boolean.md)

Retorna se um iterador pode ser criado para a entrada atual.
[RecursiveIterator::getChildren()](recursiveiterator.getchildren.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se a entrada atual puder ser iterada, caso contrário retorna **`false`**.

### Veja também

- [RecursiveIterator::getChildren()](recursiveiterator.getchildren.md) - Retorna um iterador para a entrada atual

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
