# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/enchant.constants.php

---

# Constantes predefinidas

**`LIBENCHANT_VERSION`** ([string](language.types.string.md))
:   A versão do libenchant.
    Disponível a partir do PHP 8.0.0.

**`ENCHANT_MYSPELL`** ([int](language.types.integer.md))
:   Tipo de dicionário para MySpell. Usado com
    [enchant\_broker\_get\_dict\_path()](function.enchant-broker-get-dict-path.md) e
    [enchant\_broker\_set\_dict\_path()](function.enchant-broker-set-dict-path.md).
    Descontinuado a partir do PHP 8.0.0.

**`ENCHANT_ISPELL`** ([int](language.types.integer.md))
:   Tipo de dicionário para Ispell. Usado com
    [enchant\_broker\_get\_dict\_path()](function.enchant-broker-get-dict-path.md) e
    [enchant\_broker\_set\_dict\_path()](function.enchant-broker-set-dict-path.md).
    Descontinuado a partir do PHP 8.0.0.

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
