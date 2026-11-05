# Dependências

> **Fonte / Source:** https://www.php.net/manual/pt_BR/libxml.requirements.php

---

## Dependências

Esta extensão requer [» libxml](https://gitlab.gnome.org/GNOME/libxml2/-/wikis/home) >=
2.9.4 a partir do PHP 8.4.0, libxml >= 2.9.0 antes do PHP 8.4.0, e libxml >= 2.6.0 antes do PHP 8.0.0.

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
