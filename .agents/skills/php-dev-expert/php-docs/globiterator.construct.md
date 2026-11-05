# Constrói um diretório usando glob

> **Fonte / Source:** https://www.php.net/manual/pt_BR/globiterator.construct.php

---

# GlobIterator::\_\_construct

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

GlobIterator::\_\_construct — Constrói um diretório usando glob

### Descrição

public function **GlobIterator::\_\_construct**([string](language.types.string.md) `$pattern`, [int](language.types.integer.md) `$flags` = FilesystemIterator::KEY\_AS\_PATHNAME | FilesystemIterator::CURRENT\_AS\_FILEINFO)

Constrói um novo iterador de diretório a partir de uma expressão glob.

### Parâmetros

`pattern`
:   Um padrão [glob()](function.glob.md).

`flags`
:   Sinalizadores de opção, os sinalizadores podem ser uma máscara de bits das
    constantes [FilesystemIterator](class.filesystemiterator.md).

### Erros/Exceções

Lança uma [UnexpectedValueException](class.unexpectedvalueexception.md)
se o diretório definido em `directory` não existir.

Lança um [ValueError](class.valueerror.md)
se o diretório definido em `directory` for uma string vazia.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Agora lança um [ValueError](class.valueerror.md) se `directory` for uma string vazia; anteriormente lançava um [RuntimeException](class.runtimeexception.md). |

### Examples

**Exemplo #1 Exemplo de [GlobIterator](class.globiterator.md)**

```
<?php
$iterator = new GlobIterator('*.dll', FilesystemIterator::KEY_AS_FILENAME);

if (!$iterator->count()) {
    echo 'Sem correspondência';
} else {
    $n = 0;

    printf("Corresponderam %d item(s)\r\n", $iterator->count());

    foreach ($iterator as $item) {
        printf("[%d] %s\r\n", ++$n, $iterator->key());
    }
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Corresponderam 2 item(s)
[1] php5ts.dll
[2] php_gd2.dll
```

### Veja também

- [DirectoryIterator::\_\_construct()](directoryiterator.construct.md) - Constrói um novo iterador de diretório a partir de um caminho
- [GlobIterator::count()](globiterator.count.md) - Obtém o número de diretórios e arquivos
- [glob()](function.glob.md) - Encontra caminhos que combinam com uma expressão

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
