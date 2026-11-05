# Retorna o valor de uma opção global do arquivo Zip

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ziparchive.getarchiveflag.php

---

# ZipArchive::getArchiveFlag

(PHP >= 8.3.0, PECL zip >= 1.22.0)

ZipArchive::getArchiveFlag — Retorna o valor de uma opção global do arquivo Zip

### Descrição

public function **ZipArchive::getArchiveFlag**([int](language.types.integer.md) `$flag`, [int](language.types.integer.md) `$flags` = 0): [int](language.types.integer.md)

Retorna o valor de uma opção global do arquivo Zip.

### Parâmetros

`flag`
:   A opção global a ser recuperada, entre as constantes `AFL_*`:

    - **`ZipArchive::AFL_RDONLY`**
    - **`ZipArchive::AFL_IS_TORRENTZIP`**
    - **`ZipArchive::AFL_WANT_TORRENTZIP`**
    - **`ZipArchive::AFL_CREATE_OR_KEEP_FILE_FOR_EMPTY_ARCHIVE`**

`flags`
:   Se o parâmetro `flags` estiver definido como **`ZipArchive::FL_UNCHANGED`**,
    a opção original inalterada é retornada.

### Valor Retornado

Retorna 1 se a opção estiver definida para o arquivo, 0 se não estiver, e -1 se ocorrer um erro.

### Examples

**Exemplo #1 Testar se o arquivo é um formato torrentzip**

```
<?php

$zip = new ZipArchive();
$res = $zip->open('test.zip');

if ($res === true) {
    var_dump($zip->getArchiveFlag(ZipArchive::AFL_IS_TORRENTZIP));
} else {
    echo 'falha, código: ' . $res;
}

?>
```

### Veja também

- [ZipArchive::setArchiveFlag()](ziparchive.setarchiveflag.md) - Define uma opção global de um arquivo ZIP

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
