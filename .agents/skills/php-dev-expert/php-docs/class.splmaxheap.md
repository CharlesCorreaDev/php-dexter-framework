# A classe SplMaxHeap

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.splmaxheap.php

---

# A classe SplMaxHeap

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

## Introdução

A classe SplMaxHeap fornece as principais funcionalidades de um heap, mantendo o máximo no topo.

## Resumo da classe

class ****SplMaxHeap****
extends
[SplHeap](class.splheap.md)
{

/\* Métodos \*/

protected function [compare](splmaxheap.compare.md)([mixed](language.types.mixed.md) `$value1`, [mixed](language.types.mixed.md) `$value2`): [int](language.types.integer.md)

/\* Métodos herdados \*/

protected function [SplHeap::compare](splheap.compare.md)([mixed](language.types.mixed.md) `$value1`, [mixed](language.types.mixed.md) `$value2`): [int](language.types.integer.md)

public function [SplHeap::count](splheap.count.md)(): [int](language.types.integer.md)

public function [SplHeap::current](splheap.current.md)(): [mixed](language.types.mixed.md)

public function [SplHeap::extract](splheap.extract.md)(): [mixed](language.types.mixed.md)

public function [SplHeap::insert](splheap.insert.md)([mixed](language.types.mixed.md) `$value`): [true](language.types.singleton.md)

public function [SplHeap::isCorrupted](splheap.iscorrupted.md)(): [bool](language.types.boolean.md)

public function [SplHeap::isEmpty](splheap.isempty.md)(): [bool](language.types.boolean.md)

public function [SplHeap::key](splheap.key.md)(): [int](language.types.integer.md)

public function [SplHeap::next](splheap.next.md)(): [void](language.types.void.md)

public function [SplHeap::recoverFromCorruption](splheap.recoverfromcorruption.md)(): [true](language.types.singleton.md)

public function [SplHeap::rewind](splheap.rewind.md)(): [void](language.types.void.md)

public function [SplHeap::top](splheap.top.md)(): [mixed](language.types.mixed.md)

public function [SplHeap::valid](splheap.valid.md)(): [bool](language.types.boolean.md)

}

## Índice

- [SplMaxHeap::compare](splmaxheap.compare.md) — Compara elementos para colocá-los corretamente na heap enquanto faz o ajuste ascendente

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
