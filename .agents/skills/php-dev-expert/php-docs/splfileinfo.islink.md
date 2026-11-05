# Indica se um arquivo é um link

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfileinfo.islink.php

---

# SplFileInfo::isLink

(PHP 5 >= 5.1.2, PHP 7, PHP 8)

SplFileInfo::isLink — Indica se um arquivo é um link

### Descrição

public function **SplFileInfo::isLink**(): [bool](language.types.boolean.md)

Use este método para checar se um arquivo referenciado pelo objeto SplFileInfo
é um link.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se o arquivo é um link, **`false`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **SplFileInfo::isLink()****

```
<?php
$info = new SplFileInfo('/caminho/para/ligacao_simbolica');
if ($info->isLink()) {
    echo 'O caminho real é '.$info->getRealPath();
}
?>
```

### Veja também

- [SplFileInfo::getRealPath()](splfileinfo.getrealpath.md) - Obtém o caminho absoluto para o arquivo

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
