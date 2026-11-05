# Retorna a chave para o item atual do DirectoryIterator

> **Fonte / Source:** https://www.php.net/manual/pt_BR/directoryiterator.key.php

---

# DirectoryIterator::key

(PHP 5, PHP 7, PHP 8)

DirectoryIterator::key — Retorna a chave para o item atual do DirectoryIterator

### Descrição

public function **DirectoryIterator::key**(): [mixed](language.types.mixed.md)

Obtém a chave para o item atual do [DirectoryIterator](class.directoryiterator.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

A chave para o item atual do [DirectoryIterator](class.directoryiterator.md) como um [int](language.types.integer.md).

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | Quando o iterador não está inicializado, agora é lançado um [Error](class.error.md). Anteriormente, o método retornava **`false`**. |

### Examples

**Exemplo #1 Um exemplo de **DirectoryIterator::key()****

```
<?php
$dir = new DirectoryIterator(dirname(__FILE__));
foreach ($dir as $fileinfo) {
    if (!$fileinfo->isDot()) {
        echo $fileinfo->key() . " => " . $fileinfo->getFilename() . "\n";
    }
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
0 => apple.jpg
1 => banana.jpg
2 => index.php
3 => pear.jpg
```

### Veja também

- [DirectoryIterator::current()](directoryiterator.current.md) - Retorna o item atual do DirectoryIterator
- [DirectoryIterator::next()](directoryiterator.next.md) - Mover para o próximo item do DirectoryIterator
- [DirectoryIterator::rewind()](directoryiterator.rewind.md) - Rebobina o DirectoryIterator de volta ao início
- [DirectoryIterator::valid()](directoryiterator.valid.md) - Verifica se a posição atual do DirectoryIterator é um arquivo válido
- [Iterator::key()](iterator.key.md) - Retorna a chave do elemento atual

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
