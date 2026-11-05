# A classe Vtiful\Kernel\Excel

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.vtiful-kernel-excel.php

---

# A classe Vtiful\Kernel\Excel

(PECL xlswriter >= 1.2.1)

## Introdução

Cria arquivos xlsx, define células e gera arquivos xlsx.

## Resumo da classe

class **Vtiful\Kernel\Excel**
{

/\* Métodos \*/

public function [\_\_construct](vtiful-kernel-excel.construct.md)([array](language.types.array.md) `$config`)

public function [addSheet](vtiful-kernel-excel.addSheet.md)([string](language.types.string.md) `$sheetName`)

public function [autoFilter](vtiful-kernel-excel.autoFilter.md)([string](language.types.string.md) `$scope`)

public function [constMemory](vtiful-kernel-excel.constMemory.md)([string](language.types.string.md) `$fileName`, [string](language.types.string.md) `$sheetName` = ?)

public function [data](vtiful-kernel-excel.data.md)([array](language.types.array.md) `$data`)

public function [fileName](vtiful-kernel-excel.filename.md)([string](language.types.string.md) `$fileName`, [string](language.types.string.md) `$sheetName` = ?)

public function [getHandle](vtiful-kernel-excel.getHandle.md)()

public function [header](vtiful-kernel-excel.header.md)([array](language.types.array.md) `$headerData`)

public function [insertFormula](vtiful-kernel-excel.insertFormula.md)([int](language.types.integer.md) `$row`, [int](language.types.integer.md) `$column`, [string](language.types.string.md) `$formula`)

public function [insertImage](vtiful-kernel-excel.insertImage.md)([int](language.types.integer.md) `$row`, [int](language.types.integer.md) `$column`, [string](language.types.string.md) `$localImagePath`)

public function [insertText](vtiful-kernel-excel.insertText.md)(  
    [int](language.types.integer.md) `$row`,  
    [int](language.types.integer.md) `$column`,  
    [int](language.types.integer.md)|[float](language.types.float.md)|[string](language.types.string.md) `$data`,  
    [string](language.types.string.md) `$format` = ?  
)

public function [mergeCells](vtiful-kernel-excel.mergeCells.md)([string](language.types.string.md) `$scope`, [string](language.types.string.md) `$data`)

public function [output](vtiful-kernel-excel.output.md)()

public function [setColumn](vtiful-kernel-excel.setColumn.md)([string](language.types.string.md) `$range`, [float](language.types.float.md) `$width`, [resource](language.types.resource.md) `$format` = ?)

public function [setRow](vtiful-kernel-excel.setRow.md)([string](language.types.string.md) `$range`, [float](language.types.float.md) `$height`, [resource](language.types.resource.md) `$format` = ?)

}

## Índice

- [Vtiful\Kernel\Excel::addSheet](vtiful-kernel-excel.addSheet.md) — Vtiful\Kernel\Excel addSheet
- [Vtiful\Kernel\Excel::autoFilter](vtiful-kernel-excel.autoFilter.md) — Vtiful\Kernel\Excel autoFilter
- [Vtiful\Kernel\Excel::constMemory](vtiful-kernel-excel.constMemory.md) — Vtiful\Kernel\Excel constMemory
- [Vtiful\Kernel\Excel::\_\_construct](vtiful-kernel-excel.construct.md) — Construtor de Vtiful\Kernel\Excel
- [Vtiful\Kernel\Excel::data](vtiful-kernel-excel.data.md) — Vtiful\Kernel\Excel data
- [Vtiful\Kernel\Excel::fileName](vtiful-kernel-excel.filename.md) — Vtiful\Kernel\Excel fileName
- [Vtiful\Kernel\Excel::getHandle](vtiful-kernel-excel.getHandle.md) — Vtiful\Kernel\Excel getHandle
- [Vtiful\Kernel\Excel::header](vtiful-kernel-excel.header.md) — Vtiful\Kernel\Excel header
- [Vtiful\Kernel\Excel::insertFormula](vtiful-kernel-excel.insertFormula.md) — Vtiful\Kernel\Excel insertFormula
- [Vtiful\Kernel\Excel::insertImage](vtiful-kernel-excel.insertImage.md) — Vtiful\Kernel\Excel insertImage
- [Vtiful\Kernel\Excel::insertText](vtiful-kernel-excel.insertText.md) — Vtiful\Kernel\Excel insertText
- [Vtiful\Kernel\Excel::mergeCells](vtiful-kernel-excel.mergeCells.md) — Vtiful\Kernel\Excel mergeCells
- [Vtiful\Kernel\Excel::output](vtiful-kernel-excel.output.md) — Vtiful\Kernel\Excel output
- [Vtiful\Kernel\Excel::setColumn](vtiful-kernel-excel.setColumn.md) — Vtiful\Kernel\Excel setColumn
- [Vtiful\Kernel\Excel::setRow](vtiful-kernel-excel.setRow.md) — Vtiful\Kernel\Excel setRow

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
