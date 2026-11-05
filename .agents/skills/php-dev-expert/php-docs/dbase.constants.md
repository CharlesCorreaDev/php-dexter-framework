# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/dbase.constants.php

---

# Constantes predefinidas

As constantes abaixo são definidas por esta extensão e
só estarão disponíveis quando a extensão tiver sido compilada no PHP
ou tiver sido carregada dinamicamente em tempo de execução.

**`DBASE_VERSION`** ([string](language.types.string.md))
:   A versão da extensão.
    (Disponível a partir do dbase 7.0.0)

**`DBASE_RDONLY`** ([int](language.types.integer.md))
:   Abre o banco de dados somente para leitura. Usada com [dbase\_open()](function.dbase-open.md).
    (Disponível a partir do dbase 7.0.0)

**`DBASE_RDWR`** ([int](language.types.integer.md))
:   Abre o banco de dados para leitura e escrita. Usada com [dbase\_open()](function.dbase-open.md).
    (Disponível a partir do dbase 7.0.0)

**`DBASE_TYPE_DBASE`** ([int](language.types.integer.md))
:   Cria o banco de dados no estilo dBASE. Usada com [dbase\_create()](function.dbase-create.md).
    (Disponível a partir do dbase 7.0.0)

**`DBASE_TYPE_FOXPRO`** ([int](language.types.integer.md))
:   Cria o banco de dados no estilo FoxPro. Usada com [dbase\_create()](function.dbase-create.md).
    (Disponível a partir do dbase 7.0.0)

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
