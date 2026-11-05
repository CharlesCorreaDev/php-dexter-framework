# Obtém o caminho para o arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfileinfo.getpathname.php

---

# SplFileInfo::getPathname

(PHP 5 >= 5.1.2, PHP 7, PHP 8)

SplFileInfo::getPathname — Obtém o caminho para o arquivo

### Descrição

public function **SplFileInfo::getPathname**(): [string](language.types.string.md)

Retorna o caminho para o arquivo.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O caminho para o arquivo.

### Examples

**Exemplo #1 Exemplo de **SplFileInfo::getPathname()****

```
<?php
$info = new SplFileInfo('/usr/bin/php');
var_dump($info->getPathname());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(12) "/usr/bin/php"
```

### Veja também

- [SplFileInfo::getRealPath()](splfileinfo.getrealpath.md) - Obtém o caminho absoluto para o arquivo

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
