# Avança o iterador para o próximo limite

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlbreakiterator.next.php

---

# IntlBreakIterator::next

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

IntlBreakIterator::next — Avança o iterador para o próximo limite

### Descrição

public function **IntlBreakIterator::next**([?](language.types.null.md)[int](language.types.integer.md) `$offset` = **`null`**): [int](language.types.integer.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`offset`

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
