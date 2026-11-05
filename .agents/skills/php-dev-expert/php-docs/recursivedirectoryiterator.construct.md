# Constrói um RecursiveDirectoryIterator

> **Fonte / Source:** https://www.php.net/manual/pt_BR/recursivedirectoryiterator.construct.php

---

# RecursiveDirectoryIterator::\_\_construct

(PHP 5 >= 5.1.2, PHP 7, PHP 8)

RecursiveDirectoryIterator::\_\_construct — Constrói um RecursiveDirectoryIterator

### Descrição

public function **RecursiveDirectoryIterator::\_\_construct**([string](language.types.string.md) `$directory`, [int](language.types.integer.md) `$flags` = FilesystemIterator::KEY\_AS\_PATHNAME | FilesystemIterator::CURRENT\_AS\_FILEINFO)

Constrói um **RecursiveDirectoryIterator()**
para o `directory` fornecido.

### Parâmetros

`directory`
:   O caminho do diretório a ser iterado.

`flags`
:   As opções (flags) podem ser fornecidas e afetarão o comportamento de alguns métodos.
    Uma lista das opções (flags) pode ser encontrada em
    [Constantes predefinidas de FilesystemIterator](class.filesystemiterator.md#filesystemiterator.constants).
    Elas também podem ser definidas posteriormente com [FilesystemIterator::setFlags()](filesystemiterator.setflags.md).

### Erros/Exceções

Lança uma [UnexpectedValueException](class.unexpectedvalueexception.md)
se o `directory` não existir.

Lança um [ValueError](class.valueerror.md)
se o `directory` for uma string vazia.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Agora lança um [ValueError](class.valueerror.md) se `directory` for uma string vazia; anteriormente lançava um [RuntimeException](class.runtimeexception.md). |

### Examples

**Exemplo #1 Exemplo de [RecursiveDirectoryIterator](class.recursivedirectoryiterator.md)**

```
<?php

$directory = '/tmp';

$it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($directory));

$it->rewind();
while($it->valid()) {

    if (!$it->isDot()) {
        echo 'SubPathName: ' . $it->getSubPathName() . "\n";
        echo 'SubPath:     ' . $it->getSubPath() . "\n";
        echo 'Key:         ' . $it->key() . "\n\n";
    }

    $it->next();
}

?>
```

O exemplo acima produzirá
algo semelhante a:

```
SubPathName: fruit/apple.xml
SubPath:     fruit
Key:         /tmp/fruit/apple.xml

SubPathName: stuff.xml
SubPath:
Key:         /tmp/stuff.xml

SubPathName: veggies/carrot.xml
SubPath:     veggies
Key:         /tmp/veggies/carrot.xml
```

### Veja também

- [FilesystemIterator::\_\_construct()](filesystemiterator.construct.md) - Constrói um novo iterador de sistema de arquivos
- [RecursiveIteratorIterator::\_\_construct()](recursiveiteratoriterator.construct.md) - Constrói um RecursiveIteratorIterator
- [Constantes predefinidas de FilesystemIterator](class.filesystemiterator.md#filesystemiterator.constants)

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
