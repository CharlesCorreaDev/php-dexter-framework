# Retorna o caminho para o arquivo como uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfileinfo.tostring.php

---

# SplFileInfo::\_\_toString

(PHP 5 >= 5.1.2, PHP 7, PHP 8)

SplFileInfo::\_\_toString — Retorna o caminho para o arquivo como uma string

### Descrição

public function **SplFileInfo::\_\_toString**(): [string](language.types.string.md)

Este método irá retornar o nome do arquivo do arquivo referenciado.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o caminho para o arquivo.

### Examples

**Exemplo #1 Exemplo de **SplFileInfo::\_\_toString()****

```
<?php
$info = new SplFileInfo('foo');
var_dump($info->__toString());
echo $info.PHP_EOL;

$info = new SplFileInfo('/usr/bin/php');
var_dump($info->__toString());
echo $info.PHP_EOL;
?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(3) "foo"
foo
string(12) "/usr/bin/php"
/usr/bin/php
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
