# Obtém o texto sendo percorrido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlbreakiterator.gettext.php

---

# IntlBreakIterator::getText

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

IntlBreakIterator::getText — Obtém o texto sendo percorrido

### Descrição

public function **IntlBreakIterator::getText**(): [?](language.types.null.md)[string](language.types.string.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

Esta função não possui parâmetros.

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
