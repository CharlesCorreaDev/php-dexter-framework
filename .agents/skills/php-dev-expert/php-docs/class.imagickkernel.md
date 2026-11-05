# A classe ImagickKernel

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.imagickkernel.php

---

# A classe ImagickKernel

(PECL imagick >= 3.3.0)

## Introdução

## Resumo da classe

class **ImagickKernel**
{

/\* Métodos \*/

public function [addKernel](imagickkernel.addkernel.md)([ImagickKernel](class.imagickkernel.md) `$ImagickKernel`): [void](language.types.void.md)

public function [addUnityKernel](imagickkernel.addunitykernel.md)([float](language.types.float.md) `$scale`): [void](language.types.void.md)

public static function [fromBuiltin](imagickkernel.frombuiltin.md)([int](language.types.integer.md) `$kernelType`, [string](language.types.string.md) `$kernelString`): [ImagickKernel](class.imagickkernel.md)

public static function [fromMatrix](imagickkernel.frommatrix.md)([array](language.types.array.md) `$matrix`, [array](language.types.array.md) `$origin` = ?): [ImagickKernel](class.imagickkernel.md)

public function [getMatrix](imagickkernel.getmatrix.md)(): [array](language.types.array.md)

public function [scale](imagickkernel.scale.md)([float](language.types.float.md) `$scale`, [int](language.types.integer.md) `$normalizeFlag` = ?): [void](language.types.void.md)

public function [separate](imagickkernel.separate.md)(): [array](language.types.array.md)

}

## Índice

- [ImagickKernel::addKernel](imagickkernel.addkernel.md) — Anexa outro kernel a uma lista de kernels
- [ImagickKernel::addUnityKernel](imagickkernel.addunitykernel.md) — Adiciona um Kernel Unity à lista de kernels
- [ImagickKernel::fromBuiltIn](imagickkernel.frombuiltin.md) — Cria um kernel a partir de um kernel integrado
- [ImagickKernel::fromMatrix](imagickkernel.frommatrix.md) — Crie um kernel a partir de uma matriz 2D de valores
- [ImagickKernel::getMatrix](imagickkernel.getmatrix.md) — Obtém a matriz 2D de valores usada neste kernel
- [ImagickKernel::scale](imagickkernel.scale.md) — Dimensiona uma lista de kernel pela quantidade especificada
- [ImagickKernel::separate](imagickkernel.separate.md) — Separa um conjunto vinculado de kernels e retorna um array de ImagickKernels

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
