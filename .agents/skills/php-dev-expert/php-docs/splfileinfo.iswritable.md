# Indica se a entrada é gravável

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfileinfo.iswritable.php

---

# SplFileInfo::isWritable

(PHP 5 >= 5.1.2, PHP 7, PHP 8)

SplFileInfo::isWritable — Indica se a entrada é gravável

### Descrição

public function **SplFileInfo::isWritable**(): [bool](language.types.boolean.md)

Verifica se a entrada atual é gravável.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se gravável, **`false`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **SplFileInfo::isWritable()****

```
<?php
$info = new SplFileInfo('locked.jpg');
if (!$info->isWritable()) {
    echo $info->getFilename() . ' não é gravável';
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
locked.jpg não é gravável
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
