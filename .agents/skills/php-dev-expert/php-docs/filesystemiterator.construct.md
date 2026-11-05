# Constrói um novo iterador de sistema de arquivos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/filesystemiterator.construct.php

---

# FilesystemIterator::\_\_construct

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

FilesystemIterator::\_\_construct — Constrói um novo iterador de sistema de arquivos

### Descrição

public function **FilesystemIterator::\_\_construct**([string](language.types.string.md) `$directory`, [int](language.types.integer.md) `$flags` = FilesystemIterator::KEY\_AS\_PATHNAME | FilesystemIterator::CURRENT\_AS\_FILEINFO | FilesystemIterator::SKIP\_DOTS)

Constrói um novo iterador de sistema de arquivos a partir do `directory`.

### Parâmetros

`directory`
:   O caminho do item do sistema de arquivos a ser iterado.

`flags`
:   As opções podem ser fornecidas e afetarão o comportamento de alguns métodos.
    Uma lista das opções pode ser encontrada em [Constantes predefinidas do FilesystemIterator](class.filesystemiterator.md#filesystemiterator.constants).
    Elas também podem ser definidas posteriormente com [FilesystemIterator::setFlags()](filesystemiterator.setflags.md)

### Erros/Exceções

Lança uma [UnexpectedValueException](class.unexpectedvalueexception.md)
se o `directory` não existir.

Lança um [ValueError](class.valueerror.md)
se o `directory` for uma string vazia.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.2.0 | Antes do PHP 8.2.0, **`FilesystemIterator::SKIP_DOTS`** era sempre definido e não podia ser removido. |
| 8.0.0 | Agora lança um [ValueError](class.valueerror.md) se `directory` for uma string vazia; anteriormente lançava um [RuntimeException](class.runtimeexception.md). |

### Examples

**Exemplo #1 Exemplo de **FilesystemIterator::\_\_construct()****

```
<?php
$it = new FilesystemIterator(dirname(__FILE__), FilesystemIterator::CURRENT_AS_FILEINFO);
foreach ($it as $fileinfo) {
    echo $fileinfo->getFilename() . "\n";
}
?>
```

A saída do exemplo acima no PHP 8.2 é semelhante a:

```
.
..
apples.jpg
banana.jpg
example.php
```

A saída do exemplo acima antes do PHP 8.2.0 é semelhante a:

```
apples.jpg
banana.jpg
example.php
```

### Veja também

- [FilesystemIterator::setFlags()](filesystemiterator.setflags.md) - Define opções de manipulação
- [DirectoryIterator::\_\_construct()](directoryiterator.construct.md) - Constrói um novo iterador de diretório a partir de um caminho

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
