# Construtor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/recursivecachingiterator.construct.php

---

# RecursiveCachingIterator::\_\_construct

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

RecursiveCachingIterator::\_\_construct — Construtor

### Descrição

public function **RecursiveCachingIterator::\_\_construct**([Iterator](class.iterator.md) `$iterator`, [int](language.types.integer.md) `$flags` = **`RecursiveCachingIterator::CALL_TOSTRING`**)

Constrói um novo [RecursiveCachingIterator](class.recursivecachingiterator.md),
que consiste em um `iterator` passado.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`iterator`
:   O iterador sendo usado.

`flags`
:   As opções. Use **`CALL_TOSTRING`** para chamar
    **RecursiveCachingIterator::\_\_toString()** para cada elemento (o padrão),
    e/ou **`CATCH_GET_CHILD`** para capturar exceções ao tentar obter filhos.

### Veja também

- [CachingIterator::\_\_construct()](cachingiterator.construct.md) - Constrói um novo objeto CachingIterator para o iterador

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
