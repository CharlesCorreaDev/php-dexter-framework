# Confirma uma transação sem fechá-la

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ibase-commit-ret.php

---

# ibase\_commit\_ret

(PHP 5, PHP 7 < 7.4.0)

ibase\_commit\_ret — Confirma uma transação sem fechá-la

### Descrição

function **ibase\_commit\_ret**([resource](language.types.resource.md) `$link_or_trans_identifier` = **`null`**): [bool](language.types.boolean.md)

Confirma uma transação sem fechá-la.

### Parâmetros

`link_or_trans_identifier`
:   Se chamada sem um argumento, esta função confirma a transação
    padrão da conexão padrão. Se o argumento for um identificador de conexão,
    a transação padrão da conexão
    correspondente será confirmada. Se o argumento for um identificador de transação, a
    transação correspondente será confirmada. O contexto da transação
    será retido, então as instruções executadas de dentro desta transação
    não serão invalidadas.

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
