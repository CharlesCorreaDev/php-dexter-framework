# Vtiful\Kernel\Excel data

> **Fonte / Source:** https://www.php.net/manual/pt_BR/vtiful-kernel-excel.data.php

---

# Vtiful\Kernel\Excel::data

(PECL xlswriter >= 1.2.1)

Vtiful\Kernel\Excel::data — Vtiful\Kernel\Excel data

### Descrição

public function **Vtiful\Kernel\Excel::data**([array](language.types.array.md) `$data`)

Escreva dados na planilha.

### Parâmetros

`data`
:   Dados da planilha.

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
    ->header(['name', 'age'])
    ->data([
      ['viest', 23],
      ['wjx', 23],
    ]);
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
