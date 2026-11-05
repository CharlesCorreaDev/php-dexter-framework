# A classe Queue

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.ds-queue.php

---

# A classe Queue

(PECL ds >= 1.0.0)

## Introdução

Uma Queue é uma coleção "primeiro a entrar, primeiro a sair" ou "FIFO" que permite
apenas acesso ao valor na frente da fila e itera nessa ordem,
destrutivamente.

## Resumo da classe

class **Ds\Queue**
implements
[Ds\Collection](class.ds-collection.md), [ArrayAccess](class.arrayaccess.md) {

/\* Constantes \*/

const
[int](language.types.integer.md)
[MIN\_CAPACITY](class.ds-queue.md#ds-queue.constants.min-capacity) = 8;

/\* Métodos \*/

public function [allocate](ds-queue.allocate.md)([int](language.types.integer.md) `$capacity`): [void](language.types.void.md)

public function [capacity](ds-queue.capacity.md)(): [int](language.types.integer.md)

public function [clear](ds-queue.clear.md)(): [void](language.types.void.md)

public function [copy](ds-queue.copy.md)(): [Ds\Queue](class.ds-queue.md)

public function [isEmpty](ds-queue.isempty.md)(): [bool](language.types.boolean.md)

public function [peek](ds-queue.peek.md)(): [mixed](language.types.mixed.md)

public function [pop](ds-queue.pop.md)(): [mixed](language.types.mixed.md)

public function [push](ds-queue.push.md)([mixed](language.types.mixed.md) `...$values`): [void](language.types.void.md)

public function [toArray](ds-queue.toarray.md)(): [array](language.types.array.md)

}

## Constantes predefinidas

**`Ds\Queue::MIN_CAPACITY`**

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL ds 1.3.0 | A classe agora implementa [ArrayAccess](class.arrayaccess.md). |

## Índice

- [Ds\Queue::allocate](ds-queue.allocate.md) — Aloca memória suficiente para uma capacidade requerida
- [Ds\Queue::capacity](ds-queue.capacity.md) — Retorna a capacidade atual
- [Ds\Queue::clear](ds-queue.clear.md) — Remove todos os valores
- [Ds\Queue::\_\_construct](ds-queue.construct.md) — Cria uma nova instância
- [Ds\Queue::copy](ds-queue.copy.md) — Retorna uma cópia rasa da fila
- [Ds\Queue::count](ds-queue.count.md) — Retorna o número de valores na fila
- [Ds\Queue::isEmpty](ds-queue.isempty.md) — Retorna se a fila está vazia
- [Ds\Queue::jsonSerialize](ds-queue.jsonserialize.md) — Retorna uma representação que pode ser convertida para JSON
- [Ds\Queue::peek](ds-queue.peek.md) — Retorna o valor no início da fila
- [Ds\Queue::pop](ds-queue.pop.md) — Remove e retorna o valor no início da fila
- [Ds\Queue::push](ds-queue.push.md) — Insere valores na fila
- [Ds\Queue::toArray](ds-queue.toarray.md) — Converte a fila para um array

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
