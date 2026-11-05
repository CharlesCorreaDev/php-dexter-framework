# Vtiful\Kernel\Excel insertImage

> **Fonte / Source:** https://www.php.net/manual/pt_BR/vtiful-kernel-excel.insertImage.php

---

# Vtiful\Kernel\Excel::insertImage

(PECL xlswriter >= 1.2.1)

Vtiful\Kernel\Excel::insertImage — Vtiful\Kernel\Excel insertImage

### Descrição

public function **Vtiful\Kernel\Excel::insertImage**([int](language.types.integer.md) `$row`, [int](language.types.integer.md) `$column`, [string](language.types.string.md) `$localImagePath`)

Insere uma imagem local na célula.

### Parâmetros

`row`
:   Linha da célula.

`column`
:   Coluna da célula.

`localImagePath`
:   Caminho da imagem local.

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

$file = $excel->fileName("free.xlsx");

$file->insertImage(5, 0, '/vagrant/ASW-G-66.jpg');

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
