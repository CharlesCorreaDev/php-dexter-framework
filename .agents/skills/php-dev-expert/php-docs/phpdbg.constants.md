# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/phpdbg.constants.php

---

# Constantes predefinidas

As constantes abaixo são definidas por esta extensão e
só estarão disponíveis quando a extensão tiver sido compilada no PHP
ou tiver sido carregada dinamicamente em tempo de execução.

**`PHPDBG_VERSION`** ([string](language.types.string.md))

**`PHPDBG_FILE`** ([int](language.types.integer.md))
:   Removido a partir do PHP 7.3.0.

**`PHPDBG_METHOD`** ([int](language.types.integer.md))
:   Removido a partir do PHP 7.3.0.

**`PHPDBG_LINENO`** ([int](language.types.integer.md))
:   Removido a partir do PHP 7.3.0.

**`PHPDBG_FUNC`** ([int](language.types.integer.md))
:   Removido a partir do PHP 7.3.0.

**`PHPDBG_COLOR_PROMPT`** ([int](language.types.integer.md))

**`PHPDBG_COLOR_NOTICE`** ([int](language.types.integer.md))

**`PHPDBG_COLOR_ERROR`** ([int](language.types.integer.md))

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
