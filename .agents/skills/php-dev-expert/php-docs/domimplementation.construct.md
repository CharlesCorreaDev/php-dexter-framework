# Cria um novo objeto DOMImplementation

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domimplementation.construct.php

---

# DOMImplementation::\_\_construct

(PHP 5, PHP 7)

DOMImplementation::\_\_construct — 
Cria um novo objeto DOMImplementation

### Descrição

function **DOMImplementation::\_\_construct**()

Cria um novo objeto [DOMImplementation](class.domimplementation.md).

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
