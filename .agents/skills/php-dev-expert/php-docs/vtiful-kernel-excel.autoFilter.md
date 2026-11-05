# Vtiful\Kernel\Excel autoFilter

> **Fonte / Source:** https://www.php.net/manual/pt_BR/vtiful-kernel-excel.autoFilter.php

---

# Vtiful\Kernel\Excel::autoFilter

(PECL xlswriter >= 1.2.1)

Vtiful\Kernel\Excel::autoFilter — Vtiful\Kernel\Excel autoFilter

### Descrição

public function **Vtiful\Kernel\Excel::autoFilter**([string](language.types.string.md) `$scope`)

Adiciona filtro automático a uma planilha.

### Parâmetros

`scope`
:   String com coordenadas de célula inicial e célula final.

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

$file = $fileObject->fileName('test.xlsx')
        ->header(['name', 'age'])
        ->data($data)
        ->autoFilter('A1:B11')  // filtro automático
        ->output();
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
