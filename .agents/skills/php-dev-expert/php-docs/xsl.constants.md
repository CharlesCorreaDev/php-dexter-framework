# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xsl.constants.php

---

# Constantes predefinidas

As constantes abaixo são definidas por esta extensão e
só estarão disponíveis quando a extensão tiver sido compilada no PHP
ou tiver sido carregada dinamicamente em tempo de execução.

**`XSL_CLONE_AUTO`** ([int](language.types.integer.md))

**`XSL_CLONE_NEVER`** ([int](language.types.integer.md))

**`XSL_CLONE_ALWAYS`** ([int](language.types.integer.md))

**`LIBXSLT_VERSION`** ([int](language.types.integer.md))
:   Versão da libxslt como 10117.

**`LIBXSLT_DOTTED_VERSION`** ([string](language.types.string.md))
:   Versão da libxslt como 1.1.17.

**`LIBEXSLT_VERSION`** ([int](language.types.integer.md))
:   Versão da libexslt como 813.

**`LIBEXSLT_DOTTED_VERSION`** ([string](language.types.string.md))
:   Versão da libexslt com 1.1.17.

**`XSL_SECPREF_NONE`** ([int](language.types.integer.md))
:   Desativa todas as restrições de segurança.

**`XSL_SECPREF_READ_FILE`** ([int](language.types.integer.md))
:   Não permite a leitura de arquivos.

**`XSL_SECPREF_WRITE_FILE`** ([int](language.types.integer.md))
:   Não permite gravação de arquivos.

**`XSL_SECPREF_CREATE_DIRECTORY`** ([int](language.types.integer.md))
:   Não permite a criação de diretórios.

**`XSL_SECPREF_READ_NETWORK`** ([int](language.types.integer.md))
:   Não permite a leitura de arquivos de rede.

**`XSL_SECPREF_WRITE_NETWORK`** ([int](language.types.integer.md))
:   Não permite a gravação de arquivos de rede.

**`XSL_SECPREF_DEFAULT`** ([int](language.types.integer.md))
:   Proíbe todo acesso de gravação, ou seja, uma máscara de bits de
    **`XSL_SECPREF_WRITE_NETWORK`** |
    **`XSL_SECPREF_CREATE_DIRECTORY`** |
    **`XSL_SECPREF_WRITE_FILE`**.

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
