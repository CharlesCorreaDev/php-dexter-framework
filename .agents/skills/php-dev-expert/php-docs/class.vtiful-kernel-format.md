# A classe Vtiful\Kernel\Format

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.vtiful-kernel-format.php

---

# A classe Vtiful\Kernel\Format

(PECL xlswriter >= 1.2.1)

## Introdução

Cria um objeto de formato de célula

## Resumo da classe

class **Vtiful\Kernel\Format**
{

/\* Constantes \*/

const
[int](language.types.integer.md)
[FORMAT\_ALIGN\_LEFT](class.vtiful-kernel-format.md#vtiful-kernel-format.constants.format-align-left) = 1;

const
[int](language.types.integer.md)
[FORMAT\_ALIGN\_CENTER](class.vtiful-kernel-format.md#vtiful-kernel-format.constants.format-align-center) = 2;

const
[int](language.types.integer.md)
[FORMAT\_ALIGN\_RIGHT](class.vtiful-kernel-format.md#vtiful-kernel-format.constants.format-align-right) = 3;

const
[int](language.types.integer.md)
[FORMAT\_ALIGN\_FILL](class.vtiful-kernel-format.md#vtiful-kernel-format.constants.format-align-fill) = 4;

const
[int](language.types.integer.md)
[FORMAT\_ALIGN\_JUSTIFY](class.vtiful-kernel-format.md#vtiful-kernel-format.constants.format-align-justify) = 5;

const
[int](language.types.integer.md)
[FORMAT\_ALIGN\_CENTER\_ACROSS](class.vtiful-kernel-format.md#vtiful-kernel-format.constants.format-align-center-across) = 6;

const
[int](language.types.integer.md)
[FORMAT\_ALIGN\_DISTRIBUTED](class.vtiful-kernel-format.md#vtiful-kernel-format.constants.format-align-distributed) = 7;

const
[int](language.types.integer.md)
[FORMAT\_ALIGN\_VERTICAL\_TOP](class.vtiful-kernel-format.md#vtiful-kernel-format.constants.format-align-vertical-top) = 8;

const
[int](language.types.integer.md)
[FORMAT\_ALIGN\_VERTICAL\_BOTTOM](class.vtiful-kernel-format.md#vtiful-kernel-format.constants.format-align-vertical-bottom) = 9;

const
[int](language.types.integer.md)
[FORMAT\_ALIGN\_VERTICAL\_CENTER](class.vtiful-kernel-format.md#vtiful-kernel-format.constants.format-align-vertical-center) = 10;

const
[int](language.types.integer.md)
[FORMAT\_ALIGN\_VERTICAL\_JUSTIFY](class.vtiful-kernel-format.md#vtiful-kernel-format.constants.format-align-vertical-justify) = 11;

const
[int](language.types.integer.md)
[FORMAT\_ALIGN\_VERTICAL\_DISTRIBUTED](class.vtiful-kernel-format.md#vtiful-kernel-format.constants.format-align-vertical-distributed) = 12;

const
[int](language.types.integer.md)
[UNDERLINE\_SINGLE](class.vtiful-kernel-format.md#vtiful-kernel-format.constants.underline-single) = 1;

const
[int](language.types.integer.md)
[UNDERLINE\_DOUBLE](class.vtiful-kernel-format.md#vtiful-kernel-format.constants.underline-double) = 2;

const
[int](language.types.integer.md)
[UNDERLINE\_SINGLE\_ACCOUNTING](class.vtiful-kernel-format.md#vtiful-kernel-format.constants.underline-single-accounting) = 3;

const
[int](language.types.integer.md)
[UNDERLINE\_DOUBLE\_ACCOUNTING](class.vtiful-kernel-format.md#vtiful-kernel-format.constants.underline-double-accounting) = 4;

/\* Métodos \*/

public function [align](vtiful-kernel-format.align.md)([resource](language.types.resource.md) `$handle`, [int](language.types.integer.md) `$style`)

public function [bold](vtiful-kernel-format.bold.md)([resource](language.types.resource.md) `$handle`)

public function [italic](vtiful-kernel-format.italic.md)([resource](language.types.resource.md) `$handle`)

public function [underline](vtiful-kernel-format.underline.md)([resource](language.types.resource.md) `$handle`, [int](language.types.integer.md) `$style`)

}

## Constantes predefinidas

**`Vtiful\Kernel\Format::FORMAT_ALIGN_LEFT`**

**`Vtiful\Kernel\Format::FORMAT_ALIGN_CENTER`**

**`Vtiful\Kernel\Format::FORMAT_ALIGN_RIGHT`**

**`Vtiful\Kernel\Format::FORMAT_ALIGN_FILL`**

**`Vtiful\Kernel\Format::FORMAT_ALIGN_JUSTIFY`**

**`Vtiful\Kernel\Format::FORMAT_ALIGN_CENTER_ACROSS`**

**`Vtiful\Kernel\Format::FORMAT_ALIGN_DISTRIBUTED`**

**`Vtiful\Kernel\Format::FORMAT_ALIGN_VERTICAL_TOP`**

**`Vtiful\Kernel\Format::FORMAT_ALIGN_VERTICAL_BOTTOM`**

**`Vtiful\Kernel\Format::FORMAT_ALIGN_VERTICAL_CENTER`**

**`Vtiful\Kernel\Format::FORMAT_ALIGN_VERTICAL_JUSTIFY`**

**`Vtiful\Kernel\Format::FORMAT_ALIGN_VERTICAL_DISTRIBUTED`**

**`Vtiful\Kernel\Format::UNDERLINE_SINGLE`**

**`Vtiful\Kernel\Format::UNDERLINE_DOUBLE`**

**`Vtiful\Kernel\Format::UNDERLINE_SINGLE_ACCOUNTING`**

**`Vtiful\Kernel\Format::UNDERLINE_DOUBLE_ACCOUNTING`**

## Índice

- [Vtiful\Kernel\Format::align](vtiful-kernel-format.align.md) — Alinhamento de Vtiful\Kernel\Format
- [Vtiful\Kernel\Format::bold](vtiful-kernel-format.bold.md) — Vtiful\Kernel\Format negrito
- [Vtiful\Kernel\Format::italic](vtiful-kernel-format.italic.md) — Vtiful\Kernel\Format itálico
- [Vtiful\Kernel\Format::underline](vtiful-kernel-format.underline.md) — Vtiful\Kernel\Format sublinhado

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
