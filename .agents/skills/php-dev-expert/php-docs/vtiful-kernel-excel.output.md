# Vtiful\Kernel\Excel output

> **Fonte / Source:** https://www.php.net/manual/pt_BR/vtiful-kernel-excel.output.php

---

# Vtiful\Kernel\Excel::output

(PECL xlswriter >= 1.2.1)

Vtiful\Kernel\Excel::output — Vtiful\Kernel\Excel output

### Descrição

public function **Vtiful\Kernel\Excel::output**()

Gera arquivo xlsx no disco.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Caminho do arquivo XLSX.

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

$path = $file->output();
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
