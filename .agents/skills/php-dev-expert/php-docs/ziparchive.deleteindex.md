# Exclui uma entrada no arquivo usando seu índice

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ziparchive.deleteindex.php

---

# ZipArchive::deleteIndex

(PHP 5 >= 5.2.0, PHP 7, PHP 8, PECL zip >= 1.5.0)

ZipArchive::deleteIndex — Exclui uma entrada no arquivo usando seu índice

### Descrição

public function **ZipArchive::deleteIndex**([int](language.types.integer.md) `$index`): [bool](language.types.boolean.md)

Exclui uma entrada no arquivo usando seu índice.

### Parâmetros

`index`
:   Índice da entrada a ser excluída.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Excluir arquivo do arquivo usando seu índice**

```
<?php
$zip = new ZipArchive;
if ($zip->open('test.zip') === TRUE) {
    $zip->deleteIndex(2);
    $zip->close();
    echo 'ok';
} else {
    echo 'falha';
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
