# Chama uma função definida pelo usuário para cada valor do documento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fdf-enum-values.php

---

# fdf\_enum\_values

(PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL fdf SVN)

fdf\_enum\_values — Chama uma função definida pelo usuário para cada valor do documento

### Descrição

function **fdf\_enum\_values**([resource](language.types.resource.md) `$fdf_document`, [callable](language.types.callable.md) `$function`, [mixed](language.types.mixed.md) `$userdata` = ?): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

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
