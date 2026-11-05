# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xattr.constants.php

---

# Constantes predefinidas

As constantes abaixo são definidas por esta extensão e
só estarão disponíveis quando a extensão tiver sido compilada no PHP
ou tiver sido carregada dinamicamente em tempo de execução.

**`XATTR_ROOT`** ([int](language.types.integer.md))
:   Edita atributo no namespace do administrador. Requer privilégios de root.

**`XATTR_DONTFOLLOW`** ([int](language.types.integer.md))
:   Não segue o link simbólico mas opera no link em si.

**`XATTR_CREATE`** ([int](language.types.integer.md))
:   Função falhará se o atributo estendido já existir.

**`XATTR_REPLACE`** ([int](language.types.integer.md))
:   Função falhará se atributo estendido não existir.

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
