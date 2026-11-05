# Indica se o arquivo é executável

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfileinfo.isexecutable.php

---

# SplFileInfo::isExecutable

(PHP 5 >= 5.1.2, PHP 7, PHP 8)

SplFileInfo::isExecutable — Indica se o arquivo é executável

### Descrição

public function **SplFileInfo::isExecutable**(): [bool](language.types.boolean.md)

Verifica se o arquivo é executável.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se executável, **`false`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **SplFileInfo::isExecutable()****

```
<?php
$info = new SplFileInfo('/usr/bin/php');
var_dump($info->isExecutable());

$info = new SplFileInfo('/usr/bin');
var_dump($info->isExecutable());

$info = new SplFileInfo('foo');
var_dump($info->isExecutable());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
bool(true)
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
