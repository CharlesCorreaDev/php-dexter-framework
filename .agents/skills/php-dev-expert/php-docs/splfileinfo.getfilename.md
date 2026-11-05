# Obtém o nome do arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfileinfo.getfilename.php

---

# SplFileInfo::getFilename

(PHP 5 >= 5.1.2, PHP 7, PHP 8)

SplFileInfo::getFilename — Obtém o nome do arquivo

### Descrição

public function **SplFileInfo::getFilename**(): [string](language.types.string.md)

Obtém o nome do arquivo sem qualquer informação de caminho.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O nome do arquivo.

### Examples

**Exemplo #1 Exemplo de **SplFileInfo::getFilename()****

```
<?php
$info = new SplFileInfo('foo.txt');
var_dump($info->getFilename());

$info = new SplFileInfo('/path/to/foo.txt');
var_dump($info->getFilename());

$info = new SplFileInfo('http://www.php.net/');
var_dump($info->getFilename());

$info = new SplFileInfo('http://www.php.net/svn.php');
var_dump($info->getFilename());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(7) "foo.txt"
string(7) "foo.txt"
string(11) "www.php.net"
string(7) "svn.php"
```

### Veja também

- [SplFileInfo::getBasename()](splfileinfo.getbasename.md) - Obtém o nome base do arquivo

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
