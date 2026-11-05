# Dependências

> **Fonte / Source:** https://www.php.net/manual/pt_BR/dom.requirements.php

---

## Dependências

Esta extensão requer a extensão PHP [libxml](book.libxml.md).
Isso significa que ao compilar o PHP é preciso passar a flag de configuração **--with-libxml**,
ou antes do PHP 7.4, **--enable-libxml**,
embora isso seja feito implicitamente pois a libxml
está habilitada por padrão.

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
