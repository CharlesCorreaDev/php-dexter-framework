# Retorna os filhos do iterador interno contidos em um RecursiveFilterIterator

> **Fonte / Source:** https://www.php.net/manual/pt_BR/recursivefilteriterator.getchildren.php

---

# RecursiveFilterIterator::getChildren

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

RecursiveFilterIterator::getChildren — Retorna os filhos do iterador interno contidos em um RecursiveFilterIterator

### Descrição

public function **RecursiveFilterIterator::getChildren**(): [?](language.types.null.md)[RecursiveFilterIterator](class.recursivefilteriterator.md)

Retorna os filhos do iterador interno contidos em um [RecursiveFilterIterator](class.recursivefilteriterator.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um [RecursiveFilterIterator](class.recursivefilteriterator.md) contendo os filhos do iterador interno.

### Veja também

- [RecursiveFilterIterator::hasChildren()](recursivefilteriterator.haschildren.md) - Verifica se o elemento atual do iterador interno tem filhos
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
