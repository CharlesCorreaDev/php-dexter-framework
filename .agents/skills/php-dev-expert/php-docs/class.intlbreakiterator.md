# A classe IntlBreakIterator

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.intlbreakiterator.php

---

# A classe IntlBreakIterator

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

## Introdução

Um “iterador de quebra” é um objeto ICU que expõe métodos para localização
de limites no texto (ex.: início/fim de palavras ou frases).
A classe **IntlBreakIterator** do PHP serve como classe base
para todos os tipos de iteradores de quebra ICU. Onde existir funcionalidade
extra, a extensão Intl pode expor o iterador de quebra ICU com
subclasses convenientes, como
[IntlRuleBasedBreakIterator](class.intlrulebasedbreakiterator.md) ou
[IntlCodePointBreakIterator](class.intlcodepointbreakiterator.md).

Esta classe implementa a interface [IteratorAggregate](class.iteratoraggregate.md). Percorrer um
**IntlBreakIterator** produz valores inteiros
não negativos que representam as localizações sucessivas dos limites do texto,
expressos como contagem de unidades de código (bytes) UTF-8, tomadas do início do
texto (que tem a localização `0`). As chaves geradas
pelo iterador formam simplesmente a sequência de números naturais
`{0, 1, 2, …}`.

## Resumo da classe

