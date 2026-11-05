# A classe PriorityQueue

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.ds-priorityqueue.php

---

# A classe PriorityQueue

(PECL ds >= 1.0.0)

## Introdução

Uma PriorityQueue é muito semelhante a uma Queue. Valores são inseridos na fila
com uma prioridade atribuída, e o valor com a maior prioridade estará
sempre na frente da fila.

Implementado usando uma max heap.

> **Nota**:
>
> A ordem "Primeiro a entrar, primeiro a sair" é preservada para valores com a mesma prioridade.

> **Nota**:
>
> Iterar sobre uma PriorityQueue é destrutivo, equivalente a operações sucessivas de retirada até que a fila esteja vazia.

## Resumo da classe

class **Ds\PriorityQueue**
implements
[Ds\Collection](class.ds-collection.md) {

/\* Constantes \*/

const
[int](language.types.integer.md)
[MIN\_CAPACITY](class.ds-priorityqueue.md#ds-priorityqueue.constants.min-capacity) = 8;

/\* Métodos \*/

public function [allocate](ds-priorityqueue.allocate.md)([int](language.types.integer.md) `$capacity`): [void](language.types.void.md)

public function [capacity](ds-priorityqueue.capacity.md)(): [int](language.types.integer.md)

public function [clear](ds-priorityqueue.clear.md)(): [void](language.types.void.md)

public function [copy](ds-priorityqueue.copy.md)(): [Ds\PriorityQueue](class.ds-priorityqueue.md)

public function [isEmpty](ds-priorityqueue.isempty.md)(): [bool](language.types.boolean.md)

public function [peek](ds-priorityqueue.peek.md)(): [mixed](language.types.mixed.md)

public function [pop](ds-priorityqueue.pop.md)(): [mixed](language.types.mixed.md)

public function [push](ds-priorityqueue.push.md)([mixed](language.types.mixed.md) `$value`, [int](language.types.integer.md) `$priority`): [void](language.types.void.md)

public function [toArray](ds-priorityqueue.toarray.md)(): [array](language.types.array.md)

}

## Constantes predefinidas

**`Ds\PriorityQueue::MIN_CAPACITY`**

## Índice

- [Ds\PriorityQueue::allocate](ds-priorityqueue.allocate.md) — Aloca memória suficiente para uma capacidade requerida
- [Ds\PriorityQueue::capacity](ds-priorityqueue.capacity.md) — Retorna a capacidade atual
- [Ds\PriorityQueue::clear](ds-priorityqueue.clear.md) — Remove todos os valores
- [Ds\PriorityQueue::\_\_construct](ds-priorityqueue.construct.md) — Cria uma nova instância
- [Ds\PriorityQueue::copy](ds-priorityqueue.copy.md) — Retorna uma cópia rasa da fila
- [Ds\PriorityQueue::count](ds-priorityqueue.count.md) — Retorna o número de valores na fila
- [Ds\PriorityQueue::isEmpty](ds-priorityqueue.isempty.md) — Retorna se a fila está vazia
- [Ds\PriorityQueue::jsonSerialize](ds-priorityqueue.jsonserialize.md) — Retorna uma representação que pode ser convertida para JSON
- [Ds\PriorityQueue::peek](ds-priorityqueue.peek.md) — Retorna o valor na frente da fila
- [Ds\PriorityQueue::pop](ds-priorityqueue.pop.md) — Remove e retorna o valor com a maior prioridade
- [Ds\PriorityQueue::push](ds-priorityqueue.push.md) — Adiciona valores na fila
- [Ds\PriorityQueue::toArray](ds-priorityqueue.toarray.md) — Converte a fila para um array

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
