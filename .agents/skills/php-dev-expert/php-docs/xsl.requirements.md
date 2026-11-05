# Dependências

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xsl.requirements.php

---

## Dependências

Esta extensão requer a extensão PHP [libxml](book.libxml.md).
Isso significa que ao compilar o PHP é preciso passar a flag de configuração **--with-libxml**,
ou antes do PHP 7.4, **--enable-libxml**,
embora isso seja feito implicitamente pois a libxml
está habilitada por padrão.

Esta extensão usa libxslt que pode ser
encontrada em [» https://gitlab.gnome.org/GNOME/libxslt/-/wikis/home](https://gitlab.gnome.org/GNOME/libxslt/-/wikis/home). Versão
da libxslt 1.1.0 ou maior é requerido.

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
