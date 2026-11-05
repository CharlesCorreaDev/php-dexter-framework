# A classe SplHeap

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.splheap.php

---

# A classe SplHeap

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

## Introdução

A classe SplHeap fornece as principais funcionalidades de um Heap.

## Resumo da classe

abstract
class ****SplHeap****
implements
[Iterator](class.iterator.md),
[Countable](class.countable.md) {

/\* Métodos \*/

protected function [compare](splheap.compare.md)([mixed](language.types.mixed.md) `$value1`, [mixed](language.types.mixed.md) `$value2`): [int](language.types.integer.md)

public function [count](splheap.count.md)(): [int](language.types.integer.md)

public function [current](splheap.current.md)(): [mixed](language.types.mixed.md)

public function [extract](splheap.extract.md)(): [mixed](language.types.mixed.md)

public function [insert](splheap.insert.md)([mixed](language.types.mixed.md) `$value`): [true](language.types.singleton.md)

public function [isCorrupted](splheap.iscorrupted.md)(): [bool](language.types.boolean.md)

public function [isEmpty](splheap.isempty.md)(): [bool](language.types.boolean.md)

public function [key](splheap.key.md)(): [int](language.types.integer.md)

public function [next](splheap.next.md)(): [void](language.types.void.md)

public function [recoverFromCorruption](splheap.recoverfromcorruption.md)(): [true](language.types.singleton.md)

public function [rewind](splheap.rewind.md)(): [void](language.types.void.md)

public function [top](splheap.top.md)(): [mixed](language.types.mixed.md)

public function [valid](splheap.valid.md)(): [bool](language.types.boolean.md)

}

## Índice

- [SplHeap::compare](splheap.compare.md) — Compara elementos para colocá-los corretamente no heap enquanto faz o ajuste ascendente
- [SplHeap::count](splheap.count.md) — Conta o número de elementos no heap
- [SplHeap::current](splheap.current.md) — Retorna o nó atual apontado pelo iterador
- [SplHeap::extract](splheap.extract.md) — Extrai um nó do topo do heap e ajusta para cima
- [SplHeap::insert](splheap.insert.md) — Insere um elemento no heap, ajustando-o para cima
- [SplHeap::isCorrupted](splheap.iscorrupted.md) — Indica se o heap está em um estado corrompido
- [SplHeap::isEmpty](splheap.isempty.md) — Verifica se o heap está vazio
- [SplHeap::key](splheap.key.md) — Retorna o índice do nó atual
- [SplHeap::next](splheap.next.md) — Move para o próximo nó
- [SplHeap::recoverFromCorruption](splheap.recoverfromcorruption.md) — Recupera do estado corrompido e permite outras ações no heap
- [SplHeap::rewind](splheap.rewind.md) — Rebobina o iterador de volta ao início (sem ação)
- [SplHeap::top](splheap.top.md) — Espreita o nó do topo da heap
- [SplHeap::valid](splheap.valid.md) — Verifica se a heap contém mais nós

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
