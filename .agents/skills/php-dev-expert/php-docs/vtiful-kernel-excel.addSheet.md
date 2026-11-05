# Vtiful\Kernel\Excel addSheet

> **Fonte / Source:** https://www.php.net/manual/pt_BR/vtiful-kernel-excel.addSheet.php

---

# Vtiful\Kernel\Excel::addSheet

(PECL xlswriter >= 1.2.1)

Vtiful\Kernel\Excel::addSheet — Vtiful\Kernel\Excel addSheet

### Descrição

public function **Vtiful\Kernel\Excel::addSheet**([string](language.types.string.md) `$sheetName`)

Cria uma nova planilha no arquivo xlsx.

### Parâmetros

`sheetName`
:   Nome da planilha.

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
        ['wjx', 23]
    ]);

$file->addSheet('sheet_two')
    ->header(['name', 'age'])
    ->data([
        ['james', 33],
        ['king', 33]
    ]);

$file->output();
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
