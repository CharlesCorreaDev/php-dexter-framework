# Envia o conteúdo do blob para o navegador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ibase-blob-echo.php

---

# ibase\_blob\_echo

(PHP 5, PHP 7 < 7.4.0)

ibase\_blob\_echo — Envia o conteúdo do blob para o navegador

### Descrição

function **ibase\_blob\_echo**([string](language.types.string.md) `$blob_id`): [bool](language.types.boolean.md)

function **ibase\_blob\_echo**([resource](language.types.resource.md) `$link_identifier`, [string](language.types.string.md) `$blob_id`): [bool](language.types.boolean.md)

Esta função abre um BLOB para leitura e envia seu conteúdo diretamente para
a saída padrão (o navegador, na maioria dos casos).

### Parâmetros

`link_identifier`
:   Um identificador de conexão do InterBase. Se omitido, a última conexão aberta é
    assumida.

`blob_id`

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [ibase\_blob\_open()](function.ibase-blob-open.md) - Abre um blob para obter partes de dados
- [ibase\_blob\_close()](function.ibase-blob-close.md) - Fecha blob
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
