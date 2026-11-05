# Informa se a entrada do arquivo teve seu CRC verificado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/pharfileinfo.iscrcchecked.php

---

# PharFileInfo::isCRCChecked

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 1.0.0)

PharFileInfo::isCRCChecked — Informa se a entrada do arquivo teve seu CRC verificado

### Descrição

public function **PharFileInfo::isCRCChecked**(): [bool](language.types.boolean.md)

Este método retorna se um arquivo dentro de um arquivo Phar teve
seu CRC verificado.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**`true`** se o arquivo teve seu CRC verificado, **`false`** caso contrário.

### Examples

**Exemplo #1 Um exemplo de **PharFileInfo::isCRCChecked()****

```
<?php
try {
    $p = new Phar('/caminho/para/meu.phar', 0, 'meu.phar');
    $p['meuarquivo.txt'] = 'olá';
    $file = $p['meuarquivo.txt'];
    var_dump($file->isCRCChecked());
} catch (Exception $e) {
    echo 'As operações de criação/modificação falharam em meu.phar: ', $e;
}
?>
```

O exemplo acima produzirá:

```
bool(true)
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
