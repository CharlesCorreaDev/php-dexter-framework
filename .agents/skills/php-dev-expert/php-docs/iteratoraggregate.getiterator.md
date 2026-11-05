# Recupera um iterador ou Traversable externo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/iteratoraggregate.getiterator.php

---

# IteratorAggregate::getIterator

(PHP 5, PHP 7, PHP 8)

IteratorAggregate::getIterator — Recupera um iterador ou Traversable externo

### Descrição

public function **IteratorAggregate::getIterator**(): [Traversable](class.traversable.md)

Retorna um iterador ou Traversable externo.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Uma instância de um objeto que implementa [Iterator](class.iterator.md) ou
[Traversable](class.traversable.md)

### Erros/Exceções

Lança uma [Exception](class.exception.md) em caso de falha.

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
