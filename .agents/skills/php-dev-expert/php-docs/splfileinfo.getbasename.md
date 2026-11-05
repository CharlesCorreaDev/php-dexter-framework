# Obtém o nome base do arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfileinfo.getbasename.php

---

# SplFileInfo::getBasename

(PHP 5 >= 5.2.2, PHP 7, PHP 8)

SplFileInfo::getBasename — Obtém o nome base do arquivo

### Descrição

public function **SplFileInfo::getBasename**([string](language.types.string.md) `$suffix` = ""): [string](language.types.string.md)

Este método retorna o nome base do arquivo, diretório ou link sem
informações de caminho.

**Cuidado**

**SplFileInfo::getBasename()** é sensível ao local, então para visualizar o
nome base correto com caminhos de caracteres multibyte, o local correspondente deve
ser definido usando a função [setlocale()](function.setlocale.md).

### Parâmetros

`suffix`
:   Sufixo opcional a ser omitido do nome base retornado.

### Valor Retornado

Retorna o nome base sem informações de caminho.

### Examples

**Exemplo #1 Exemplo de **SplFileInfo::getBasename()****

```
<?php
$info = new SplFileInfo('file.txt');
var_dump($info->getBasename());

$info = new SplFileInfo('/path/to/file.txt');
var_dump($info->getBasename());

$info = new SplFileInfo('/path/to/file.txt');
var_dump($info->getBasename('.txt'));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(8) "file.txt"
string(8) "file.txt"
string(4) "file"
```

### Veja também

- [SplFileInfo::getFilename()](splfileinfo.getfilename.md) - Obtém o nome do arquivo

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
