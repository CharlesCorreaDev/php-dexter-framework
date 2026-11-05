# Obtém um iterador externo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/weakmap.getiterator.php

---

# WeakMap::getIterator

(PHP 8)

WeakMap::getIterator — Obtém um iterador externo

### Descrição

public function **WeakMap::getIterator**(): [Iterator](class.iterator.md)

Retorna um iterador externo.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Uma instância de um objeto que implementa a classe [Iterator](class.iterator.md) ou
[Traversable](class.traversable.md)

### Erros/Exceções

Dispara uma [Exception](class.exception.md) em caso de falha.

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
