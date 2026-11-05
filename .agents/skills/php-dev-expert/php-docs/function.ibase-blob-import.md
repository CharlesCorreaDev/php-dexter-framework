# Cria um blob, copia um arquivo para ele e o fecha

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ibase-blob-import.php

---

# ibase\_blob\_import

(PHP 5, PHP 7 < 7.4.0)

ibase\_blob\_import — Cria um blob, copia um arquivo para ele e o fecha

### Descrição

function **ibase\_blob\_import**([resource](language.types.resource.md) `$link_identifier`, [resource](language.types.resource.md) `$file_handle`): [string](language.types.string.md)

function **ibase\_blob\_import**([resource](language.types.resource.md) `$file_handle`): [string](language.types.string.md)

Este função cria um BLOB, lê um arquivo inteiro para dentro dele, fecha, e
retorna o id do BLOB.

### Parâmetros

`link_identifier`
:   Um link identificador InterBase. Se omitido, o último link aberto é
    usado.

`file_handle`
:   O manipulador de arquivo é um manipulador retornado por [fopen()](function.fopen.md).

### Valor Retornado

Retorna o id do BLOB em sucesso, ou **`false`** em erro.

### Examples

**Exemplo #1 Exemplo da **ibase\_blob\_import()****

```
<?php
$dbh = ibase_connect($host, $username, $password);
$filename = '/tmp/bar';

$fd = fopen($filename, 'r');
if ($fd) {

    $blob = ibase_blob_import($dbh, $fd);
    fclose($fd);

    if (!is_string($blob)) {
        // falha na importação
    } else {
        $query = "INSERT INTO foo (name, data) VALUES ('$filename', ?)";
        $prepared = ibase_prepare($dbh, $query);
        if (!ibase_execute($prepared, $blob)) {
            // falha na inserção do registro
        }
    }
} else {
    // não foi possível abrir o arquivo de dados
}
?>
```

### Veja também

- [ibase\_blob\_add()](function.ibase-blob-add.md) - Adiciona dados em um blob recém criado
- [ibase\_blob\_cancel()](function.ibase-blob-cancel.md) - Cancela a criação de blob
- [ibase\_blob\_close()](function.ibase-blob-close.md) - Fecha blob
- [ibase\_blob\_create()](function.ibase-blob-create.md) - Cria um novo blob para adicionar dados

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
