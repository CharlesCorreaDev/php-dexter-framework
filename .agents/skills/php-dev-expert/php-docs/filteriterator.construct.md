# Constrói um FilterIterator

> **Fonte / Source:** https://www.php.net/manual/pt_BR/filteriterator.construct.php

---

# FilterIterator::\_\_construct

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

FilterIterator::\_\_construct — Constrói um FilterIterator

### Descrição

public function **FilterIterator::\_\_construct**([Iterator](class.iterator.md) `$iterator`)

Constrói um novo [FilterIterator](class.filteriterator.md), que consiste em
um `iterator` passado com filtros aplicados a ele.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`iterator`
:   O iterador que está sendo filtrado.

### Veja também

- [LimitIterator::\_\_construct()](limititerator.construct.md) - Constrói um LimitIterator

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
