# Constrói um RecursiveTreeIterator

> **Fonte / Source:** https://www.php.net/manual/pt_BR/recursivetreeiterator.construct.php

---

# RecursiveTreeIterator::\_\_construct

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

RecursiveTreeIterator::\_\_construct — Constrói um RecursiveTreeIterator

### Descrição

public function **RecursiveTreeIterator::\_\_construct**(  
    [RecursiveIterator](class.recursiveiterator.md)|[IteratorAggregate](class.iteratoraggregate.md) `$iterator`,  
    [int](language.types.integer.md) `$flags` = **`RecursiveTreeIterator::BYPASS_KEY`**,  
    [int](language.types.integer.md) `$cachingIteratorFlags` = **`CachingIterator::CATCH_GET_CHILD`**,  
    [int](language.types.integer.md) `$mode` = **`RecursiveTreeIterator::SELF_FIRST`**  
)

Constrói um novo [RecursiveTreeIterator](class.recursivetreeiterator.md) a partir do iterador recursivo fornecido.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`iterator`
:   O [RecursiveIterator](class.recursiveiterator.md) ou [IteratorAggregate](class.iteratoraggregate.md) a ser iterado.

`flags`
:   Podem ser fornecidas opções que afetarão o comportamento de alguns métodos.
    Uma lista das opções pode ser encontrada em [Constantes predefinidas do RecursiveTreeIterator](class.recursivetreeiterator.md#recursivetreeiterator.constants).

`caching_it_flags`
:   Opções para afetar o comportamento do [RecursiveCachingIterator](class.recursivecachingiterator.md) usado internamente.

`mode`
:   Opções para afetar o comportamento do [RecursiveIteratorIterator](class.recursiveiteratoriterator.md) usado internamente.

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
