# A classe RecursiveRegexIterator

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.recursiveregexiterator.php

---

# A classe RecursiveRegexIterator

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

## Introdução

Este iterador recursivo pode filtrar outro iterador recursivo por meio de uma expressão regular.

## Resumo da classe

class ****RecursiveRegexIterator****
extends
[RegexIterator](class.regexiterator.md)
implements
[RecursiveIterator](class.recursiveiterator.md) {

/\* Constantes herdadas \*/

public
const
[int](language.types.integer.md)
[RegexIterator::USE\_KEY](class.regexiterator.md#regexiterator.constants.use-key);

public
const
[int](language.types.integer.md)
[RegexIterator::INVERT\_MATCH](class.regexiterator.md#regexiterator.constants.invert-match);

public
const
[int](language.types.integer.md)
[RegexIterator::MATCH](class.regexiterator.md#regexiterator.constants.match);

public
const
[int](language.types.integer.md)
[RegexIterator::GET\_MATCH](class.regexiterator.md#regexiterator.constants.get-match);

public
const
[int](language.types.integer.md)
[RegexIterator::ALL\_MATCHES](class.regexiterator.md#regexiterator.constants.all-matches);

public
const
[int](language.types.integer.md)
[RegexIterator::SPLIT](class.regexiterator.md#regexiterator.constants.split);

public
const
[int](language.types.integer.md)
[RegexIterator::REPLACE](class.regexiterator.md#regexiterator.constants.replace);

/\* Propriedades herdadas \*/

public
?[string](language.types.string.md)
[$replacement](class.regexiterator.md#regexiterator.props.replacement) = null;

/\* Métodos \*/

public function [\_\_construct](recursiveregexiterator.construct.md)(  
    [RecursiveIterator](class.recursiveiterator.md) `$iterator`,  
    [string](language.types.string.md) `$pattern`,  
    [int](language.types.integer.md) `$mode` = **`RecursiveRegexIterator::MATCH`**,  
    [int](language.types.integer.md) `$flags` = 0,  
    [int](language.types.integer.md) `$pregFlags` = 0  
)

public function [getChildren](recursiveregexiterator.getchildren.md)(): [RecursiveRegexIterator](class.recursiveregexiterator.md)

public function [hasChildren](recursiveregexiterator.haschildren.md)(): [bool](language.types.boolean.md)

/\* Métodos herdados \*/

public function [RegexIterator::accept](regexiterator.accept.md)(): [bool](language.types.boolean.md)

public function [RegexIterator::getFlags](regexiterator.getflags.md)(): [int](language.types.integer.md)

public function [RegexIterator::getMode](regexiterator.getmode.md)(): [int](language.types.integer.md)

public function [RegexIterator::getPregFlags](regexiterator.getpregflags.md)(): [int](language.types.integer.md)

public function [RegexIterator::getRegex](regexiterator.getregex.md)(): [string](language.types.string.md)

public function [RegexIterator::setFlags](regexiterator.setflags.md)([int](language.types.integer.md) `$flags`): [void](language.types.void.md)

public function [RegexIterator::setMode](regexiterator.setmode.md)([int](language.types.integer.md) `$mode`): [void](language.types.void.md)

public function [RegexIterator::setPregFlags](regexiterator.setpregflags.md)([int](language.types.integer.md) `$pregFlags`): [void](language.types.void.md)

public function [FilterIterator::accept](filteriterator.accept.md)(): [bool](language.types.boolean.md)

public function [FilterIterator::current](filteriterator.current.md)(): [mixed](language.types.mixed.md)

public function [FilterIterator::key](filteriterator.key.md)(): [mixed](language.types.mixed.md)

public function [FilterIterator::next](filteriterator.next.md)(): [void](language.types.void.md)

public function [FilterIterator::rewind](filteriterator.rewind.md)(): [void](language.types.void.md)

public function [FilterIterator::valid](filteriterator.valid.md)(): [bool](language.types.boolean.md)

public function [IteratorIterator::current](iteratoriterator.current.md)(): [mixed](language.types.mixed.md)

public function [IteratorIterator::getInnerIterator](iteratoriterator.getinneriterator.md)(): [?](language.types.null.md)[Iterator](class.iterator.md)

public function [IteratorIterator::key](iteratoriterator.key.md)(): [mixed](language.types.mixed.md)

public function [IteratorIterator::next](iteratoriterator.next.md)(): [void](language.types.void.md)

public function [IteratorIterator::rewind](iteratoriterator.rewind.md)(): [void](language.types.void.md)

public function [IteratorIterator::valid](iteratoriterator.valid.md)(): [bool](language.types.boolean.md)

}

## Índice

- [RecursiveRegexIterator::\_\_construct](recursiveregexiterator.construct.md) — Cria um novo RecursiveRegexIterator
- [RecursiveRegexIterator::getChildren](recursiveregexiterator.getchildren.md) — Retorna um iterador para a entrada atual
- [RecursiveRegexIterator::hasChildren](recursiveregexiterator.haschildren.md) — Retorna se um iterador pode ser obtido para a entrada atual

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
