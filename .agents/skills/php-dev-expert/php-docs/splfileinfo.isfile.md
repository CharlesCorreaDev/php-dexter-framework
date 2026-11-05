# Indica se o objeto faz referência a um arquivo regular

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfileinfo.isfile.php

---

# SplFileInfo::isFile

(PHP 5 >= 5.1.2, PHP 7, PHP 8)

SplFileInfo::isFile — Indica se o objeto faz referência a um arquivo regular

### Descrição

public function **SplFileInfo::isFile**(): [bool](language.types.boolean.md)

Verifica se o arquivo referenciado por este objeto SplFileInfo existe e é um arquivo regular.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se o arquivo existe e é um arquivo regular (não é um link), **`false`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **SplFileInfo::isFile()****

```
<?php
$info = new SplFileInfo(__FILE__);
var_dump($info->isFile());

$info = new SplFileInfo(dirname(__FILE__));
var_dump($info->isFile());
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
