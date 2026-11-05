# Indica se o arquivo é legível

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfileinfo.isreadable.php

---

# SplFileInfo::isReadable

(PHP 5 >= 5.1.2, PHP 7, PHP 8)

SplFileInfo::isReadable — Indica se o arquivo é legível

### Descrição

public function **SplFileInfo::isReadable**(): [bool](language.types.boolean.md)

Verifica se o arquivo é legível.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se legível, **`false`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **SplFileInfo::isReadable()****

```
<?php
$info = new SplFileInfo('readable.jpg');
if ($info->isReadable()) {
    echo $info->getFilename() . ' é legível';
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
readable.jpg é legível
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
