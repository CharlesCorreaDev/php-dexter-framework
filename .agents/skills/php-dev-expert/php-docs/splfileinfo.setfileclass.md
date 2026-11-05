# Define a classe usada com SplFileInfo::openFile

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfileinfo.setfileclass.php

---

# SplFileInfo::setFileClass

(PHP 5 >= 5.1.2, PHP 7, PHP 8)

SplFileInfo::setFileClass — Define a classe usada com [SplFileInfo::openFile()](splfileinfo.openfile.md)

### Descrição

public function **SplFileInfo::setFileClass**([string](language.types.string.md) `$class` = **`SplFileObject::class`**): [void](language.types.void.md)

Use este método para definir uma classe personalizada que será usada quando
[SplFileInfo::openFile()](splfileinfo.openfile.md) for chamado. O nome da classe
passado para este método deve ser [SplFileObject](class.splfileobject.md) ou uma classe
derivada de [SplFileObject](class.splfileobject.md).

### Parâmetros

`class`
:   O nome da classe a ser usada quando [SplFileInfo::openFile()](splfileinfo.openfile.md)
    for chamado.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **SplFileInfo::setFileClass()****

```
<?php
// Cria a classe estendendo SplFileObject
class MyFoo extends SplFileObject {}

$info = new SplFileInfo(__FILE__);
// Define a classe a ser usada
$info->setFileClass('MyFoo');
var_dump($info->openFile());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
object(MyFoo)#2 (0) { }
```

### Veja também

- [SplFileInfo::openFile()](splfileinfo.openfile.md) - Obtém um objeto SplFileObject para o arquivo

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
