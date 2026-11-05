# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/dir.constants.php

---

# Constantes predefinidas

**`DIRECTORY_SEPARATOR`** ([string](language.types.string.md))

**`PATH_SEPARATOR`** ([string](language.types.string.md))
:   Ponto-e-vírgula no Windows, dois-pontos nos demais.

**`SCANDIR_SORT_ASCENDING`** ([int](language.types.integer.md))

**`SCANDIR_SORT_DESCENDING`** ([int](language.types.integer.md))

**`SCANDIR_SORT_NONE`** ([int](language.types.integer.md))

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
