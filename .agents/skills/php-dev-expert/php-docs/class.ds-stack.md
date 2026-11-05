# A classe Stack

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.ds-stack.php

---

# A classe Stack

(PECL ds >= 1.0.0)

## Introdução

Uma Stack é uma coleção "último a entrar, primeiro a sair" ou "LIFO" que permite apenas
acesso ao valor no topo da estrutura e itera nessa ordem,
destrutivamente.

Usa internamente um [Ds\Vector](class.ds-vector.md).

## Resumo da classe

class **Ds\Stack**
implements
[Ds\Collection](class.ds-collection.md), [ArrayAccess](class.arrayaccess.md) {

/\* Métodos \*/

public function [allocate](ds-stack.allocate.md)([int](language.types.integer.md) `$capacity`): [void](language.types.void.md)

public function [capacity](ds-stack.capacity.md)(): [int](language.types.integer.md)

public function [clear](ds-stack.clear.md)(): [void](language.types.void.md)

public function [copy](ds-stack.copy.md)(): [Ds\Stack](class.ds-stack.md)

public function [isEmpty](ds-stack.isempty.md)(): [bool](language.types.boolean.md)

public function [peek](ds-stack.peek.md)(): [mixed](language.types.mixed.md)

public function [pop](ds-stack.pop.md)(): [mixed](language.types.mixed.md)

public function [push](ds-stack.push.md)([mixed](language.types.mixed.md) `...$values`): [void](language.types.void.md)

public function [toArray](ds-stack.toarray.md)(): [array](language.types.array.md)

}

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL ds 1.3.0 | A classe agora implementa [ArrayAccess](class.arrayaccess.md). |

## Índice

- [Ds\Stack::allocate](ds-stack.allocate.md) — Aloca memória suficiente para uma capacidade requerida
- [Ds\Stack::capacity](ds-stack.capacity.md) — Retorna a capacidade atual
- [Ds\Stack::clear](ds-stack.clear.md) — Remove todos os valores
- [Ds\Stack::\_\_construct](ds-stack.construct.md) — Cria uma nova instância
- [Ds\Stack::copy](ds-stack.copy.md) — Retorna uma cópia rasa da pilha
- [Ds\Stack::count](ds-stack.count.md) — Retorna o número de valores na pilha
- [Ds\Stack::isEmpty](ds-stack.isempty.md) — Retorna se a pilha está vazia
- [Ds\Stack::jsonSerialize](ds-stack.jsonserialize.md) — Retorna uma representação que pode ser convertida para JSON
- [Ds\Stack::peek](ds-stack.peek.md) — Retorna o valor no topo da pilha
- [Ds\Stack::pop](ds-stack.pop.md) — Remove e retorna o valor no topo da pilha
- [Ds\Stack::push](ds-stack.push.md) — Empurra valores para a pilha
- [Ds\Stack::toArray](ds-stack.toarray.md) — Converte a pilha para um array

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
