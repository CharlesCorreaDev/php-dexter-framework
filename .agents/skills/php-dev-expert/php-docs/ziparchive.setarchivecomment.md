# Define o comentário de um arquivo ZIP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ziparchive.setarchivecomment.php

---

# ZipArchive::setArchiveComment

(PHP 5 >= 5.2.0, PHP 7, PHP 8, PECL zip >= 1.4.0)

ZipArchive::setArchiveComment — Define o comentário de um arquivo ZIP

### Descrição

public function **ZipArchive::setArchiveComment**([string](language.types.string.md) `$comment`): [bool](language.types.boolean.md)

Define o comentário de um arquivo ZIP.

### Parâmetros

`comment`
:   O conteúdo do comentário.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Criar um arquivo e definir um comentário**

```
<?php
$zip = new ZipArchive;
$res = $zip->open('test.zip', ZipArchive::CREATE);
if ($res === TRUE) {
    $zip->addFromString('test.txt', 'file content goes here');
    $zip->setArchiveComment('new archive comment');
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
