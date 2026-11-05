# Adiciona código javascript para ser executado quando o Acrobat abre o FDF

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fdf-set-on-import-javascript.php

---

# fdf\_set\_on\_import\_javascript

(PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL fdf SVN)

fdf\_set\_on\_import\_javascript — Adiciona código javascript para ser executado quando o Acrobat abre o FDF

### Descrição

function **fdf\_set\_on\_import\_javascript**([resource](language.types.resource.md) `$fdf_document`, [string](language.types.string.md) `$script`, [bool](language.types.boolean.md) `$before_data_import`): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Veja também

- [fdf\_add\_doc\_javascript()](function.fdf-add-doc-javascript.md) - Adiciona código javascript ao documento FDF
- [fdf\_set\_javascript\_action()](function.fdf-set-javascript-action.md) - Define uma ação javascript de um campo

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
