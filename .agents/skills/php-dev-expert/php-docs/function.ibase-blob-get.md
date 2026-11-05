# Retorna uma quantidade especificada de bytes de dados de um blob aberto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ibase-blob-get.php

---

# ibase\_blob\_get

(PHP 5, PHP 7 < 7.4.0)

ibase\_blob\_get — Retorna uma quantidade especificada de bytes de dados de um blob aberto

### Descrição

function **ibase\_blob\_get**([resource](language.types.resource.md) `$blob_handle`, [int](language.types.integer.md) `$len`): [string](language.types.string.md)

Esta função retorna a quantidade `len` de bytes de um BLOB
que foi aberto para leitura com [ibase\_blob\_open()](function.ibase-blob-open.md).

> **Nota**:
>
> Não é possível ler de um BLOB que não foi aberto para escrita
> por [ibase\_blob\_create()](function.ibase-blob-create.md).

### Parâmetros

`blob_handle`
:   Um manipulador de BLOB aberto com [ibase\_blob\_open()](function.ibase-blob-open.md).

`len`
:   Tamanho da informação retornada.

### Valor Retornado

Retorna no máximo `len` bytes de um BLOB, ou **`false`**
em falha.

### Examples

**Exemplo #1 Exemplo da **ibase\_blob\_get()****

```
<?php
$result    = ibase_query("SELECT blob_value FROM table");
$data      = ibase_fetch_object($result);
$blob_data = ibase_blob_info($data->BLOB_VALUE);
$blob_hndl = ibase_blob_open($data->BLOB_VALUE);
echo         ibase_blob_get($blob_hndl, $blob_data[0]);
?>
```

Enquanto este exemplo não faz muito mais do que um
'ibase\_blob\_echo($data->BLOB\_VALUE)' faria, ele mostra a você como obter a
informação em uma $variavel para você poder manipular como quiser.

### Veja também

- [ibase\_blob\_open()](function.ibase-blob-open.md) - Abre um blob para obter partes de dados
- [ibase\_blob\_close()](function.ibase-blob-close.md) - Fecha blob
- [ibase\_blob\_echo()](function.ibase-blob-echo.md) - Envia o conteúdo do blob para o navegador

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