class ****IntlBreakIterator****
implements
[IteratorAggregate](class.iteratoraggregate.md) {

/\* Constantes \*/

public
const
[int](language.types.integer.md)
[DONE](class.intlbreakiterator.md#intlbreakiterator.constants.done);

public
const
[int](language.types.integer.md)
[WORD\_NONE](class.intlbreakiterator.md#intlbreakiterator.constants.word-none);

public
const
[int](language.types.integer.md)
[WORD\_NONE\_LIMIT](class.intlbreakiterator.md#intlbreakiterator.constants.word-none-limit);

public
const
[int](language.types.integer.md)
[WORD\_NUMBER](class.intlbreakiterator.md#intlbreakiterator.constants.word-number);

public
const
[int](language.types.integer.md)
[WORD\_NUMBER\_LIMIT](class.intlbreakiterator.md#intlbreakiterator.constants.word-number-limit);

public
const
[int](language.types.integer.md)
[WORD\_LETTER](class.intlbreakiterator.md#intlbreakiterator.constants.word-letter);

public
const
[int](language.types.integer.md)
[WORD\_LETTER\_LIMIT](class.intlbreakiterator.md#intlbreakiterator.constants.word-letter-limit);

public
const
[int](language.types.integer.md)
[WORD\_KANA](class.intlbreakiterator.md#intlbreakiterator.constants.word-kana);

public
const
[int](language.types.integer.md)
[WORD\_KANA\_LIMIT](class.intlbreakiterator.md#intlbreakiterator.constants.word-kana-limit);

public
const
[int](language.types.integer.md)
[WORD\_IDEO](class.intlbreakiterator.md#intlbreakiterator.constants.word-ideo);

public
const
[int](language.types.integer.md)
[WORD\_IDEO\_LIMIT](class.intlbreakiterator.md#intlbreakiterator.constants.word-ideo-limit);

public
const
[int](language.types.integer.md)
[LINE\_SOFT](class.intlbreakiterator.md#intlbreakiterator.constants.line-soft);

public
const
[int](language.types.integer.md)
[LINE\_SOFT\_LIMIT](class.intlbreakiterator.md#intlbreakiterator.constants.line-soft-limit);

public
const
[int](language.types.integer.md)
[LINE\_HARD](class.intlbreakiterator.md#intlbreakiterator.constants.line-hard);

public
const
[int](language.types.integer.md)
[LINE\_HARD\_LIMIT](class.intlbreakiterator.md#intlbreakiterator.constants.line-hard-limit);

public
const
[int](language.types.integer.md)
[SENTENCE\_TERM](class.intlbreakiterator.md#intlbreakiterator.constants.sentence-term);

public
const
[int](language.types.integer.md)
[SENTENCE\_TERM\_LIMIT](class.intlbreakiterator.md#intlbreakiterator.constants.sentence-term-limit);

public
const
[int](language.types.integer.md)
[SENTENCE\_SEP](class.intlbreakiterator.md#intlbreakiterator.constants.sentence-sep);

public
const
[int](language.types.integer.md)
[SENTENCE\_SEP\_LIMIT](class.intlbreakiterator.md#intlbreakiterator.constants.sentence-sep-limit);

/\* Métodos \*/

private function [\_\_construct](intlbreakiterator.construct.md)()

public static function [createCharacterInstance](intlbreakiterator.createcharacterinstance.md)([?](language.types.null.md)[string](language.types.string.md) `$locale` = **`null`**): [?](language.types.null.md)[IntlBreakIterator](class.intlbreakiterator.md)

public static function [createCodePointInstance](intlbreakiterator.createcodepointinstance.md)(): [IntlCodePointBreakIterator](class.intlcodepointbreakiterator.md)

public static function [createLineInstance](intlbreakiterator.createlineinstance.md)([?](language.types.null.md)[string](language.types.string.md) `$locale` = **`null`**): [?](language.types.null.md)[IntlBreakIterator](class.intlbreakiterator.md)

public static function [createSentenceInstance](intlbreakiterator.createsentenceinstance.md)([?](language.types.null.md)[string](language.types.string.md) `$locale` = **`null`**): [?](language.types.null.md)[IntlBreakIterator](class.intlbreakiterator.md)

public static function [createTitleInstance](intlbreakiterator.createtitleinstance.md)([?](language.types.null.md)[string](language.types.string.md) `$locale` = **`null`**): [?](language.types.null.md)[IntlBreakIterator](class.intlbreakiterator.md)

public static function [createWordInstance](intlbreakiterator.createwordinstance.md)([?](language.types.null.md)[string](language.types.string.md) `$locale` = **`null`**): [?](language.types.null.md)[IntlBreakIterator](class.intlbreakiterator.md)

public function [current](intlbreakiterator.current.md)(): [int](language.types.integer.md)

public function [first](intlbreakiterator.first.md)(): [int](language.types.integer.md)

public function [following](intlbreakiterator.following.md)([int](language.types.integer.md) `$offset`): [int](language.types.integer.md)

public function [getErrorCode](intlbreakiterator.geterrorcode.md)(): [int](language.types.integer.md)

public function [getErrorMessage](intlbreakiterator.geterrormessage.md)(): [string](language.types.string.md)

public function [getLocale](intlbreakiterator.getlocale.md)([int](language.types.integer.md) `$type`): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [getPartsIterator](intlbreakiterator.getpartsiterator.md)([int](language.types.integer.md) `$type` = **`IntlPartsIterator::KEY_SEQUENTIAL`**): [IntlPartsIterator](class.intlpartsiterator.md)

public function [getText](intlbreakiterator.gettext.md)(): [?](language.types.null.md)[string](language.types.string.md)

public function [isBoundary](intlbreakiterator.isboundary.md)([int](language.types.integer.md) `$offset`): [bool](language.types.boolean.md)

public function [last](intlbreakiterator.last.md)(): [int](language.types.integer.md)

public function [next](intlbreakiterator.next.md)([?](language.types.null.md)[int](language.types.integer.md) `$offset` = **`null`**): [int](language.types.integer.md)

public function [preceding](intlbreakiterator.preceding.md)([int](language.types.integer.md) `$offset`): [int](language.types.integer.md)

public function [previous](intlbreakiterator.previous.md)(): [int](language.types.integer.md)

public function [setText](intlbreakiterator.settext.md)([string](language.types.string.md) `$text`): [bool](language.types.boolean.md)

}

## Constantes predefinidas

**`IntlBreakIterator::DONE`** [int](language.types.integer.md)

**`IntlBreakIterator::WORD_NONE`** [int](language.types.integer.md)

**`IntlBreakIterator::WORD_NONE_LIMIT`** [int](language.types.integer.md)

**`IntlBreakIterator::WORD_NUMBER`** [int](language.types.integer.md)

**`IntlBreakIterator::WORD_NUMBER_LIMIT`** [int](language.types.integer.md)

**`IntlBreakIterator::WORD_LETTER`** [int](language.types.integer.md)

**`IntlBreakIterator::WORD_LETTER_LIMIT`** [int](language.types.integer.md)

**`IntlBreakIterator::WORD_KANA`** [int](language.types.integer.md)

**`IntlBreakIterator::WORD_KANA_LIMIT`** [int](language.types.integer.md)

**`IntlBreakIterator::WORD_IDEO`** [int](language.types.integer.md)

**`IntlBreakIterator::WORD_IDEO_LIMIT`** [int](language.types.integer.md)

**`IntlBreakIterator::LINE_SOFT`** [int](language.types.integer.md)

**`IntlBreakIterator::LINE_SOFT_LIMIT`** [int](language.types.integer.md)

**`IntlBreakIterator::LINE_HARD`** [int](language.types.integer.md)

**`IntlBreakIterator::LINE_HARD_LIMIT`** [int](language.types.integer.md)

**`IntlBreakIterator::SENTENCE_TERM`** [int](language.types.integer.md)

**`IntlBreakIterator::SENTENCE_TERM_LIMIT`** [int](language.types.integer.md)

**`IntlBreakIterator::SENTENCE_SEP`** [int](language.types.integer.md)

**`IntlBreakIterator::SENTENCE_SEP_LIMIT`** [int](language.types.integer.md)

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | As constantes de classe agora são tipadas. |
| 8.0.0 | **IntlBreakIterator** agora implementa [IteratorAggregate](class.iteratoraggregate.md). Anteriormente, [Traversable](class.traversable.md) era implementado. |

## Índice

- [IntlBreakIterator::\_\_construct](intlbreakiterator.construct.md) — Construtor privado para não permitir instanciação
- [IntlBreakIterator::createCharacterInstance](intlbreakiterator.createcharacterinstance.md) — Cria um iterador de quebra para limites de sequências de combinação de caracteres
- [IntlBreakIterator::createCodePointInstance](intlbreakiterator.createcodepointinstance.md) — Cria um iterador de quebra para limites de pontos de código
- [IntlBreakIterator::createLineInstance](intlbreakiterator.createlineinstance.md) — Cria um iterador de quebra para quebras de linha logicamente possíveis
- [IntlBreakIterator::createSentenceInstance](intlbreakiterator.createsentenceinstance.md) — Cria um iterador de quebra para separação de sentenças
- [IntlBreakIterator::createTitleInstance](intlbreakiterator.createtitleinstance.md) — Cria um iterador para quebras de letras de título
- [IntlBreakIterator::createWordInstance](intlbreakiterator.createwordinstance.md) — Cria um iterador de quebra para separação de palavras
- [IntlBreakIterator::current](intlbreakiterator.current.md) — Obtém o índice da posição atual
- [IntlBreakIterator::first](intlbreakiterator.first.md) — Define a posição para o primeiro caractere no texto
- [IntlBreakIterator::following](intlbreakiterator.following.md) — Avança o iterador para o primeiro limite após o deslocamento especificado
- [IntlBreakIterator::getErrorCode](intlbreakiterator.geterrorcode.md) — Obtém o último código de erro no objeto
- [IntlBreakIterator::getErrorMessage](intlbreakiterator.geterrormessage.md) — Obtém a última mensagem de erro no objeto
- [IntlBreakIterator::getLocale](intlbreakiterator.getlocale.md) — Obtém a localidade associada com o objeto
- [IntlBreakIterator::getPartsIterator](intlbreakiterator.getpartsiterator.md) — Cria um iterador para navegar por fragmentos entre limites
- [IntlBreakIterator::getText](intlbreakiterator.gettext.md) — Obtém o texto sendo percorrido
- [IntlBreakIterator::isBoundary](intlbreakiterator.isboundary.md) — Indica se uma posição é um posição de limite
- [IntlBreakIterator::last](intlbreakiterator.last.md) — Define a posição do iterador para um índice além do último caractere
- [IntlBreakIterator::next](intlbreakiterator.next.md) — Avança o iterador para o próximo limite
- [IntlBreakIterator::preceding](intlbreakiterator.preceding.md) — Define a posição do iterador para o primeiro limite depois de um deslocamento
- [IntlBreakIterator::previous](intlbreakiterator.previous.md) — Define a posição do iterador para o limite imediatamente anterior ao atual
- [IntlBreakIterator::setText](intlbreakiterator.settext.md) — Define o texto a ser percorrido

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
