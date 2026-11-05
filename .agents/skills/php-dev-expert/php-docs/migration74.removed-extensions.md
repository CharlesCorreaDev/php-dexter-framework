# Extensões Removidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration74.removed-extensions.php

---

## Extensões Removidas

Estas extensões foram movidas para o PECL e não fazem mais parte da distribuição do PHP.
As versões de pacotes PECL dessas extensões serão criadas
de acordo com a demanda dos usuários.

- [Firebird/Interbase](book.ibase.md)
  - o acesso a um banco de dados baseado em InterBase e/ou Firebird
  ainda está disponível com o driver PDO Firebird.
- [Recode](book.recode.md)
- [WDDX](book.wddx.md)

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
