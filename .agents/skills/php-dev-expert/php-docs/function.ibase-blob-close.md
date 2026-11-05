# Fecha blob

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ibase-blob-close.php

---

# ibase\_blob\_close

(PHP 5, PHP 7 < 7.4.0)

ibase\_blob\_close — Fecha blob

### Descrição

function **ibase\_blob\_close**([resource](language.types.resource.md) `$blob_handle`): [mixed](language.types.mixed.md)

Esta função fecha um BLOB que foi aberto para leitura por
[ibase\_blob\_open()](function.ibase-blob-open.md) ou foi aberto para escrita por
[ibase\_blob\_create()](function.ibase-blob-create.md).

### Parâmetros

`blob_handle`
:   Um identificador de BLOB aberto com [ibase\_blob\_create()](function.ibase-blob-create.md) ou
    [ibase\_blob\_open()](function.ibase-blob-open.md).

### Valor Retornado

Se o BLOB estava sendo lido, esta função retorna **`true`** em caso de sucesso, se
o BLOB estava sendo escrito, esta função retorna uma string contendo
o id do BLOB que foi atribuído a ele pelo banco de dados. Em caso de falha, esta
função retorna **`false`**.

### Veja também

- [ibase\_blob\_cancel()](function.ibase-blob-cancel.md) - Cancela a criação de blob
- [ibase\_blob\_open()](function.ibase-blob-open.md) - Abre um blob para obter partes de dados

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
