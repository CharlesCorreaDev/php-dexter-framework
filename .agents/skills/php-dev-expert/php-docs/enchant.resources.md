# Tipos de Recurso

> **Fonte / Source:** https://www.php.net/manual/pt_BR/enchant.resources.php

---

## Tipos de Recurso

Antes do PHP 8.0.0, havia dois tipos de recursos nesta extensão. O primeiro
é o corretor (gerenciador de backends) e o segundo é para o
dicionário.

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
