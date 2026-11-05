# Obtém o caminho absoluto para o arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfileinfo.getrealpath.php

---

# SplFileInfo::getRealPath

(PHP 5 >= 5.2.2, PHP 7, PHP 8)

SplFileInfo::getRealPath — Obtém o caminho absoluto para o arquivo

### Descrição

public function **SplFileInfo::getRealPath**(): [string](language.types.string.md)|[false](language.types.singleton.md)

Este método expande todos os links simbólicos, resolve referências relativas e retorna o caminho real para o arquivo.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o caminho para o arquivo, ou **`false`** se o arquivo não existir.

### Examples

**Exemplo #1 Exemplo de **SplFileInfo::getRealPath()****

```
<?php
$info = new SplFileInfo('/..//./../../'.__FILE__);
var_dump($info->getRealPath());

$info = new SplFileInfo('/tmp');
var_dump($info->getRealPath());

$info = new SplFileInfo('/I/Do/Not/Exist');
var_dump($info->getRealPath());

$info = new SplFileInfo('php://output');
var_dump($info->getRealPath());

$info = new SplFileInfo("");
var_dump($info->getRealPath());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(28) "/private/tmp/phptempfile.php"
string(12) "/private/tmp"
bool(false)
bool(false)
string(12) "/private/tmp"
```

### Veja também

- [SplFileInfo::isLink()](splfileinfo.islink.md) - Indica se um arquivo é um link
- [realpath()](function.realpath.md) - Retorna o path absoluto canonizado

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
