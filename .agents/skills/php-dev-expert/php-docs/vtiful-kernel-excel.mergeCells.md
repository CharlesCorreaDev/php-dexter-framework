# Vtiful\Kernel\Excel mergeCells

> **Fonte / Source:** https://www.php.net/manual/pt_BR/vtiful-kernel-excel.mergeCells.php

---

# Vtiful\Kernel\Excel::mergeCells

(PECL xlswriter >= 1.2.1)

Vtiful\Kernel\Excel::mergeCells — Vtiful\Kernel\Excel mergeCells

### Descrição

public function **Vtiful\Kernel\Excel::mergeCells**([string](language.types.string.md) `$scope`, [string](language.types.string.md) `$data`)

Mescla células.

### Parâmetros

`scope`
:   String com coordenadas de célula inicial e célula final.

`data`
:   String de dados.

### Valor Retornado

Instância de [Vtiful\Kernel\Excel](class.vtiful-kernel-excel.md).

### Examples

**Exemplo #1 Exemplo**

```
<?php
$config = [
    'path' => './tests'
];

$excel = new \Vtiful\Kernel\Excel($config);

$excel->fileName("test.xlsx")
        ->mergeCells('A1:C1', 'Células mescladas')
        ->output();
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
