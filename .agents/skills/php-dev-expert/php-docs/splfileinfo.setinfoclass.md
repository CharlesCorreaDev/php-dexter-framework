# Define a classe usada com SplFileInfo::getFileInfo e SplFileInfo::getPathInfo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfileinfo.setinfoclass.php

---

# SplFileInfo::setInfoClass

(PHP 5 >= 5.1.2, PHP 7, PHP 8)

SplFileInfo::setInfoClass — Define a classe usada com [SplFileInfo::getFileInfo()](splfileinfo.getfileinfo.md) e [SplFileInfo::getPathInfo()](splfileinfo.getpathinfo.md)

### Descrição

public function **SplFileInfo::setInfoClass**([string](language.types.string.md) `$class` = **`SplFileInfo::class`**): [void](language.types.void.md)

Use este método para definir uma classe personalizada que será usada quando
[SplFileInfo::getFileInfo()](splfileinfo.getfileinfo.md) e
[SplFileInfo::getPathInfo()](splfileinfo.getpathinfo.md) são chamados. O nome da classe
passado para este método deve ser [SplFileInfo](class.splfileinfo.md) ou uma classe
derivada de [SplFileInfo](class.splfileinfo.md).

### Parâmetros

`class`
:   O nome da classe a ser usada quando
    [SplFileInfo::getFileInfo()](splfileinfo.getfileinfo.md) e
    [SplFileInfo::getPathInfo()](splfileinfo.getpathinfo.md) são chamados.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de [SplFileInfo::setFileClass()](splfileinfo.setfileclass.md)**

```
<?php
// Define uma classe que estende SplFileInfo
class MyFoo extends SplFileInfo {}

$info = new SplFileInfo('foo');
// Define o nome da classe a ser usada
$info->setInfoClass('MyFoo');
var_dump($info->getFileInfo());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
object(MyFoo)#2 (0) { }
```

### Veja também

- [SplFileInfo::getFileInfo()](splfileinfo.getfileinfo.md) - Obtém um objeto SplFileInfo para o arquivo

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
