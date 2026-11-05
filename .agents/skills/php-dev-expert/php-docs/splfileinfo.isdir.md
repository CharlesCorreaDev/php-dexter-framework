# Indica se o arquivo é um diretório

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfileinfo.isdir.php

---

# SplFileInfo::isDir

(PHP 5 >= 5.1.2, PHP 7, PHP 8)

SplFileInfo::isDir — Indica se o arquivo é um diretório

### Descrição

public function **SplFileInfo::isDir**(): [bool](language.types.boolean.md)

Este método pode ser usado para determinar se um arquivo é um diretório.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se um diretório, **`false`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **SplFileInfo::isDir()****

```
<?php
$d = new SplFileInfo(dirname(__FILE__));
var_dump($d->isDir());

$d = new SplFileInfo(__FILE__);
var_dump($d->isDir());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
bool(true)
bool(false)
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
