# Adiciona dados em um blob recém criado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ibase-blob-add.php

---

# ibase\_blob\_add

(PHP 5, PHP 7 < 7.4.0)

ibase\_blob\_add — Adiciona dados em um blob recém criado

### Descrição

function **ibase\_blob\_add**([resource](language.types.resource.md) `$blob_handle`, [string](language.types.string.md) `$data`): [void](language.types.void.md)

**ibase\_blob\_add()** adiciona dados em um blob
criado com [ibase\_blob\_create()](function.ibase-blob-create.md).

### Parâmetros

`blob_handle`
:   Um manipulador blob aberto com [ibase\_blob\_create()](function.ibase-blob-create.md).

`data`
:   A informação a ser adicionada.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [ibase\_blob\_cancel()](function.ibase-blob-cancel.md) - Cancela a criação de blob
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
