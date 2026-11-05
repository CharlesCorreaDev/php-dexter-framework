# Reverte uma transação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ibase-rollback.php

---

# ibase\_rollback

(PHP 5, PHP 7 < 7.4.0)

ibase\_rollback — Reverte uma transação

### Descrição

function **ibase\_rollback**([resource](language.types.resource.md) `$link_or_trans_identifier` = **`null`**): [bool](language.types.boolean.md)

Reverte uma transação.

### Parâmetros

`link_or_trans_identifier`
:   Se chamada sem um argumento, esta função reverte a transação
    padrão da conexão padrão. Se o argumento for um identificador de conexão,
    a transação padrão da conexão
    correspondente será revertida. Se o argumento for um identificador de transação, a
    transação correspondente será revertida.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

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
