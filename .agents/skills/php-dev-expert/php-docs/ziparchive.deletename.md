# Exclui uma entrada no arquivo usando seu nome

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ziparchive.deletename.php

---

# ZipArchive::deleteName

(PHP 5 >= 5.2.0, PHP 7, PHP 8, PECL zip >= 1.5.0)

ZipArchive::deleteName — Exclui uma entrada no arquivo usando seu nome

### Descrição

public function **ZipArchive::deleteName**([string](language.types.string.md) `$name`): [bool](language.types.boolean.md)

Exclui uma entrada no arquivo usando seu nome.

### Parâmetros

`name`
:   Nome da entrada a ser excluída.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Excluindo um arquivo e diretório de um arquivo, usando nomes**

```
<?php
$zip = new ZipArchive;
if ($zip->open('test1.zip') === TRUE) {
    $zip->deleteName('testfromfile.php');
    $zip->deleteName('testDir/');
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
