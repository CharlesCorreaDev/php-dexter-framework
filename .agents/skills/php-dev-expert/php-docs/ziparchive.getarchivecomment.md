# Retorna o comentário do arquivo Zip

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ziparchive.getarchivecomment.php

---

# ZipArchive::getArchiveComment

(PHP 5 >= 5.2.0, PHP 7, PHP 8, PECL zip >= 1.1.0)

ZipArchive::getArchiveComment — Retorna o comentário do arquivo Zip

### Descrição

public function **ZipArchive::getArchiveComment**([int](language.types.integer.md) `$flags` = 0): [string](language.types.string.md)|[false](language.types.singleton.md)

Retorna o comentário do arquivo Zip.

### Parâmetros

`flags`
:   Se a opção estiver definida como **`ZipArchive::FL_UNCHANGED`**, o comentário original e não alterado
    é retornado.

### Valor Retornado

Retorna o comentário do arquivo Zip ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Imprimir um comentário de arquivo**

```
<?php
$zip = new ZipArchive;
$res = $zip->open('test_with_comment.zip');
if ($res === TRUE) {
    var_dump($zip->getArchiveComment());
    /* Ou usando a propriedade do arquivo */
    var_dump($zip->comment);
} else {
    echo 'falha, código:' . $res;
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
