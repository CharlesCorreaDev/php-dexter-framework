# Obtém a extensão do arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfileinfo.getextension.php

---

# SplFileInfo::getExtension

(PHP 5 >= 5.3.6, PHP 7, PHP 8)

SplFileInfo::getExtension — Obtém a extensão do arquivo

### Descrição

public function **SplFileInfo::getExtension**(): [string](language.types.string.md)

Recupera a extensão do arquivo.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna uma [string](language.types.string.md) contendo a extensão do arquivo, ou uma
[string](language.types.string.md) vazia se o arquivo não tiver extensão.

### Examples

**Exemplo #1 Exemplo de **SplFileInfo::getExtension()****

```
<?php

$info = new SplFileInfo('foo.txt');
var_dump($info->getExtension());

$info = new SplFileInfo('photo.jpg');
var_dump($info->getExtension());

$info = new SplFileInfo('something.tar.gz');
var_dump($info->getExtension());

?>
```

O exemplo acima produzirá:

```
string(3) "txt"
string(3) "jpg"
string(2) "gz"
```

### Notas

> **Nota**:
>
> Outra maneira de obter a extensão é usar a
> função [pathinfo()](function.pathinfo.md).
>
> ```
> <?php
> $extension = pathinfo($info->getFilename(), PATHINFO_EXTENSION);
> ?>
> ```

### Veja também

- [SplFileInfo::getFilename()](splfileinfo.getfilename.md) - Obtém o nome do arquivo
- [SplFileInfo::getBasename()](splfileinfo.getbasename.md) - Obtém o nome base do arquivo
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
