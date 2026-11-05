# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf.constants.php

---

# Constantes predefinidas

As constantes abaixo são definidas por esta extensão e
só estarão disponíveis quando a extensão tiver sido compilada no PHP
ou tiver sido carregada dinamicamente em tempo de execução.

**`YAF_VERSION`** ([string](language.types.string.md))

**`YAF_ENVIRON`** ([string](language.types.string.md))

**`YAF_ERR_STARTUP_FAILED`** ([int](language.types.integer.md))

**`YAF_ERR_ROUTE_FAILED`** ([int](language.types.integer.md))

**`YAF_ERR_DISPATCH_FAILED`** ([int](language.types.integer.md))

**`YAF_ERR_AUTOLOAD_FAILED`** ([int](language.types.integer.md))

**`YAF_ERR_NOTFOUND_MODULE`** ([int](language.types.integer.md))

**`YAF_ERR_NOTFOUND_CONTROLLER`** ([int](language.types.integer.md))

**`YAF_ERR_NOTFOUND_ACTION`** ([int](language.types.integer.md))

**`YAF_ERR_NOTFOUND_VIEW`** ([int](language.types.integer.md))

**`YAF_ERR_CALL_FAILED`** ([int](language.types.integer.md))

**`YAF_ERR_TYPE_ERROR`** ([int](language.types.integer.md))

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
