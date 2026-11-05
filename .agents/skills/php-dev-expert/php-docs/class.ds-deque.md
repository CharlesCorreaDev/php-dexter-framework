# A classe Deque

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.ds-deque.php

---

# A classe Deque

(PECL ds >= 1.0.0)

## Introdução

Um Deque (pronunciado "deck") é uma sequência de valores
em um buffer contíguo que cresce e diminui automaticamente.
O nome é uma abreviação comum de "double-ended queue" e é usado
internamente por [Ds\Queue](class.ds-queue.md).

Dois ponteiros são usados para acompanhar um head e um tail. Os ponteiros podem
"envolver" a extremidade do buffer, o que evita a necessidade de mover outros
valores para criar espaço. Isso torna shift e unshift muito rápidos — 
algo que um [Ds\Vector](class.ds-vector.md) não pode competir.

Acesso a um valor pelo índice requer uma tradução entre o índice e sua
posição correspondente no buffer: `((head + position) % capacity)`.

## Pontos Fortes

- Suporta a sintaxe de array (colchetes).
- Utiliza menos memória geral do que um [array](language.types.array.md) para o mesmo número de valores.
- Libera automaticamente a memória alocada quando seu tamanho diminui o suficiente.
- **get()**,
  **set()**,
  **push()**,
  **pop()**,
  **shift()** e
  **unshift()** são todos O(1).

## Pontos Fracos

- A capacidade deve ser uma potência de 2.
- **insert()** e
  **remove()** são O(n).

## Resumo da classe

