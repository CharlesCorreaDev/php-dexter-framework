# Escreve o buffer de saída para o arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfileobject.fflush.php

---

# SplFileObject::fflush

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

SplFileObject::fflush — Escreve o buffer de saída para o arquivo

### Descrição

public function **SplFileObject::fflush**(): [bool](language.types.boolean.md)

Força a escrita de toda a saída em buffer para o arquivo.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **SplFileObject::fflush()****

```
<?php
$file = new SplFileObject('misc.txt', 'r+');
$file->rewind();
$file->fwrite("Foo");
$file->fflush();
$file->ftruncate($file->ftell());
?>
```

### Veja também

- [SplFileObject::fwrite()](splfileobject.fwrite.md) - Escreve no arquivo

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
