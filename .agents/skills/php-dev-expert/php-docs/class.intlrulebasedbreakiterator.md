# A classe IntlRuleBasedBreakIterator

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.intlrulebasedbreakiterator.php

---

# A classe IntlRuleBasedBreakIterator

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

## Introdução

Uma subclasse de [IntlBreakIterator](class.intlbreakiterator.md) que faz encapsulamento
de iteradores de quebra ICU cujo comportamento é especificado usando-se um conjunto de regras. Este
é o tipo mais comum de iteradores de quebra.

Estas regras estão descritas no [» Guia do Usuário de
Análise de Limites ICU](https://unicode-org.github.io/icu/userguide/boundaryanalysis/break-rules.html).

## Resumo da classe

class ****IntlRuleBasedBreakIterator****
extends
[IntlBreakIterator](class.intlbreakiterator.md)
{

/\* Constantes herdadas \*/

public
const
[int](language.types.integer.md)
[IntlBreakIterator::DONE](class.intlbreakiterator.md#intlbreakiterator.constants.done);

public
const
[int](language.types.integer.md)
[IntlBreakIterator::WORD\_NONE](class.intlbreakiterator.md#intlbreakiterator.constants.word-none);

public
const
[int](language.types.integer.md)
[IntlBreakIterator::WORD\_NONE\_LIMIT](class.intlbreakiterator.md#intlbreakiterator.constants.word-none-limit);

public
const
[int](language.types.integer.md)
[IntlBreakIterator::WORD\_NUMBER](class.intlbreakiterator.md#intlbreakiterator.constants.word-number);

public
const
[int](language.types.integer.md)
[IntlBreakIterator::WORD\_NUMBER\_LIMIT](class.intlbreakiterator.md#intlbreakiterator.constants.word-number-limit);

public
const
[int](language.types.integer.md)
[IntlBreakIterator::WORD\_LETTER](class.intlbreakiterator.md#intlbreakiterator.constants.word-letter);

public
const
[int](language.types.integer.md)
[IntlBreakIterator::WORD\_LETTER\_LIMIT](class.intlbreakiterator.md#intlbreakiterator.constants.word-letter-limit);

public
const
[int](language.types.integer.md)
[IntlBreakIterator::WORD\_KANA](class.intlbreakiterator.md#intlbreakiterator.constants.word-kana);

public
const
[int](language.types.integer.md)
[IntlBreakIterator::WORD\_KANA\_LIMIT](class.intlbreakiterator.md#intlbreakiterator.constants.word-kana-limit);

public
const
[int](language.types.integer.md)
[IntlBreakIterator::WORD\_IDEO](class.intlbreakiterator.md#intlbreakiterator.constants.word-ideo);

public
const
[int](language.types.integer.md)
[IntlBreakIterator::WORD\_IDEO\_LIMIT](class.intlbreakiterator.md#intlbreakiterator.constants.word-ideo-limit);

public
const
[int](language.types.integer.md)
[IntlBreakIterator::LINE\_SOFT](class.intlbreakiterator.md#intlbreakiterator.constants.line-soft);

public
const
[int](language.types.integer.md)
[IntlBreakIterator::LINE\_SOFT\_LIMIT](class.intlbreakiterator.md#intlbreakiterator.constants.line-soft-limit);

public
const
[int](language.types.integer.md)
[IntlBreakIterator::LINE\_HARD](class.intlbreakiterator.md#intlbreakiterator.constants.line-hard);

public
const
[int](language.types.integer.md)
[IntlBreakIterator::LINE\_HARD\_LIMIT](class.intlbreakiterator.md#intlbreakiterator.constants.line-hard-limit);

public
const
[int](language.types.integer.md)
[IntlBreakIterator::SENTENCE\_TERM](class.intlbreakiterator.md#intlbreakiterator.constants.sentence-term);

public
const
[int](language.types.integer.md)
[IntlBreakIterator::SENTENCE\_TERM\_LIMIT](class.intlbreakiterator.md#intlbreakiterator.constants.sentence-term-limit);

public
const
[int](language.types.integer.md)
[IntlBreakIterator::SENTENCE\_SEP](class.intlbreakiterator.md#intlbreakiterator.constants.sentence-sep);

public
const
[int](language.types.integer.md)
[IntlBreakIterator::SENTENCE\_SEP\_LIMIT](class.intlbreakiterator.md#intlbreakiterator.constants.sentence-sep-limit);

/\* Métodos \*/

public function [\_\_construct](intlrulebasedbreakiterator.construct.md)([string](language.types.string.md) `$rules`, [bool](language.types.boolean.md) `$compiled` = **`false`**)

public function [getBinaryRules](intlrulebasedbreakiterator.getbinaryrules.md)(): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [getRules](intlrulebasedbreakiterator.getrules.md)(): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [getRuleStatus](intlrulebasedbreakiterator.getrulestatus.md)(): [int](language.types.integer.md)

public function [getRuleStatusVec](intlrulebasedbreakiterator.getrulestatusvec.md)(): [array](language.types.array.md)|[false](language.types.singleton.md)

/\* Métodos herdados \*/

public static function [IntlBreakIterator::createCharacterInstance](intlbreakiterator.createcharacterinstance.md)([?](language.types.null.md)[string](language.types.string.md) `$locale` = **`null`**): [?](language.types.null.md)[IntlBreakIterator](class.intlbreakiterator.md)

public static function [IntlBreakIterator::createCodePointInstance](intlbreakiterator.createcodepointinstance.md)(): [IntlCodePointBreakIterator](class.intlcodepointbreakiterator.md)

public static function [IntlBreakIterator::createLineInstance](intlbreakiterator.createlineinstance.md)([?](language.types.null.md)[string](language.types.string.md) `$locale` = **`null`**): [?](language.types.null.md)[IntlBreakIterator](class.intlbreakiterator.md)

public static function [IntlBreakIterator::createSentenceInstance](intlbreakiterator.createsentenceinstance.md)([?](language.types.null.md)[string](language.types.string.md) `$locale` = **`null`**): [?](language.types.null.md)[IntlBreakIterator](class.intlbreakiterator.md)

public static function [IntlBreakIterator::createTitleInstance](intlbreakiterator.createtitleinstance.md)([?](language.types.null.md)[string](language.types.string.md) `$locale` = **`null`**): [?](language.types.null.md)[IntlBreakIterator](class.intlbreakiterator.md)

public static function [IntlBreakIterator::createWordInstance](intlbreakiterator.createwordinstance.md)([?](language.types.null.md)[string](language.types.string.md) `$locale` = **`null`**): [?](language.types.null.md)[IntlBreakIterator](class.intlbreakiterator.md)

public function [IntlBreakIterator::current](intlbreakiterator.current.md)(): [int](language.types.integer.md)

public function [IntlBreakIterator::first](intlbreakiterator.first.md)(): [int](language.types.integer.md)

public function [IntlBreakIterator::following](intlbreakiterator.following.md)([int](language.types.integer.md) `$offset`): [int](language.types.integer.md)

public function [IntlBreakIterator::getErrorCode](intlbreakiterator.geterrorcode.md)(): [int](language.types.integer.md)

public function [IntlBreakIterator::getErrorMessage](intlbreakiterator.geterrormessage.md)(): [string](language.types.string.md)

public function [IntlBreakIterator::getLocale](intlbreakiterator.getlocale.md)([int](language.types.integer.md) `$type`): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [IntlBreakIterator::getPartsIterator](intlbreakiterator.getpartsiterator.md)([int](language.types.integer.md) `$type` = **`IntlPartsIterator::KEY_SEQUENTIAL`**): [IntlPartsIterator](class.intlpartsiterator.md)

public function [IntlBreakIterator::getText](intlbreakiterator.gettext.md)(): [?](language.types.null.md)[string](language.types.string.md)

public function [IntlBreakIterator::isBoundary](intlbreakiterator.isboundary.md)([int](language.types.integer.md) `$offset`): [bool](language.types.boolean.md)

public function [IntlBreakIterator::last](intlbreakiterator.last.md)(): [int](language.types.integer.md)

public function [IntlBreakIterator::next](intlbreakiterator.next.md)([?](language.types.null.md)[int](language.types.integer.md) `$offset` = **`null`**): [int](language.types.integer.md)

public function [IntlBreakIterator::preceding](intlbreakiterator.preceding.md)([int](language.types.integer.md) `$offset`): [int](language.types.integer.md)

public function [IntlBreakIterator::previous](intlbreakiterator.previous.md)(): [int](language.types.integer.md)

public function [IntlBreakIterator::setText](intlbreakiterator.settext.md)([string](language.types.string.md) `$text`): [bool](language.types.boolean.md)

}

## Índice

- [IntlRuleBasedBreakIterator::\_\_construct](intlrulebasedbreakiterator.construct.md) — Cria um iterador a partir de um conjunto de regras
- [IntlRuleBasedBreakIterator::getBinaryRules](intlrulebasedbreakiterator.getbinaryrules.md) — Obtém a forma binária de regras compiladas
- [IntlRuleBasedBreakIterator::getRules](intlrulebasedbreakiterator.getrules.md) — Obtém o conjunto de regras usado para criar este objeto
- [IntlRuleBasedBreakIterator::getRuleStatus](intlrulebasedbreakiterator.getrulestatus.md) — Obtém o maior valor de status a partir de regras de quebras que determinaram a posição de quebra atual
- [IntlRuleBasedBreakIterator::getRuleStatusVec](intlrulebasedbreakiterator.getrulestatusvec.md) — Obtém os valores de status das regras de quebra que determinaram a posição de quebra atual

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
