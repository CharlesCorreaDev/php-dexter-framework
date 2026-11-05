# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/session.constants.php

---

# Constantes predefinidas

As constantes abaixo são definidas por esta extensão e
só estarão disponíveis quando a extensão tiver sido compilada no PHP
ou tiver sido carregada dinamicamente em tempo de execução.

**`SID`** ([string](language.types.string.md))
:   Constante contendo nome da sessão e id da sessão na
    forma de `"name=ID"` ou string vazia
    se o ID da sessão foi definido em um apropriado cookie de sessão. Este é
    o mesmo id que é retornado por [session\_id()](function.session-id.md).

    **Aviso**

    Esta constante foi descontinuada a partir do PHP 8.4.0.

**`PHP_SESSION_DISABLED`** ([int](language.types.integer.md))
:   Retorna o valor de [session\_status()](function.session-status.md) se as sessões estiverem desabilitadas.

**`PHP_SESSION_NONE`** ([int](language.types.integer.md))
:   Retorna o valor de [session\_status()](function.session-status.md) se as sessões estiverem habilitadas,
    mas nenhuma sessão existir.

**`PHP_SESSION_ACTIVE`** ([int](language.types.integer.md))
:   Retorna o valor de [session\_status()](function.session-status.md) se as sessões estiverem habilitadas,
    e uma sessão existir.

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
