# Verifica se o elemento atual do iterador interno tem filhos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/recursivefilteriterator.haschildren.php

---

# RecursiveFilterIterator::hasChildren

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

RecursiveFilterIterator::hasChildren — Verifica se o elemento atual do iterador interno tem filhos

### Descrição

public function **RecursiveFilterIterator::hasChildren**(): [bool](language.types.boolean.md)

Verifica se o elemento atual do iterador interno tem filhos.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**`true`** se o iterador interno tiver filhos, caso contrário **`false`**

### Veja também

- [RecursiveFilterIterator::getChildren()](recursivefilteriterator.getchildren.md) - Retorna os filhos do iterador interno contidos em um RecursiveFilterIterator
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
