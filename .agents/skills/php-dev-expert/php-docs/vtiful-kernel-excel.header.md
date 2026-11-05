# Vtiful\Kernel\Excel header

> **Fonte / Source:** https://www.php.net/manual/pt_BR/vtiful-kernel-excel.header.php

---

# Vtiful\Kernel\Excel::header

(PECL xlswriter >= 1.2.1)

Vtiful\Kernel\Excel::header — Vtiful\Kernel\Excel header

### Descrição

public function **Vtiful\Kernel\Excel::header**([array](language.types.array.md) `$headerData`)

Escreve um cabeçalho na planilha.

### Parâmetros

`headerData`
:   Dados do cabeçalho da planilha

### Valor Retornado

Instância de [Vtiful\Kernel\Excel](class.vtiful-kernel-excel.md).

### Examples

**Exemplo #1 Exemplo**

```
<?php
$config = [
    'path' => './tests'
];

$fileObject  = new \Vtiful\Kernel\Excel($config);

$file = $fileObject->fileName('tutorial.xlsx', 'sheet_one')
    ->header(['name', 'age']);
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
