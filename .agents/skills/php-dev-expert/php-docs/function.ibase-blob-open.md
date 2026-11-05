# Abre um blob para obter partes de dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ibase-blob-open.php

---

# ibase\_blob\_open

(PHP 5, PHP 7 < 7.4.0)

ibase\_blob\_open — Abre um blob para obter partes de dados

### Descrição

function **ibase\_blob\_open**([resource](language.types.resource.md) `$link_identifier`, [string](language.types.string.md) `$blob_id`): [resource](language.types.resource.md)|[false](language.types.singleton.md)

function **ibase\_blob\_open**([string](language.types.string.md) `$blob_id`): [resource](language.types.resource.md)|[false](language.types.singleton.md)

Abre um BLOB existente para leitura.

### Parâmetros

`link_identifier`
:   Um link identificador InterBase. Se omitido, o último link aberto é
    usado.

`blob_id`
:   Um id de BLOB.

### Valor Retornado

Retorna um manipulador de BLOB para uso posterior com
[ibase\_blob\_get()](function.ibase-blob-get.md) ou **`false`** em caso de falha.

### Veja também

- [ibase\_blob\_close()](function.ibase-blob-close.md) - Fecha blob
- [ibase\_blob\_echo()](function.ibase-blob-echo.md) - Envia o conteúdo do blob para o navegador
- [ibase\_blob\_get()](function.ibase-blob-get.md) - Retorna uma quantidade especificada de bytes de dados de um blob aberto

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
