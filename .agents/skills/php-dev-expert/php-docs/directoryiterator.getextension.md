# Obtém a extensão do arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/directoryiterator.getextension.php

---

# DirectoryIterator::getExtension

(PHP 5 >= 5.3.6, PHP 7, PHP 8)

DirectoryIterator::getExtension — Obtém a extensão do arquivo

### Descrição

public function **DirectoryIterator::getExtension**(): [string](language.types.string.md)

Recupera a extensão do arquivo.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna uma [string](language.types.string.md) contendo a extensão do arquivo, ou uma
[string](language.types.string.md) vazia se o arquivo não tiver extensão.

### Examples

**Exemplo #1 Exemplo de **DirectoryIterator::getExtension()****

```
<?php

$directory = new DirectoryIterator(__DIR__);
foreach ($directory as $fileinfo) {
    if ($fileinfo->isFile()) {
        echo $fileinfo->getExtension() . "\n";
    }
}

?>
```

O exemplo acima produzirá
algo semelhante a:

```
php
txt
jpg
gz
```

### Notas

> **Nota**:
>
> Outra maneira de obter a extensão é utilizar a função
> [pathinfo()](function.pathinfo.md).
>
> ```
> <?php
> $extension = pathinfo($fileinfo->getFilename(), PATHINFO_EXTENSION);
> ?>
> ```

### Veja também

- [DirectoryIterator::getFilename()](directoryiterator.getfilename.md) - Retorna o nome do arquivo do item atual do DirectoryIterator
- [DirectoryIterator::getBasename()](directoryiterator.getbasename.md) - Retorna o nome do item corrente do DirectoryIterator
- [pathinfo()](function.pathinfo.md) - Retorna informações sobre um caminho de arquivo

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
