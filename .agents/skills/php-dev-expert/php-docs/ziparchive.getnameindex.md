# Retorna o nome de uma entrada usando seu índice

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ziparchive.getnameindex.php

---

# ZipArchive::getNameIndex

(PHP 5 >= 5.2.0, PHP 7, PHP 8, PECL zip >= 1.5.0)

ZipArchive::getNameIndex — Retorna o nome de uma entrada usando seu índice

### Descrição

public function **ZipArchive::getNameIndex**([int](language.types.integer.md) `$index`, [int](language.types.integer.md) `$flags` = 0): [string](language.types.string.md)|[false](language.types.singleton.md)

Retorna o nome de uma entrada usando seu índice.

### Parâmetros

`index`
:   Índice da entrada.

`flags`
:   Se flags estiver definido como **`ZipArchive::FL_UNCHANGED`**, o nome original inalterado
    é retornado.

### Valor Retornado

Retorna o nome em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **ZipArchive::getNameIndex()****

```
<?php
if ($zip->open('test.zip') == TRUE) {
 for ($i = 0; $i < $zip->numFiles; $i++) {
     $filename = $zip->getNameIndex($i);
     // ...
 }
}
?>
```

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
