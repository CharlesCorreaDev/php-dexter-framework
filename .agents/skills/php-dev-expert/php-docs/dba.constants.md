# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/dba.constants.php

---

# Constantes predefinidas

As constantes abaixo são definidas por esta extensão e
só estarão disponíveis quando a extensão tiver sido compilada no PHP
ou tiver sido carregada dinamicamente em tempo de execução.

**`DBA_LMDB_USE_SUB_DIR`** ([int](language.types.integer.md))
:   Opção do Driver LMDB para permitir a criação de um subdiretório para os arquivos do banco de dados.
    Disponível a partir do PHP 8.2.0.

**`DBA_LMDB_NO_SUB_DIR`** ([int](language.types.integer.md))
:   Opção do driver LMDB para não permitir a criação de um subdiretório para os arquivos do banco de dados.
    Disponível a partir do PHP 8.2.0.

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
