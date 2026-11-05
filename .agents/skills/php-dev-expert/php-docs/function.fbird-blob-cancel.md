# Cancela a criação de blob

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fbird-blob-cancel.php

---

# fbird\_blob\_cancel

(PHP 5, PHP 7 < 7.4.0)

fbird\_blob\_cancel — Cancela a criação de blob

### Descrição

function **fbird\_blob\_cancel**([resource](language.types.resource.md) `$blob_handle`): [bool](language.types.boolean.md)

Esta função descartará um BLOB se ele ainda não foi fechado por
[fbird\_blob\_close()](function.fbird-blob-close.md).

### Parâmetros

`blob_handle`
:   Um identificador de BLOB aberto com [fbird\_blob\_create()](function.fbird-blob-create.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [fbird\_blob\_close()](function.fbird-blob-close.md) - Sinônimo de ibase\_blob\_close
- [fbird\_blob\_create()](function.fbird-blob-create.md) - Sinônimo de ibase\_blob\_create
- [fbird\_blob\_import()](function.fbird-blob-import.md) - Sinônimo de ibase\_blob\_import

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
