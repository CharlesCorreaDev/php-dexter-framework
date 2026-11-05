# Vtiful\Kernel\Excel insertFormula

> **Fonte / Source:** https://www.php.net/manual/pt_BR/vtiful-kernel-excel.insertFormula.php

---

# Vtiful\Kernel\Excel::insertFormula

(PECL xlswriter >= 1.2.1)

Vtiful\Kernel\Excel::insertFormula — Vtiful\Kernel\Excel insertFormula

### Descrição

public function **Vtiful\Kernel\Excel::insertFormula**([int](language.types.integer.md) `$row`, [int](language.types.integer.md) `$column`, [string](language.types.string.md) `$formula`)

Insira fórmula de cálculo.

### Parâmetros

`row`
:   Linha da célula.

`column`
:   Coluna da célula.

`formula`
:   String com a fórmula.

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

for($index = 1; $index < 10; $index++) {
    $file->insertText($index, 0, 'viest');
    $file->insertText($index, 1, 10);
}

$file->insertText(12, 0, "Total");
$file->insertFormula(12, 1, '=SUM(B2:B11)'); // insere a fórmula

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
