# A classe RegexIterator

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.regexiterator.php

---

# A classe RegexIterator

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

## Introdução

Este iterador pode ser usado para filtrar outro iterador com base em uma expressão regular.

## Resumo da classe

class ****RegexIterator****
extends
[FilterIterator](class.filteriterator.md)
{

/\* Constantes \*/

public
const
[int](language.types.integer.md)
[USE\_KEY](class.regexiterator.md#regexiterator.constants.use-key);

public
const
[int](language.types.integer.md)
[INVERT\_MATCH](class.regexiterator.md#regexiterator.constants.invert-match);

public
const
[int](language.types.integer.md)
[MATCH](class.regexiterator.md#regexiterator.constants.match);

public
const
[int](language.types.integer.md)
[GET\_MATCH](class.regexiterator.md#regexiterator.constants.get-match);

public
const
[int](language.types.integer.md)
[ALL\_MATCHES](class.regexiterator.md#regexiterator.constants.all-matches);

public
const
[int](language.types.integer.md)
[SPLIT](class.regexiterator.md#regexiterator.constants.split);

public
const
[int](language.types.integer.md)
[REPLACE](class.regexiterator.md#regexiterator.constants.replace);

/\* Propriedades \*/

public
?[string](language.types.string.md)
[$replacement](class.regexiterator.md#regexiterator.props.replacement) = null;

/\* Métodos \*/

public function [\_\_construct](regexiterator.construct.md)(  
    [Iterator](class.iterator.md) `$iterator`,  
    [string](language.types.string.md) `$pattern`,  
    [int](language.types.integer.md) `$mode` = **`RegexIterator::MATCH`**,  
    [int](language.types.integer.md) `$flags` = 0,  
    [int](language.types.integer.md) `$pregFlags` = 0  
)

public function [accept](regexiterator.accept.md)(): [bool](language.types.boolean.md)

public function [getFlags](regexiterator.getflags.md)(): [int](language.types.integer.md)

public function [getMode](regexiterator.getmode.md)(): [int](language.types.integer.md)

public function [getPregFlags](regexiterator.getpregflags.md)(): [int](language.types.integer.md)

public function [getRegex](regexiterator.getregex.md)(): [string](language.types.string.md)

public function [setFlags](regexiterator.setflags.md)([int](language.types.integer.md) `$flags`): [void](language.types.void.md)

public function [setMode](regexiterator.setmode.md)([int](language.types.integer.md) `$mode`): [void](language.types.void.md)

public function [setPregFlags](regexiterator.setpregflags.md)([int](language.types.integer.md) `$pregFlags`): [void](language.types.void.md)

/\* Métodos herdados \*/

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

## Constantes predefinidas

## Modos de Operação do RegexIterator

**`RegexIterator::ALL_MATCHES`**
:   Retorna todas as correspondências para a entrada atual
    (veja [preg\_match\_all()](function.preg-match-all.md)).

**`RegexIterator::GET_MATCH`**
:   Retorna a primeira correspondência para a entrada atual
    (veja [preg\_match()](function.preg-match.md)).

**`RegexIterator::MATCH`**
:   Execute somente a correspondência (filtro) para a entrada atual
    (veja [preg\_match()](function.preg-match.md)).

**`RegexIterator::REPLACE`**
:   Substitui a entrada atual
    (veja [preg\_replace()](function.preg-replace.md); Não totalmente implementado ainda)

**`RegexIterator::SPLIT`**
:   Retorna os valores divididos para a entrada atual (veja [preg\_split()](function.preg-split.md)).

## RegexIterator Flags

**`RegexIterator::USE_KEY`**
:   Flag especial: Correspondência à chave da entrada em vez do valor da entrada.

**`RegexIterator::INVERT_MATCH`**
:   Inverte o valor de retorno de [RegexIterator::accept()](regexiterator.accept.md).

## Propriedades

replacement

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | As constantes de classe agora são tipadas. |

## Índice

- [RegexIterator::accept](regexiterator.accept.md) — Obtém o status de aceitação
- [RegexIterator::\_\_construct](regexiterator.construct.md) — Cria um novo RegexIterator
- [RegexIterator::getFlags](regexiterator.getflags.md) — Obtém opções
- [RegexIterator::getMode](regexiterator.getmode.md) — Retorna o modo de operação
- [RegexIterator::getPregFlags](regexiterator.getpregflags.md) — Retorna as opções da expressão regular
- [RegexIterator::getRegex](regexiterator.getregex.md) — Retorna a expressão regular atual
- [RegexIterator::setFlags](regexiterator.setflags.md) — Define as opções
- [RegexIterator::setMode](regexiterator.setmode.md) — Define o modo de operação
- [RegexIterator::setPregFlags](regexiterator.setpregflags.md) — Define as opções da expressão regular

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
