# Retorna o comentário de uma entrada usando o nome da entrada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ziparchive.getcommentname.php

---

# ZipArchive::getCommentName

(PHP 5 >= 5.2.0, PHP 7, PHP 8, PECL zip >= 1.4.0)

ZipArchive::getCommentName — Retorna o comentário de uma entrada usando o nome da entrada

### Descrição

public function **ZipArchive::getCommentName**([string](language.types.string.md) `$name`, [int](language.types.integer.md) `$flags` = 0): [string](language.types.string.md)|[false](language.types.singleton.md)

Retorna o comentário de uma entrada usando o nome da entrada.

### Parâmetros

`name`
:   Nome da entrada

`flags`
:   Se flags estiver definido como **`ZipArchive::FL_UNCHANGED`**, o comentário original
    e não alterado é retornado.

### Valor Retornado

Retorna o comentário em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Imprime o comentário de uma entrada**

```
<?php
$zip = new ZipArchive;
$res = $zip->open('test1.zip');
if ($res === TRUE) {
    var_dump($zip->getCommentName('test/entry1.txt'));
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
