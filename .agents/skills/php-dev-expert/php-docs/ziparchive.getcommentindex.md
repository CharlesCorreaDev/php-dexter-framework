# Retorna o comentário de uma entrada usando o índice da entrada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ziparchive.getcommentindex.php

---

# ZipArchive::getCommentIndex

(PHP 5 >= 5.2.0, PHP 7, PHP 8, PECL zip >= 1.4.0)

ZipArchive::getCommentIndex — Retorna o comentário de uma entrada usando o índice da entrada

### Descrição

public function **ZipArchive::getCommentIndex**([int](language.types.integer.md) `$index`, [int](language.types.integer.md) `$flags` = 0): [string](language.types.string.md)|[false](language.types.singleton.md)

Retorna o comentário de uma entrada usando o índice da entrada.

### Parâmetros

`index`
:   Índice da entrada

`flags`
:   Se flags estiver definido como **`ZipArchive::FL_UNCHANGED`**, o comentário original e não alterado é
    retornado.

### Valor Retornado

Retorna o comentário em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Imprimir o comentário de uma entrada**

```
<?php
$zip = new ZipArchive;
$res = $zip->open('test1.zip');
if ($res === TRUE) {
    var_dump($zip->getCommentIndex(1));
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
