# A classe Vector

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.ds-vector.php

---

# A classe Vector

(PECL ds >= 1.0.0)

## Introdução

Um Vector é uma sequência de valores em um buffer contíguo que cresce e
diminui automaticamente. É a estrutura sequencial mais eficiente porque
o índice de um valor é um mapeamento direto para seu índice no buffer, e o
fator de crescimento não está vinculado a um múltiplo ou expoente específico.

## Pontos Fortes

- Suporta a sintaxe de array (colchetes).
- Usa menos memória geral do que um [array](language.types.array.md) para o mesmo número de valores.
- Libera automaticamente a memória alocada quando seu tamanho diminui o suficiente.
- A capacidade não precisa ser uma potência de 2.
- **get()**,
  **set()**,
  **push()**,
  **pop()** são todos O(1).

## Pontos Fracos

- **shift()**,
  **unshift()**,
  **insert()** e
  **remove()** são todos O(n).

## Resumo da classe

class **Ds\Vector**
implements [Ds\Sequence](class.ds-sequence.md), [ArrayAccess](class.arrayaccess.md) {

/\* Constantes \*/

const
[int](language.types.integer.md)
[MIN\_CAPACITY](class.ds-vector.md#ds-vector.constants.min-capacity) = 8;

/\* Métodos \*/

public function [allocate](ds-vector.allocate.md)([int](language.types.integer.md) `$capacity`): [void](language.types.void.md)

public function [apply](ds-vector.apply.md)([callable](language.types.callable.md) `$callback`): [void](language.types.void.md)

public function [capacity](ds-vector.capacity.md)(): [int](language.types.integer.md)

public function [clear](ds-vector.clear.md)(): [void](language.types.void.md)

public function [contains](ds-vector.contains.md)([mixed](language.types.mixed.md) `...$values`): [bool](language.types.boolean.md)

public function [copy](ds-vector.copy.md)(): [Ds\Vector](class.ds-vector.md)

public function [filter](ds-vector.filter.md)([callable](language.types.callable.md) `$callback` = ?): [Ds\Vector](class.ds-vector.md)

public function [find](ds-vector.find.md)([mixed](language.types.mixed.md) `$value`): [mixed](language.types.mixed.md)

public function [first](ds-vector.first.md)(): [mixed](language.types.mixed.md)

public function [get](ds-vector.get.md)([int](language.types.integer.md) `$index`): [mixed](language.types.mixed.md)

public function [insert](ds-vector.insert.md)([int](language.types.integer.md) `$index`, [mixed](language.types.mixed.md) `...$values`): [void](language.types.void.md)

public function [isEmpty](ds-vector.isempty.md)(): [bool](language.types.boolean.md)

public function [join](ds-vector.join.md)([string](language.types.string.md) `$glue` = ?): [string](language.types.string.md)

public function [last](ds-vector.last.md)(): [mixed](language.types.mixed.md)

public function [map](ds-vector.map.md)([callable](language.types.callable.md) `$callback`): [Ds\Vector](class.ds-vector.md)

public function [merge](ds-vector.merge.md)([mixed](language.types.mixed.md) `$values`): [Ds\Vector](class.ds-vector.md)

public function [pop](ds-vector.pop.md)(): [mixed](language.types.mixed.md)

public function [push](ds-vector.push.md)([mixed](language.types.mixed.md) `...$values`): [void](language.types.void.md)

public function [reduce](ds-vector.reduce.md)([callable](language.types.callable.md) `$callback`, [mixed](language.types.mixed.md) `$initial` = ?): [mixed](language.types.mixed.md)

public function [remove](ds-vector.remove.md)([int](language.types.integer.md) `$index`): [mixed](language.types.mixed.md)

public function [reverse](ds-vector.reverse.md)(): [void](language.types.void.md)

public function [reversed](ds-vector.reversed.md)(): [Ds\Vector](class.ds-vector.md)

public function [rotate](ds-vector.rotate.md)([int](language.types.integer.md) `$rotations`): [void](language.types.void.md)

public function [set](ds-vector.set.md)([int](language.types.integer.md) `$index`, [mixed](language.types.mixed.md) `$value`): [void](language.types.void.md)

public function [shift](ds-vector.shift.md)(): [mixed](language.types.mixed.md)

public function [slice](ds-vector.slice.md)([int](language.types.integer.md) `$index`, [int](language.types.integer.md) `$length` = ?): [Ds\Vector](class.ds-vector.md)

public function [sort](ds-vector.sort.md)([callable](language.types.callable.md) `$comparator` = ?): [void](language.types.void.md)

public function [sorted](ds-vector.sorted.md)([callable](language.types.callable.md) `$comparator` = ?): [Ds\Vector](class.ds-vector.md)

public function [sum](ds-vector.sum.md)(): [int](language.types.integer.md)|[float](language.types.float.md)

public function [toArray](ds-vector.toarray.md)(): [array](language.types.array.md)

public function [unshift](ds-vector.unshift.md)([mixed](language.types.mixed.md) `$values` = ?): [void](language.types.void.md)

}

## Constantes predefinidas

**`Ds\Vector::MIN_CAPACITY`**

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL ds 1.3.0 | A classe agora implementa [ArrayAccess](class.arrayaccess.md). |
| PECL ds 1.2.0 | **`Ds\Vector::MIN_CAPACITY`** foi alterada de 10 para 8. |

## Índice

- [Ds\Vector::allocate](ds-vector.allocate.md) — Aloca memória suficiente para uma capacidade requerida
- [Ds\Vector::apply](ds-vector.apply.md) — Atualiza todos os valores aplicando uma função de callback a cada valor
- [Ds\Vector::capacity](ds-vector.capacity.md) — Retorna a capacidade atual
- [Ds\Vector::clear](ds-vector.clear.md) — Remove todos os valores
- [Ds\Vector::\_\_construct](ds-vector.construct.md) — Cria uma nova instância
- [Ds\Vector::contains](ds-vector.contains.md) — Determina se o vetor contém os valores fornecidos
- [Ds\Vector::copy](ds-vector.copy.md) — Retorna uma cópia rasa do vetor
- [Ds\Vector::count](ds-vector.count.md) — Retorna o número de valores na coleção
- [Ds\Vector::filter](ds-vector.filter.md) — Cria um novo vetor usando um callable para
  determinar quais valores incluir.
- [Ds\Vector::find](ds-vector.find.md) — Tenta encontrar o índice de um valor
- [Ds\Vector::first](ds-vector.first.md) — Retorna o primeiro valor no vetor
- [Ds\Vector::get](ds-vector.get.md) — Retorna o valor em um índice específico
- [Ds\Vector::insert](ds-vector.insert.md) — Insere valores em um índice específico
- [Ds\Vector::isEmpty](ds-vector.isempty.md) — Retorna se o vetor está vazio
- [Ds\Vector::join](ds-vector.join.md) — Junta todos os valores como uma string
- [Ds\Vector::jsonSerialize](ds-vector.jsonserialize.md) — Retorna uma representação que pode ser convertida para JSON
- [Ds\Vector::last](ds-vector.last.md) — Retorna o último valor
- [Ds\Vector::map](ds-vector.map.md) — Retorna o resultado da aplicação de uma função de callback a cada valor
- [Ds\Vector::merge](ds-vector.merge.md) — Retorna o resultado da adição de todos os valores fornecidos ao vetor
- [Ds\Vector::pop](ds-vector.pop.md) — Remove e retorna o último valor
- [Ds\Vector::push](ds-vector.push.md) — Adiciona valores ao final do vetor
- [Ds\Vector::reduce](ds-vector.reduce.md) — Reduz o vetor a um único valor usando uma função de callback
- [Ds\Vector::remove](ds-vector.remove.md) — Remove e retorna um valor pelo índice
- [Ds\Vector::reverse](ds-vector.reverse.md) — Inverte o vetor no local
- [Ds\Vector::reversed](ds-vector.reversed.md) — Retorna uma cópia invertida
- [Ds\Vector::rotate](ds-vector.rotate.md) — Rotaciona o vetor por um número dado de rotações
- [Ds\Vector::set](ds-vector.set.md) — tualiza um valor em um índice específico
- [Ds\Vector::shift](ds-vector.shift.md) — Remove e retorna o primeiro valor
- [Ds\Vector::slice](ds-vector.slice.md) — Retorna um sub-vetor de um determinado intervalo
- [Ds\Vector::sort](ds-vector.sort.md) — Ordena o vetor no local
- [Ds\Vector::sorted](ds-vector.sorted.md) — Retorna uma cópia ordenada
- [Ds\Vector::sum](ds-vector.sum.md) — Retorna a soma de todos os valores no vetor
- [Ds\Vector::toArray](ds-vector.toarray.md) — Converte o vetor em um array
- [Ds\Vector::unshift](ds-vector.unshift.md) — Adiciona valores no início do vetor

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
