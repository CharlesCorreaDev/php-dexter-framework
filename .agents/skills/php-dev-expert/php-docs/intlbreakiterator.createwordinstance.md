# Cria um iterador de quebra para separação de palavras

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlbreakiterator.createwordinstance.php

---

# IntlBreakIterator::createWordInstance

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

IntlBreakIterator::createWordInstance — Cria um iterador de quebra para separação de palavras

### Descrição

public static function **IntlBreakIterator::createWordInstance**([?](language.types.null.md)[string](language.types.string.md) `$locale` = **`null`**): [?](language.types.null.md)[IntlBreakIterator](class.intlbreakiterator.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`locale`

### Valor Retornado

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
