# Cria um novo blob para adicionar dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ibase-blob-create.php

---

# ibase\_blob\_create

(PHP 5, PHP 7 < 7.4.0)

ibase\_blob\_create — Cria um novo blob para adicionar dados

### Descrição

function **ibase\_blob\_create**([resource](language.types.resource.md) `$link_identifier` = **`null`**): [resource](language.types.resource.md)|[false](language.types.singleton.md)

**ibase\_blob\_create()** cria um novo BLOB para preencher com
dados.

### Parâmetros

`link_identifier`
:   Um identificador de conexão do InterBase. Se omitido, a última conexão aberta é
    assumida.

### Valor Retornado

Retorna um identificador BLOB para uso posterior com
[ibase\_blob\_add()](function.ibase-blob-add.md) ou **`false`** em caso de falha.

### Veja também

- [ibase\_blob\_add()](function.ibase-blob-add.md) - Adiciona dados em um blob recém criado
- [ibase\_blob\_cancel()](function.ibase-blob-cancel.md) - Cancela a criação de blob
- [ibase\_blob\_close()](function.ibase-blob-close.md) - Fecha blob
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