class **Ds\Deque**
implements
[Ds\Sequence](class.ds-sequence.md), [ArrayAccess](class.arrayaccess.md) {

/\* Constantes \*/

const
[int](language.types.integer.md)
[MIN\_CAPACITY](class.ds-deque.md#ds-deque.constants.min-capacity) = 8;

/\* Métodos \*/

public function [allocate](ds-deque.allocate.md)([int](language.types.integer.md) `$capacity`): [void](language.types.void.md)

public function [apply](ds-deque.apply.md)([callable](language.types.callable.md) `$callback`): [void](language.types.void.md)

public function [capacity](ds-deque.capacity.md)(): [int](language.types.integer.md)

public function [clear](ds-deque.clear.md)(): [void](language.types.void.md)

public function [contains](ds-deque.contains.md)([mixed](language.types.mixed.md) `...$values`): [bool](language.types.boolean.md)

public function [copy](ds-deque.copy.md)(): [Ds\Deque](class.ds-deque.md)

public function [filter](ds-deque.filter.md)([callable](language.types.callable.md) `$callback` = ?): [Ds\Deque](class.ds-deque.md)

public function [find](ds-deque.find.md)([mixed](language.types.mixed.md) `$value`): [mixed](language.types.mixed.md)

public function [first](ds-deque.first.md)(): [mixed](language.types.mixed.md)

public function [get](ds-deque.get.md)([int](language.types.integer.md) `$index`): [mixed](language.types.mixed.md)

public function [insert](ds-deque.insert.md)([int](language.types.integer.md) `$index`, [mixed](language.types.mixed.md) `...$values`): [void](language.types.void.md)

public function [isEmpty](ds-deque.isempty.md)(): [bool](language.types.boolean.md)

public function [join](ds-deque.join.md)([string](language.types.string.md) `$glue` = ?): [string](language.types.string.md)

public function [last](ds-deque.last.md)(): [mixed](language.types.mixed.md)

public function [map](ds-deque.map.md)([callable](language.types.callable.md) `$callback`): [Ds\Deque](class.ds-deque.md)

public function [merge](ds-deque.merge.md)([mixed](language.types.mixed.md) `$values`): [Ds\Deque](class.ds-deque.md)

public function [pop](ds-deque.pop.md)(): [mixed](language.types.mixed.md)

public function [push](ds-deque.push.md)([mixed](language.types.mixed.md) `...$values`): [void](language.types.void.md)

public function [reduce](ds-deque.reduce.md)([callable](language.types.callable.md) `$callback`, [mixed](language.types.mixed.md) `$initial` = ?): [mixed](language.types.mixed.md)

public function [remove](ds-deque.remove.md)([int](language.types.integer.md) `$index`): [mixed](language.types.mixed.md)

public function [reverse](ds-deque.reverse.md)(): [void](language.types.void.md)

public function [reversed](ds-deque.reversed.md)(): [Ds\Deque](class.ds-deque.md)

public function [rotate](ds-deque.rotate.md)([int](language.types.integer.md) `$rotations`): [void](language.types.void.md)

public function [set](ds-deque.set.md)([int](language.types.integer.md) `$index`, [mixed](language.types.mixed.md) `$value`): [void](language.types.void.md)

public function [shift](ds-deque.shift.md)(): [mixed](language.types.mixed.md)

public function [slice](ds-deque.slice.md)([int](language.types.integer.md) `$index`, [int](language.types.integer.md) `$length` = ?): [Ds\Deque](class.ds-deque.md)

public function [sort](ds-deque.sort.md)([callable](language.types.callable.md) `$comparator` = ?): [void](language.types.void.md)

public function [sorted](ds-deque.sorted.md)([callable](language.types.callable.md) `$comparator` = ?): [Ds\Deque](class.ds-deque.md)

public function [sum](ds-deque.sum.md)(): [int](language.types.integer.md)|[float](language.types.float.md)

public function [toArray](ds-deque.toarray.md)(): [array](language.types.array.md)

public function [unshift](ds-deque.unshift.md)([mixed](language.types.mixed.md) `$values` = ?): [void](language.types.void.md)

}

## Constantes predefinidas

**`Ds\Deque::MIN_CAPACITY`**

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL ds 1.3.0 | A classe agora implementa [ArrayAccess](class.arrayaccess.md). |

## Índice

- [Ds\Deque::allocate](ds-deque.allocate.md) — Alloca memória suficiente para uma capacidade necessária
- [Ds\Deque::apply](ds-deque.apply.md) — Atualiza todos os valores aplicando uma função de retorno de chamada a cada valor
- [Ds\Deque::capacity](ds-deque.capacity.md) — Retorna a capacidade atual
- [Ds\Deque::clear](ds-deque.clear.md) — Remove todos os valores do deque
- [Ds\Deque::\_\_construct](ds-deque.construct.md) — Cria uma nova instância
- [Ds\Deque::contains](ds-deque.contains.md) — Determina se a deque contém os valores fornecidos
- [Ds\Deque::copy](ds-deque.copy.md) — Retorna uma cópia rasa da deque
- [Ds\Deque::count](ds-deque.count.md) — Retorna o número de valores na coleção
- [Ds\Deque::filter](ds-deque.filter.md) — Cria um novo deque usando um callable para
  determinar quais valores incluir
- [Ds\Deque::find](ds-deque.find.md) — Tenta encontrar o índice de um valor
- [Ds\Deque::first](ds-deque.first.md) — Retorna o primeiro valor na deque
- [Ds\Deque::get](ds-deque.get.md) — Retorna o valor em um índice específico
- [Ds\Deque::insert](ds-deque.insert.md) — Insere valores em um índice específico
- [Ds\Deque::isEmpty](ds-deque.isempty.md) — Retorna se o deque está vazio
- [Ds\Deque::join](ds-deque.join.md) — Une todos os valores como uma string
- [Ds\Deque::jsonSerialize](ds-deque.jsonserialize.md) — Retorna uma representação que pode ser convertida para JSON
- [Ds\Deque::last](ds-deque.last.md) — Retorna o último valor
- [Ds\Deque::map](ds-deque.map.md) — Retorna o resultado de aplicar uma função de retorno de chamada a cada valor
- [Ds\Deque::merge](ds-deque.merge.md) — Retorna o resultado de adicionar todos os valores dados à deque
- [Ds\Deque::pop](ds-deque.pop.md) — Remove e retorna o último valor
- [Ds\Deque::push](ds-deque.push.md) — Adiciona valores ao final do deque
- [Ds\Deque::reduce](ds-deque.reduce.md) — Reduz o deque a um único valor usando uma função de retorno de chamada
- [Ds\Deque::remove](ds-deque.remove.md) — Remove e retorna um valor pelo índice
- [Ds\Deque::reverse](ds-deque.reverse.md) — Inverte a deque no local
- [Ds\Deque::reversed](ds-deque.reversed.md) — Retorna uma cópia invertida
- [Ds\Deque::rotate](ds-deque.rotate.md) — Rotaciona a deque por um número dado de rotações
- [Ds\Deque::set](ds-deque.set.md) — Atualiza um valor em um índice específico
- [Ds\Deque::shift](ds-deque.shift.md) — Remove e retorna o primeiro valor
- [Ds\Deque::slice](ds-deque.slice.md) — Retorna uma sub-deque de um determinado intervalo
- [Ds\Deque::sort](ds-deque.sort.md) — Ordena a deque no local
- [Ds\Deque::sorted](ds-deque.sorted.md) — Retorna uma cópia ordenada
- [Ds\Deque::sum](ds-deque.sum.md) — Retorna a soma de todos os valores na deque
- [Ds\Deque::toArray](ds-deque.toarray.md) — Converte a deque para um array.
- [Ds\Deque::unshift](ds-deque.unshift.md) — Adiciona valores no início da deque

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
