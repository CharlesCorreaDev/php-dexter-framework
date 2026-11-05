# A classe SplPriorityQueue

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.splpriorityqueue.php

---

# A classe SplPriorityQueue

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

## Introdução

A classe SplPriorityQueue fornece as principais funcionalidades de uma
fila priorizada, implementada usando um heap máximo.

> **Nota**:
>
> A ordem dos elementos com prioridade idêntica é *indefinida*.
> Pode diferir da ordem em que foram inseridos.

## Resumo da classe

class ****SplPriorityQueue****
implements
[Iterator](class.iterator.md),
[Countable](class.countable.md) {

/\* Constantes \*/

public
const
[int](language.types.integer.md)
[EXTR\_BOTH](class.splpriorityqueue.md#splpriorityqueue.constants.extr-both);

public
const
[int](language.types.integer.md)
[EXTR\_PRIORITY](class.splpriorityqueue.md#splpriorityqueue.constants.extr-priority);

public
const
[int](language.types.integer.md)
[EXTR\_DATA](class.splpriorityqueue.md#splpriorityqueue.constants.extr-data);

/\* Métodos \*/

public function [compare](splpriorityqueue.compare.md)([mixed](language.types.mixed.md) `$priority1`, [mixed](language.types.mixed.md) `$priority2`): [int](language.types.integer.md)

public function [count](splpriorityqueue.count.md)(): [int](language.types.integer.md)

public function [current](splpriorityqueue.current.md)(): [mixed](language.types.mixed.md)

public function [extract](splpriorityqueue.extract.md)(): [mixed](language.types.mixed.md)

public function [getExtractFlags](splpriorityqueue.getextractflags.md)(): [int](language.types.integer.md)

public function [insert](splpriorityqueue.insert.md)([mixed](language.types.mixed.md) `$value`, [mixed](language.types.mixed.md) `$priority`): [true](language.types.singleton.md)

public function [isCorrupted](splpriorityqueue.iscorrupted.md)(): [bool](language.types.boolean.md)

public function [isEmpty](splpriorityqueue.isempty.md)(): [bool](language.types.boolean.md)

public function [key](splpriorityqueue.key.md)(): [int](language.types.integer.md)

public function [next](splpriorityqueue.next.md)(): [void](language.types.void.md)

public function [recoverFromCorruption](splpriorityqueue.recoverfromcorruption.md)(): [true](language.types.singleton.md)

public function [rewind](splpriorityqueue.rewind.md)(): [void](language.types.void.md)

public function [setExtractFlags](splpriorityqueue.setextractflags.md)([int](language.types.integer.md) `$flags`): [int](language.types.integer.md)

public function [top](splpriorityqueue.top.md)(): [mixed](language.types.mixed.md)

public function [valid](splpriorityqueue.valid.md)(): [bool](language.types.boolean.md)

}

## Constantes predefinidas

**`SplPriorityQueue::EXTR_BOTH`**

**`SplPriorityQueue::EXTR_PRIORITY`**

**`SplPriorityQueue::EXTR_DATA`**

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | As constantes de classe agora são tipadas. |

## Índice

- [SplPriorityQueue::compare](splpriorityqueue.compare.md) — Comparar prioridades para colocar elementos corretamente no heap ao subir
- [SplPriorityQueue::count](splpriorityqueue.count.md) — Conta o número de elementos na fila
- [SplPriorityQueue::current](splpriorityqueue.current.md) — Retorna o nó atual apontado pelo iterador
- [SplPriorityQueue::extract](splpriorityqueue.extract.md) — Extrai um nó do topo do heap e desloca para cima
- [SplPriorityQueue::getExtractFlags](splpriorityqueue.getextractflags.md) — Obtém as opções de extração
- [SplPriorityQueue::insert](splpriorityqueue.insert.md) — Insere um elemento na fila deslocando-o para cima
- [SplPriorityQueue::isCorrupted](splpriorityqueue.iscorrupted.md) — Indica se a fila de prioridade está em um estado corrompido
- [SplPriorityQueue::isEmpty](splpriorityqueue.isempty.md) — Verifica se a fila está vazia
- [SplPriorityQueue::key](splpriorityqueue.key.md) — Retorna o índice do nó atual
- [SplPriorityQueue::next](splpriorityqueue.next.md) — Move para o próximo nó
- [SplPriorityQueue::recoverFromCorruption](splpriorityqueue.recoverfromcorruption.md) — Recupera do estado corrompido e permite outras ações na fila
- [SplPriorityQueue::rewind](splpriorityqueue.rewind.md) — Rebobina o iterador de volta ao início (sem operação)
- [SplPriorityQueue::setExtractFlags](splpriorityqueue.setextractflags.md) — Define o modo de extração
- [SplPriorityQueue::top](splpriorityqueue.top.md) — Observa o nó do topo da fila
- [SplPriorityQueue::valid](splpriorityqueue.valid.md) — Verifica se a fila contém mais nós

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
