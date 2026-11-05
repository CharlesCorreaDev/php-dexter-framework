# A classe IntlPartsIterator

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.intlpartsiterator.php

---

# A classe IntlPartsIterator

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

## Introdução

Objetos desta classe podem ser obtidos a partir de objetos
[IntlBreakIterator](class.intlbreakiterator.md). Enquanto os iteradores
de quebra fornecem uma sequência de posições de limites quando iterados,
objetos **IntlPartsIterator** fornecem, por
conveniência, os fragmentos de texto compreendidos entre dois limites
consecutivos.

As chaves podem representar o deslocamento do limite esquerdo, do limite direito, ou
podem ser apenas a sequência de inteiros não negativos. Consulte
[IntlBreakIterator::getPartsIterator()](intlbreakiterator.getpartsiterator.md).

## Resumo da classe

class ****IntlPartsIterator****
extends
[IntlIterator](class.intliterator.md)
{

/\* Constantes \*/

public
const
[int](language.types.integer.md)
[KEY\_SEQUENTIAL](class.intlpartsiterator.md#intlpartsiterator.constants.key-sequential);

public
const
[int](language.types.integer.md)
[KEY\_LEFT](class.intlpartsiterator.md#intlpartsiterator.constants.key-left);

public
const
[int](language.types.integer.md)
[KEY\_RIGHT](class.intlpartsiterator.md#intlpartsiterator.constants.key-right);

/\* Métodos \*/

public function [getBreakIterator](intlpartsiterator.getbreakiterator.md)(): [IntlBreakIterator](class.intlbreakiterator.md)

/\* Métodos herdados \*/

public function [IntlIterator::current](intliterator.current.md)(): [mixed](language.types.mixed.md)

public function [IntlIterator::key](intliterator.key.md)(): [mixed](language.types.mixed.md)

public function [IntlIterator::next](intliterator.next.md)(): [void](language.types.void.md)

public function [IntlIterator::rewind](intliterator.rewind.md)(): [void](language.types.void.md)

public function [IntlIterator::valid](intliterator.valid.md)(): [bool](language.types.boolean.md)

}

## Constantes predefinidas

**`IntlPartsIterator::KEY_SEQUENTIAL`** [int](language.types.integer.md)

**`IntlPartsIterator::KEY_LEFT`** [int](language.types.integer.md)

**`IntlPartsIterator::KEY_RIGHT`** [int](language.types.integer.md)

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | As constantes de classe agora são tipadas. |

## Índice

- [IntlPartsIterator::getBreakIterator](intlpartsiterator.getbreakiterator.md) — Obtém o IntlBreakIterator que é utilizado pelo iterador

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
