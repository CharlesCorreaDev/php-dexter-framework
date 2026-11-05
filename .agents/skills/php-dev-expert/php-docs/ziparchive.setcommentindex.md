# Define o comentário de uma entrada definida pelo seu índice

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ziparchive.setcommentindex.php

---

# ZipArchive::setCommentIndex

(PHP 5 >= 5.2.0, PHP 7, PHP 8, PECL zip >= 1.4.0)

ZipArchive::setCommentIndex — Define o comentário de uma entrada definida pelo seu índice

### Descrição

public function **ZipArchive::setCommentIndex**([int](language.types.integer.md) `$index`, [string](language.types.string.md) `$comment`): [bool](language.types.boolean.md)

Define o comentário de uma entrada definida pelo seu índice.

### Parâmetros

`index`
:   Índice da entrada.

`comment`
:   O conteúdo do comentário.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Abrir um arquivo e definir um comentário para uma entrada**

```
<?php
$zip = new ZipArchive;
$res = $zip->open('test.zip');
if ($res === TRUE) {
    $zip->setCommentIndex(2, 'new entry comment');
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
