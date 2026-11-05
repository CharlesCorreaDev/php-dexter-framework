# Constrói um novo objeto SplFileInfo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfileinfo.construct.php

---

# SplFileInfo::\_\_construct

(PHP 5 >= 5.1.2, PHP 7, PHP 8)

SplFileInfo::\_\_construct — Constrói um novo objeto SplFileInfo

### Descrição

public function **SplFileInfo::\_\_construct**([string](language.types.string.md) `$filename`)

Cria um novo objeto SplFileInfo para o arquivo especificado. O arquivo
não precisa existir ou ser legível.

### Parâmetros

`filename`
:   Caminho para o arquivo.

### Examples

**Exemplo #1 Exemplo de **SplFileInfo::\_\_construct()****

```
<?php
$info = new SplFileInfo('example.php');
if ($info->isFile()) {
    echo $info->getRealPath();
}
?>
```

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
