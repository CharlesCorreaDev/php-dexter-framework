# Obtém o caminho sem o nome do arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfileinfo.getpath.php

---

# SplFileInfo::getPath

(PHP 5 >= 5.1.2, PHP 7, PHP 8)

SplFileInfo::getPath — Obtém o caminho sem o nome do arquivo

### Descrição

public function **SplFileInfo::getPath**(): [string](language.types.string.md)

Retorna o caminho para o arquivo, omitindo o nome do arquivo e qualquer barra no final.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o caminho para o arquivo.

### Examples

**Exemplo #1 Exemplo de **SplFileInfo::getPath()****

```
<?php
$info = new SplFileInfo('/usr/bin/php');
var_dump($info->getPath());

$info = new SplFileInfo('/usr/');
var_dump($info->getPath());?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(8) "/usr/bin"
string(4) "/usr"
```

### Veja também

- [SplFileInfo::getRealPath()](splfileinfo.getrealpath.md) - Obtém o caminho absoluto para o arquivo
- [SplFileInfo::getFilename()](splfileinfo.getfilename.md) - Obtém o nome do arquivo
- [SplFileInfo::getPathInfo()](splfileinfo.getpathinfo.md) - Obtém um objeto SplFileInfo para o caminho

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
