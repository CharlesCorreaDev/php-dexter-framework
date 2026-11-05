# Renomeia uma entrada definida pelo seu nome

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ziparchive.renamename.php

---

# ZipArchive::renameName

(PHP 5 >= 5.2.0, PHP 7, PHP 8, PECL zip >= 1.5.0)

ZipArchive::renameName — Renomeia uma entrada definida pelo seu nome

### Descrição

public function **ZipArchive::renameName**([string](language.types.string.md) `$name`, [string](language.types.string.md) `$new_name`): [bool](language.types.boolean.md)

Renomeia uma entrada definida pelo seu nome.

### Parâmetros

`name`
:   Nome da entrada a ser renomeada.

`new_name`
:   Novo nome.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Renomear uma entrada**

```
<?php
$zip = new ZipArchive;
$res = $zip->open('test.zip');
if ($res === TRUE) {
    $zip->renameName('currentname.txt','newname.txt');
    $zip->close();
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
