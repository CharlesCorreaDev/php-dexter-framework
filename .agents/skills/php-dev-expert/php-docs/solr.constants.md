# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solr.constants.php

---

# Constantes predefinidas

As constantes abaixo são definidas por esta extensão e
só estarão disponíveis quando a extensão tiver sido compilada no PHP
ou tiver sido carregada dinamicamente em tempo de execução.

**`SOLR_MAJOR_VERSION`** ([int](language.types.integer.md))

**`SOLR_MINOR_VERSION`** ([int](language.types.integer.md))

**`SOLR_PATCH_VERSION`** ([int](language.types.integer.md))

**`SOLR_EXTENSION_VERSION`** ([string](language.types.string.md))

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
