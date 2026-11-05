# Prepara uma consulta para ligação de parâmetros e execução posteriores

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ibase-prepare.php

---

# ibase\_prepare

(PHP 5, PHP 7 < 7.4.0)

ibase\_prepare — Prepara uma consulta para ligação de parâmetros e execução posteriores

### Descrição

function **ibase\_prepare**([string](language.types.string.md) `$query`): [resource](language.types.resource.md)

function **ibase\_prepare**([resource](language.types.resource.md) `$link_identifier`, [string](language.types.string.md) `$query`): [resource](language.types.resource.md)

function **ibase\_prepare**([resource](language.types.resource.md) `$link_identifier`, [string](language.types.string.md) `$trans`, [string](language.types.string.md) `$query`): [resource](language.types.resource.md)

Prepara uma consulta para ligação de parâmetros e execução posteriores
(via [ibase\_execute()](function.ibase-execute.md)).

### Parâmetros

`query`
:   Uma consulta InterBase.

`link_identifier`
:   Um identificador de conexão InterBase retornado por
    [ibase\_connect()](function.ibase-connect.md). Se omitido, o identificador da última conexão aberta
    será utilizado.

`trans`
:   Um manipulador de transação InterBase com a qual a consulta deve ser associada.
    Se omitido, a transação padrão da conexão será utilizada.

### Valor Retornado

Retorna o manipulador da consulta preparada, ou **`false`** em caso de erro.

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
