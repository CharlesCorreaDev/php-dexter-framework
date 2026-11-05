# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xdiff.constants.php

---

# Constantes predefinidas

As constantes abaixo são definidas por esta extensão e
só estarão disponíveis quando a extensão tiver sido compilada no PHP
ou tiver sido carregada dinamicamente em tempo de execução.

**`XDIFF_PATCH_NORMAL`** ([int](language.types.integer.md))
:   Este sinalizador indica que as funções [xdiff\_string\_patch()](function.xdiff-string-patch.md) e
    [xdiff\_file\_patch()](function.xdiff-file-patch.md) devem criar um resultado
    aplicando o patch ao conteúdo original, criando assim uma versão mais recente do arquivo. Este é o modo
    de operação padrão.

**`XDIFF_PATCH_REVERSE`** ([int](language.types.integer.md))
:   Este sinalizador indica que as funções [xdiff\_string\_patch()](function.xdiff-string-patch.md) e
    [xdiff\_file\_patch()](function.xdiff-file-patch.md) devem criar resultados
    revertendo o patch alterado do conteúdo mais recente, criando assim a versão original.

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
