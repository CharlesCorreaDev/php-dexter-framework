# Define opções de manipulação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/filesystemiterator.setflags.php

---

# FilesystemIterator::setFlags

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

FilesystemIterator::setFlags — Define opções de manipulação

### Descrição

public function **FilesystemIterator::setFlags**([int](language.types.integer.md) `$flags`): [void](language.types.void.md)

Define opções de manipulação.

### Parâmetros

`flags`
:   As opções de manipulação para definir.
    Veja as [Constantes FilesystemIterator](class.filesystemiterator.md#filesystemiterator.constants).

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de [FilesystemIterator::key()](filesystemiterator.key.md)**

Este exemplo demonstra a diferença entre as opções
[FilesystemIterator::KEY\_AS\_PATHNAME](class.filesystemiterator.md#filesystemiterator.constants.key-as-pathname) e
[FilesystemIterator::KEY\_AS\_FILENAME](class.filesystemiterator.md#filesystemiterator.constants.key-as-filename).

```
<?php
$iterator = new FilesystemIterator(dirname(__FILE__), FilesystemIterator::KEY_AS_PATHNAME);
echo "Key as Pathname:\n";
foreach ($iterator as $key => $fileinfo) {
    echo $key . "\n";
}

$iterator->setFlags(FilesystemIterator::KEY_AS_FILENAME);
echo "\nKey as Filename:\n";
foreach ($iterator as $key => $fileinfo) {
    echo $key . "\n";
}
?>
```

A saída do exemplo acima no PHP 8.2 é semelhante a:

```
Key as Pathname:
/www/examples/.
/www/examples/..
/www/examples/apple.jpg
/www/examples/banana.jpg
/www/examples/example.php

Key as Filename:
.
..
apple.jpg
banana.jpg
example.php
```

### Veja também

- [FilesystemIterator::\_\_construct()](filesystemiterator.construct.md) - Constrói um novo iterador de sistema de arquivos
- [FilesystemIterator::getFlags()](filesystemiterator.getflags.md) - Obtem as opções de manipulação

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
