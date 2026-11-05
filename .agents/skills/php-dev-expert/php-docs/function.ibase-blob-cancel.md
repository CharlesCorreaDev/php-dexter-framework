# Cancela a criação de blob

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ibase-blob-cancel.php

---

# ibase\_blob\_cancel

(PHP 5, PHP 7 < 7.4.0)

ibase\_blob\_cancel — Cancela a criação de blob

### Descrição

function **ibase\_blob\_cancel**([resource](language.types.resource.md) `$blob_handle`): [bool](language.types.boolean.md)

Esta função descartará um BLOB se ele ainda não tiver sido fechado por
[ibase\_blob\_close()](function.ibase-blob-close.md).

### Parâmetros

`blob_handle`
:   Um identificador BLOB aberto com [ibase\_blob\_create()](function.ibase-blob-create.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [ibase\_blob\_close()](function.ibase-blob-close.md) - Fecha blob
- [ibase\_blob\_create()](function.ibase-blob-create.md) - Cria um novo blob para adicionar dados
- [ibase\_blob\_import()](function.ibase-blob-import.md) - Cria um blob, copia um arquivo para ele e o fecha

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
