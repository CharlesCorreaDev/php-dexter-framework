# Retorna um iterador externo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domnodelist.getiterator.php

---

# DOMNodeList::getIterator

(PHP 8)

DOMNodeList::getIterator — Retorna um iterador externo

### Descrição

public function **DOMNodeList::getIterator**(): [Iterator](class.iterator.md)

Retorna um iterador externo para a lista de nós.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Uma instância de um objeto que implementa [Iterator](class.iterator.md) ou
[Traversable](class.traversable.md)

### Erros/Exceções

Lança uma [Exception](class.exception.md) em caso de falha.

### Veja também

- [IteratorAggregate::getIterator()](iteratoraggregate.getiterator.md) - Recupera um iterador ou Traversable externo

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
