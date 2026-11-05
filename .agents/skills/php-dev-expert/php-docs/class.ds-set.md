# A classe Set

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.ds-set.php

---

# A classe Set

(PECL ds >= 1.0.0)

## Introdução

Um Set é uma sequência de valores únicos. Esta implementação usa a mesma tabela de hash
que [Ds\Map](class.ds-map.md), onde os valores são usados como chaves e o
valor mapeado é ignorado.

## Pontos Fortes

- Os valores podem ser de qualquer tipo, incluindo objetos.
- Suporta a sintaxe de array (colchetes).
- A ordem de inserção é preservada.
- Libera automaticamente a memória alocada quando seu tamanho fica baixo o suficiente.
- **add()**,
  **remove()** e
  **contains()** são todos O(1).

## Pontos Fracos

- Não suporta
  **push()**,
  **pop()**,
  **insert()**,
  **shift()** ou
  **unshift()**.
- **get()** é O(n) se houver valores excluídos
  no buffer antes do índice acessado, O(1) caso contrário.

## Resumo da classe

class **Ds\Set**
implements
[Ds\Collection](class.ds-collection.md), [ArrayAccess](class.arrayaccess.md) {

/\* Constantes \*/

const
[int](language.types.integer.md)
[MIN\_CAPACITY](class.ds-set.md#ds-set.constants.min-capacity) = 8;

/\* Métodos \*/

public function [add](ds-set.add.md)([mixed](language.types.mixed.md) `...$values`): [void](language.types.void.md)

public function [allocate](ds-set.allocate.md)([int](language.types.integer.md) `$capacity`): [void](language.types.void.md)

public function [capacity](ds-set.capacity.md)(): [int](language.types.integer.md)

public function [clear](ds-set.clear.md)(): [void](language.types.void.md)

public function [contains](ds-set.contains.md)([mixed](language.types.mixed.md) `...$values`): [bool](language.types.boolean.md)

public function [copy](ds-set.copy.md)(): [Ds\Set](class.ds-set.md)

public function [diff](ds-set.diff.md)([Ds\Set](class.ds-set.md) `$set`): [Ds\Set](class.ds-set.md)

public function [filter](ds-set.filter.md)([callable](language.types.callable.md) `$callback` = ?): [Ds\Set](class.ds-set.md)

public function [first](ds-set.first.md)(): [mixed](language.types.mixed.md)

public function [get](ds-set.get.md)([int](language.types.integer.md) `$index`): [mixed](language.types.mixed.md)

public function [intersect](ds-set.intersect.md)([Ds\Set](class.ds-set.md) `$set`): [Ds\Set](class.ds-set.md)

public function [isEmpty](ds-set.isempty.md)(): [bool](language.types.boolean.md)

public function [join](ds-set.join.md)([string](language.types.string.md) `$glue` = ?): [string](language.types.string.md)

public function [last](ds-set.last.md)(): [mixed](language.types.mixed.md)

public function [map](ds-set.map.md)([callable](language.types.callable.md) `$callback`): [Ds\Set](class.ds-set.md)

public function [merge](ds-set.merge.md)([mixed](language.types.mixed.md) `$values`): [Ds\Set](class.ds-set.md)

public function [reduce](ds-set.reduce.md)([callable](language.types.callable.md) `$callback`, [mixed](language.types.mixed.md) `$initial` = ?): [mixed](language.types.mixed.md)

public function [remove](ds-set.remove.md)([mixed](language.types.mixed.md) `...$values`): [void](language.types.void.md)

public function [reverse](ds-set.reverse.md)(): [void](language.types.void.md)

public function [reversed](ds-set.reversed.md)(): [Ds\Set](class.ds-set.md)

public function [slice](ds-set.slice.md)([int](language.types.integer.md) `$index`, [int](language.types.integer.md) `$length` = ?): [Ds\Set](class.ds-set.md)

public function [sort](ds-set.sort.md)([callable](language.types.callable.md) `$comparator` = ?): [void](language.types.void.md)

public function [sorted](ds-set.sorted.md)([callable](language.types.callable.md) `$comparator` = ?): [Ds\Set](class.ds-set.md)

public function [sum](ds-set.sum.md)(): [int](language.types.integer.md)|[float](language.types.float.md)

public function [toArray](ds-set.toarray.md)(): [array](language.types.array.md)

public function [union](ds-set.union.md)([Ds\Set](class.ds-set.md) `$set`): [Ds\Set](class.ds-set.md)

public function [xor](ds-set.xor.md)([Ds\Set](class.ds-set.md) `$set`): [Ds\Set](class.ds-set.md)

}

## Constantes predefinidas

**`Ds\Set::MIN_CAPACITY`**

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL ds 1.3.0 | A classe agora implementa [ArrayAccess](class.arrayaccess.md). |
| PECL ds 1.2.7 | Adicionado o método [Ds\Set::map()](ds-set.map.md). |
| PECL ds 1.2.0 | **`Ds\Set::MIN_CAPACITY`** foi alterada de 16 para 8. |

## Índice

- [Ds\Set::add](ds-set.add.md) — Adiciona valores ao conjunto
- [Ds\Set::allocate](ds-set.allocate.md) — Aloca memória suficiente para uma capacidade necessária
- [Ds\Set::capacity](ds-set.capacity.md) — Retorna a capacidade atual
- [Ds\Set::clear](ds-set.clear.md) — Remove todos os valores
- [Ds\Set::\_\_construct](ds-set.construct.md) — Cria uma nova instância
- [Ds\Set::contains](ds-set.contains.md) — Determina se o conjunto contém todos os valores
- [Ds\Set::copy](ds-set.copy.md) — Retorna uma cópia rasa do conjunto
- [Ds\Set::count](ds-set.count.md) — Retorna o número de valores no conjunto
- [Ds\Set::diff](ds-set.diff.md) — Cria um novo conjunto usando valores que não estão em outro conjunto
- [Ds\Set::filter](ds-set.filter.md) — Cria um novo conjunto usando um callable para
  determinar quais valores incluir
- [Ds\Set::first](ds-set.first.md) — Retorna o primeiro valor no conjunto
- [Ds\Set::get](ds-set.get.md) — Retorna o valor em um índice específico
- [Ds\Set::intersect](ds-set.intersect.md) — Cria um novo conjunto interseccionando valores com outro conjunto
- [Ds\Set::isEmpty](ds-set.isempty.md) — Retorna se o conjunto está vazio
- [Ds\Set::join](ds-set.join.md) — Junta todos os valores em uma string
- [Ds\Set::jsonSerialize](ds-set.jsonserialize.md) — Retorna uma representação que pode ser convertida para JSON
- [Ds\Set::last](ds-set.last.md) — Retorna o último valor no conjunto
- [Ds\Set::map](ds-set.map.md) — Retorna o resultado da aplicação de um retorno de chamada a cada valor
- [Ds\Set::merge](ds-set.merge.md) — Retorna o resultado da adição de todos os valores dados ao conjunto
- [Ds\Set::reduce](ds-set.reduce.md) — Reduz o conjunto a um único valor usando uma função de callback
- [Ds\Set::remove](ds-set.remove.md) — Remove todos os valores dados do conjunto
- [Ds\Set::reverse](ds-set.reverse.md) — Inverte o conjunto no local
- [Ds\Set::reversed](ds-set.reversed.md) — Retorna uma cópia invertida
- [Ds\Set::slice](ds-set.slice.md) — Retorna um subconjunto de um intervalo dado
- [Ds\Set::sort](ds-set.sort.md) — Ordena o conjunto no local
- [Ds\Set::sorted](ds-set.sorted.md) — Retorna uma cópia ordenada
- [Ds\Set::sum](ds-set.sum.md) — Retorna a soma de todos os valores no conjunto
- [Ds\Set::toArray](ds-set.toarray.md) — Converte o conjunto para um array
- [Ds\Set::union](ds-set.union.md) — Cria um novo conjunto usando valores da instância atual e de outro conjunto
- [Ds\Set::xor](ds-set.xor.md) — Cria um novo conjunto usando valores na instância atual ou em outro conjunto, mas não em ambos

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
