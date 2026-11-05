# Constrói um objeto DOMDocumentFragment

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domdocumentfragment.construct.php

---

# DOMDocumentFragment::\_\_construct

(PHP 5, PHP 7, PHP 8)

DOMDocumentFragment::\_\_construct — Constrói um objeto [DOMDocumentFragment](class.domdocumentfragment.md)

### Descrição

public function **DOMDocumentFragment::\_\_construct**()

### Parâmetros

Esta função não possui parâmetros.

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
