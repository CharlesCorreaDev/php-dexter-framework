# Constantes de posix_access

> **Fonte / Source:** https://www.php.net/manual/pt_BR/posix.constants.access.php

---

## Constantes de [posix\_access()](function.posix-access.md)

> **Nota**:
>
> Observe que algumas dessas constantes podem não estar disponíveis em todos os sistemas.

**`POSIX_F_OK`** ([int](language.types.integer.md))
:   Verifica se o arquivo existe.

**`POSIX_R_OK`** ([int](language.types.integer.md))
:   Verifica se o arquivo existe e tem permissões de leitura.

**`POSIX_W_OK`** ([int](language.types.integer.md))
:   Verifica se o arquivo existe e tem permissões de escrita.

**`POSIX_X_OK`** ([int](language.types.integer.md))
:   Verifica se o arquivo existe e tem permissões de execução.

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
