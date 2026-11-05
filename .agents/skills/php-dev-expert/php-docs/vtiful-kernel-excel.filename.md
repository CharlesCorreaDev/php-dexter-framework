# Vtiful\Kernel\Excel fileName

> **Fonte / Source:** https://www.php.net/manual/pt_BR/vtiful-kernel-excel.filename.php

---

# Vtiful\Kernel\Excel::fileName

(PECL xlswriter >= 1.2.1)

Vtiful\Kernel\Excel::fileName — Vtiful\Kernel\Excel fileName

### Descrição

public function **Vtiful\Kernel\Excel::fileName**([string](language.types.string.md) `$fileName`, [string](language.types.string.md) `$sheetName` = ?)

Cria um novo arquivo xlsx e cria uma planilha.

### Parâmetros

`fileName`
:   Nome do arquivo XLSX.

`sheetName`
:   Nome da planilha.

### Valor Retornado

Instância de [Vtiful\Kernel\Excel](class.vtiful-kernel-excel.md).

### Examples

**Exemplo #1 Exemplo**

```
<?php
$config = [
  'path' => '/home/viest'
];

$fileObject = new \Vtiful\Kernel\Excel($config);

$file = $fileObject->fileName('tutorial.xlsx', 'sheet');
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
