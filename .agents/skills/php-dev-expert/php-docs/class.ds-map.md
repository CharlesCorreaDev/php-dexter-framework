# A classe Map

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.ds-map.php

---

# A classe Map

(PECL ds >= 1.0.0)

## Introdução

Um Map é uma coleção sequencial de pares chave-valor, quase idêntica a um
[array](language.types.array.md) usada em um contexto semelhante. As chaves podem ser de qualquer tipo, mas devem ser únicas.
Os valores são substituídos se adicionados ao mapa usando a mesma chave.

## Pontos Fortes

- Chaves e valores podem ser de qualquer tipo, incluindo objetos.
- Suporta a sintaxe de array (colchetes).
- A ordem de inserção é preservada.
- O desempenho e a eficiência de memória são muito semelhantes a um [array](language.types.array.md).
- Libera automaticamente a memória alocada quando seu tamanho diminui o suficiente.

## Pontos Fracos

- Não pode ser convertido para um array quando objetos são usados como chaves.

## Resumo da classe

class **Ds\Map**
implements
[Ds\Collection](class.ds-collection.md), [ArrayAccess](class.arrayaccess.md) {

/\* Constantes \*/

const
[int](language.types.integer.md)
[MIN\_CAPACITY](class.ds-map.md#ds-map.constants.min-capacity) = 8;

/\* Métodos \*/

public function [allocate](ds-map.allocate.md)([int](language.types.integer.md) `$capacity`): [void](language.types.void.md)

public function [apply](ds-map.apply.md)([callable](language.types.callable.md) `$callback`): [void](language.types.void.md)

public function [capacity](ds-map.capacity.md)(): [int](language.types.integer.md)

public function [clear](ds-map.clear.md)(): [void](language.types.void.md)

public function [copy](ds-map.copy.md)(): [Ds\Map](class.ds-map.md)

public function [diff](ds-map.diff.md)([Ds\Map](class.ds-map.md) `$map`): [Ds\Map](class.ds-map.md)

public function [filter](ds-map.filter.md)([callable](language.types.callable.md) `$callback` = ?): [Ds\Map](class.ds-map.md)

public function [first](ds-map.first.md)(): [Ds\Pair](class.ds-pair.md)

public function [get](ds-map.get.md)([mixed](language.types.mixed.md) `$key`, [mixed](language.types.mixed.md) `$default` = ?): [mixed](language.types.mixed.md)

public function [hasKey](ds-map.haskey.md)([mixed](language.types.mixed.md) `$key`): [bool](language.types.boolean.md)

public function [hasValue](ds-map.hasvalue.md)([mixed](language.types.mixed.md) `$value`): [bool](language.types.boolean.md)

public function [intersect](ds-map.intersect.md)([Ds\Map](class.ds-map.md) `$map`): [Ds\Map](class.ds-map.md)

public function [isEmpty](ds-map.isempty.md)(): [bool](language.types.boolean.md)

public function [keys](ds-map.keys.md)(): [Ds\Set](class.ds-set.md)

public function [ksort](ds-map.ksort.md)([callable](language.types.callable.md) `$comparator` = ?): [void](language.types.void.md)

public function [ksorted](ds-map.ksorted.md)([callable](language.types.callable.md) `$comparator` = ?): [Ds\Map](class.ds-map.md)

public function [last](ds-map.last.md)(): [Ds\Pair](class.ds-pair.md)

public function [map](ds-map.map.md)([callable](language.types.callable.md) `$callback`): [Ds\Map](class.ds-map.md)

public function [merge](ds-map.merge.md)([mixed](language.types.mixed.md) `$values`): [Ds\Map](class.ds-map.md)

public function [pairs](ds-map.pairs.md)(): [Ds\Sequence](class.ds-sequence.md)

public function [put](ds-map.put.md)([mixed](language.types.mixed.md) `$key`, [mixed](language.types.mixed.md) `$value`): [void](language.types.void.md)

public function [putAll](ds-map.putall.md)([mixed](language.types.mixed.md) `$pairs`): [void](language.types.void.md)

public function [reduce](ds-map.reduce.md)([callable](language.types.callable.md) `$callback`, [mixed](language.types.mixed.md) `$initial` = ?): [mixed](language.types.mixed.md)

public function [remove](ds-map.remove.md)([mixed](language.types.mixed.md) `$key`, [mixed](language.types.mixed.md) `$default` = ?): [mixed](language.types.mixed.md)

public function [reverse](ds-map.reverse.md)(): [void](language.types.void.md)

public function [reversed](ds-map.reversed.md)(): [Ds\Map](class.ds-map.md)

public function [skip](ds-map.skip.md)([int](language.types.integer.md) `$position`): [Ds\Pair](class.ds-pair.md)

public function [slice](ds-map.slice.md)([int](language.types.integer.md) `$index`, [int](language.types.integer.md) `$length` = ?): [Ds\Map](class.ds-map.md)

public function [sort](ds-map.sort.md)([callable](language.types.callable.md) `$comparator` = ?): [void](language.types.void.md)

public function [sorted](ds-map.sorted.md)([callable](language.types.callable.md) `$comparator` = ?): [Ds\Map](class.ds-map.md)

public function [sum](ds-map.sum.md)(): [int](language.types.integer.md)|[float](language.types.float.md)

public function [toArray](ds-map.toarray.md)(): [array](language.types.array.md)

public function [union](ds-map.union.md)([Ds\Map](class.ds-map.md) `$map`): [Ds\Map](class.ds-map.md)

public function [values](ds-map.values.md)(): [Ds\Sequence](class.ds-sequence.md)

public function [xor](ds-map.xor.md)([Ds\Map](class.ds-map.md) `$map`): [Ds\Map](class.ds-map.md)

}

## Constantes predefinidas

**`Ds\Map::MIN_CAPACITY`**

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL ds 1.3.0 | A classe agora implementa [ArrayAccess](class.arrayaccess.md). |
| PECL ds 1.2.0 | **`Ds\Map::MIN_CAPACITY`** foi alterada de 16 para 8. |

## Índice

- [Ds\Map::allocate](ds-map.allocate.md) — Aloca memória suficiente para uma capacidade requerida
- [Ds\Map::apply](ds-map.apply.md) — Atualiza todos os valores aplicando uma função de retorno de chamada a cada valor
- [Ds\Map::capacity](ds-map.capacity.md) — Retorna a capacidade atual
- [Ds\Map::clear](ds-map.clear.md) — Remove todos os valores
- [Ds\Map::\_\_construct](ds-map.construct.md) — Cria uma nova instância
- [Ds\Map::copy](ds-map.copy.md) — Retorna uma cópia rasa do mapa
- [Ds\Map::count](ds-map.count.md) — Retorna o número de valores no mapa
- [Ds\Map::diff](ds-map.diff.md) — Cria um novo mapa usando chaves que não estão em outro mapa
- [Ds\Map::filter](ds-map.filter.md) — Cria um novo mapa usando um callable para determinar quais pares incluir
- [Ds\Map::first](ds-map.first.md) — Retorna o primeiro par no mapa
- [Ds\Map::get](ds-map.get.md) — Retorna o valor para uma chave dada
- [Ds\Map::hasKey](ds-map.haskey.md) — Determina se o mapa contém uma chave dada
- [Ds\Map::hasValue](ds-map.hasvalue.md) — Determina se o mapa contém um valor dado
- [Ds\Map::intersect](ds-map.intersect.md) — Cria um novo mapa intersectando chaves com outro mapa
- [Ds\Map::isEmpty](ds-map.isempty.md) — Retorna se o mapa está vazio
- [Ds\Map::jsonSerialize](ds-map.jsonserialize.md) — Retorna uma representação que pode ser convertida para JSON
- [Ds\Map::keys](ds-map.keys.md) — Retorna um conjunto das chaves do mapa
- [Ds\Map::ksort](ds-map.ksort.md) — Ordena o mapa no local pelo chave
- [Ds\Map::ksorted](ds-map.ksorted.md) — Retorna uma cópia ordenada por chave
- [Ds\Map::last](ds-map.last.md) — Retorna o último par do mapa
- [Ds\Map::map](ds-map.map.md) — Retorna o resultado da aplicação de um callback a cada valor
- [Ds\Map::merge](ds-map.merge.md) — Retorna o resultado da adição de todas as associações fornecidas
- [Ds\Map::pairs](ds-map.pairs.md) — Retorna uma sequência contendo todos os pares do mapa
- [Ds\Map::put](ds-map.put.md) — Associa uma chave a um valor
- [Ds\Map::putAll](ds-map.putall.md) — Associa todos os pares chave-valor de um objeto traversable ou array
- [Ds\Map::reduce](ds-map.reduce.md) — Reduz o mapa a um único valor usando uma função callback
- [Ds\Map::remove](ds-map.remove.md) — Remove e retorna um valor pela chave
- [Ds\Map::reverse](ds-map.reverse.md) — Inverte o mapa no local
- [Ds\Map::reversed](ds-map.reversed.md) — Retorna uma cópia invertida
- [Ds\Map::skip](ds-map.skip.md) — Retorna o par em uma posição específica
- [Ds\Map::slice](ds-map.slice.md) — Retorna um subconjunto do mapa definido por um índice inicial e comprimento
- [Ds\Map::sort](ds-map.sort.md) — Ordena o mapa no local pelo valor
- [Ds\Map::sorted](ds-map.sorted.md) — Retorna uma cópia, ordenada por valor
- [Ds\Map::sum](ds-map.sum.md) — Retorna a soma de todos os valores no mapa
- [Ds\Map::toArray](ds-map.toarray.md) — Converte o mapa em um array
- [Ds\Map::union](ds-map.union.md) — Cria um novo mapa usando valores da instância atual e de outro mapa
- [Ds\Map::values](ds-map.values.md) — Retorna uma sequência dos valores do mapa
- [Ds\Map::xor](ds-map.xor.md) — Cria um novo mapa usando chaves apenas do mapa atual ou de outro mapa, mas não de ambos

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
