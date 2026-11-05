# Vtiful\Kernel\Excel insertText

> **Fonte / Source:** https://www.php.net/manual/pt_BR/vtiful-kernel-excel.insertText.php

---

# Vtiful\Kernel\Excel::insertText

(PECL xlswriter >= 1.2.1)

Vtiful\Kernel\Excel::insertText — Vtiful\Kernel\Excel insertText

### Descrição

public function **Vtiful\Kernel\Excel::insertText**(  
    [int](language.types.integer.md) `$row`,  
    [int](language.types.integer.md) `$column`,  
    [int](language.types.integer.md)|[float](language.types.float.md)|[string](language.types.string.md) `$data`,  
    [string](language.types.string.md) `$format` = ?  
)

Escreve texto em uma célula.

### Parâmetros

`row`
:   Linha da célula.

`column`
:   Coluna da célula.

`data`
:   Dados a serem inseridos.

`format`
:   String com o formato.

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

$file = $excel->fileName("free.xlsx")
    ->header(['name', 'money']);

for ($index = 0; $index < 10; $index++) {
    $file->insertText($index+1, 0, 'viest');
    $file->insertText($index+1, 1, 10000, '#,##0');
}

$file->output();
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
