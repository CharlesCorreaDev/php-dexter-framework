# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/expect.constants.php

---

# Constantes predefinidas

As constantes abaixo são definidas por esta extensão e
só estarão disponíveis quando a extensão tiver sido compilada no PHP
ou tiver sido carregada dinamicamente em tempo de execução.

**`EXP_GLOB`** ([int](language.types.integer.md))
:   Indica que o padrão é uma string no estilo GLOB.

**`EXP_EXACT`** ([int](language.types.integer.md))
:   Indica que o padrão é uma string exata.

**`EXP_REGEXP`** ([int](language.types.integer.md))
:   Indica que o padrão é uma string no estilo de expressão regular.

**`EXP_EOF`** ([int](language.types.integer.md))
:   Valor retornado por [expect\_expectl()](function.expect-expectl.md), quando o EOF é
    atingido.

**`EXP_TIMEOUT`** ([int](language.types.integer.md))
:   Valor retornado por [expect\_expectl()](function.expect-expectl.md) após o tempo limite em
    segundos, especificado no valor de [expect.timeout](expect.configuration.md#ini.expect.timeout)

**`EXP_FULLBUFFER`** ([int](language.types.integer.md))
:   Valor retornado por [expect\_expectl()](function.expect-expectl.md) se nenhum padrão tiver sido
    correspondido.

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
