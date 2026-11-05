# Retorna o número de tokens na lista

> **Fonte / Source:** https://www.php.net/manual/pt_BR/dom-tokenlist.count.php

---

# Dom\TokenList::count

(PHP 8 >= 8.4.0)

Dom\TokenList::count — Retorna o número de tokens na lista

### Descrição

public function **Dom\TokenList::count**(): [int](language.types.integer.md)

Retorna o número de tokens na lista.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O número de tokens na lista.

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
