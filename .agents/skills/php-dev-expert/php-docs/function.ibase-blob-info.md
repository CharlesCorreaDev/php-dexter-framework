# Retorna o tamanho do blob e outras informações úteis

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ibase-blob-info.php

---

# ibase\_blob\_info

(PHP 5, PHP 7 < 7.4.0)

ibase\_blob\_info — Retorna o tamanho do blob e outras informações úteis

### Descrição

function **ibase\_blob\_info**([resource](language.types.resource.md) `$link_identifier`, [string](language.types.string.md) `$blob_id`): [array](language.types.array.md)

function **ibase\_blob\_info**([string](language.types.string.md) `$blob_id`): [array](language.types.array.md)

Retorna o tamanho do BLOB e outras informações úteis.

### Parâmetros

`link_identifier`
:   Um identificador de conexão InterBase. Se omitido, a última conexão aberta é
    usada.

`blob_id`
:   Um identificador de BLOB.

### Valor Retornado

Retorna um array contendo informações sobre um BLOB. A informação retornada
consiste no tamanho do BLOB, o número de seguimentos que ele contém, o tamanho
do maior segmento e quando é um BLOB de fluxo ou um BLOB segmentado.

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
