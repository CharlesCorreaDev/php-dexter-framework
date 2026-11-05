# Constrói um novo iterador de diretório a partir de um caminho

> **Fonte / Source:** https://www.php.net/manual/pt_BR/directoryiterator.construct.php

---

# DirectoryIterator::\_\_construct

(PHP 5, PHP 7, PHP 8)

DirectoryIterator::\_\_construct — Constrói um novo iterador de diretório a partir de um caminho

### Descrição

public function **DirectoryIterator::\_\_construct**([string](language.types.string.md) `$directory`)

Constrói um novo iterador de diretório a partir de um caminho.

### Parâmetros

`directory`
:   O caminho do diretório a ser percorrido.

### Erros/Exceções

Lança um [UnexpectedValueException](class.unexpectedvalueexception.md)
se o `directory` não existir.

Lança um [ValueError](class.valueerror.md)
se o `directory` for uma string vazia.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Agora Lança um [ValueError](class.valueerror.md) se `directory` for uma string vazia; anteriormente, lançava um [RuntimeException](class.runtimeexception.md). |

### Examples

**Exemplo #1 Um exemplo de **DirectoryIterator::\_\_construct()****

Este exemplo listará o conteúdo do diretório que contém o script.

```
<?php
$dir = new DirectoryIterator(dirname(__FILE__));
foreach ($dir as $fileinfo) {
    if (!$fileinfo->isDot()) {
        var_dump($fileinfo->getFilename());
    }
}
?>
```

### Veja também

- [SplFileInfo](class.splfileinfo.md)
- [Iterator](class.iterator.md)

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
