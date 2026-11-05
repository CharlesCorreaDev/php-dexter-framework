# Vtiful\Kernel\Excel getHandle

> **Fonte / Source:** https://www.php.net/manual/pt_BR/vtiful-kernel-excel.getHandle.php

---

# Vtiful\Kernel\Excel::getHandle

(PECL xlswriter >= 1.2.1)

Vtiful\Kernel\Excel::getHandle — Vtiful\Kernel\Excel getHandle

### Descrição

public function **Vtiful\Kernel\Excel::getHandle**()

Obtém o identificador de recurso de texto xlsx.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Recurso

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

$handle = $file->getHandle();
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
