# Define uma opção global de um arquivo ZIP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ziparchive.setarchiveflag.php

---

# ZipArchive::setArchiveFlag

(PHP >= 8.3.0, PECL zip >= 1.22.0)

ZipArchive::setArchiveFlag — Define uma opção global de um arquivo ZIP

### Descrição

public function **ZipArchive::setArchiveFlag**([int](language.types.integer.md) `$flag`, [int](language.types.integer.md) `$value`): [bool](language.types.boolean.md)

Define uma opção global de um arquivo ZIP.

### Parâmetros

`flag`
:   A opção global a ser alterada, entre as constantes `AFL_*`.

    - **`ZipArchive::AFL_WANT_TORRENTZIP`**
    - **`ZipArchive::AFL_CREATE_OR_KEEP_FILE_FOR_EMPTY_ARCHIVE`**

`value`
:   O novo valor da opção.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Criar um arquivo torrentzip**

```
<?php
$zip = new ZipArchive;
$res = $zip->open('test.zip', ZipArchive::CREATE);
if ($res === TRUE) {
    $zip->setArchiveFlag(ZipArchive::AFL_WANT_TORRENTZIP, 1);
    $zip->addFromString('test.txt', 'file content goes here');
    $zip->close();
    echo 'ok';
} else {
    echo 'falha';
}
?>
```

### Veja também

- [ZipArchive::getArchiveFlag()](ziparchive.getarchiveflag.md) - Retorna o valor de uma opção global do arquivo Zip

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
