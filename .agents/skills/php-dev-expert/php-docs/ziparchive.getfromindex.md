# Retorna o conteúdo da entrada usando seu índice

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ziparchive.getfromindex.php

---

# ZipArchive::getFromIndex

(PHP 5 >= 5.2.0, PHP 7, PHP 8, PECL zip >= 1.1.0)

ZipArchive::getFromIndex — Retorna o conteúdo da entrada usando seu índice

### Descrição

public function **ZipArchive::getFromIndex**([int](language.types.integer.md) `$index`, [int](language.types.integer.md) `$len` = 0, [int](language.types.integer.md) `$flags` = 0): [string](language.types.string.md)|[false](language.types.singleton.md)

Retorna o conteúdo da entrada usando seu índice.

### Parâmetros

`index`
:   Índice da entrada

`len`
:   O comprimento a ser lido da entrada. Se `0`, então a
    entrada inteira é lida.

`flags`
:   As opções a serem usadas para abrir o arquivo. Os seguintes valores podem
    ser ORed a ele.

    - **`ZipArchive::FL_UNCHANGED`**
    - **`ZipArchive::FL_COMPRESSED`**

### Valor Retornado

Retorna o conteúdo da entrada em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Obter o conteúdo do arquivo**

```
<?php
$zip = new ZipArchive;
if ($zip->open('test.zip') === TRUE) {
    echo $zip->getFromIndex(2);
    $zip->close();
} else {
    echo 'falha';
}
?>
```

### Veja também

- [ZipArchive::getFromName()](ziparchive.getfromname.md) - Retorna o conteúdo da entrada usando seu nome

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
