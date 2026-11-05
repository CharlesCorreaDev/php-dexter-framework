# A interface Collection

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.ds-collection.php

---

# A interface Collection

(PECL ds >= 1.0.0)

## Introdução

**Collection** é a interface base que abrange funcionalidades
comuns a todas as estruturas de dados nesta biblioteca. Garante que todas as estruturas
são iteráveis, contáveis e podem ser convertidas para JSON usando [json\_encode()](function.json-encode.md).

## Resumo da Interface

interface ****Ds\Collection****
extends
[Countable](class.countable.md),
[IteratorAggregate](class.iteratoraggregate.md),
[JsonSerializable](class.jsonserializable.md) {

/\* Métodos \*/

public function [clear](ds-collection.clear.md)(): [void](language.types.void.md)

public function [copy](ds-collection.copy.md)(): [Ds\Collection](class.ds-collection.md)

public function [isEmpty](ds-collection.isempty.md)(): [bool](language.types.boolean.md)

public function [toArray](ds-collection.toarray.md)(): [array](language.types.array.md)

/\* Métodos herdados \*/

public function [Countable::count](countable.count.md)(): [int](language.types.integer.md)

public function [IteratorAggregate::getIterator](iteratoraggregate.getiterator.md)(): [Traversable](class.traversable.md)

public function [JsonSerializable::jsonSerialize](jsonserializable.jsonserialize.md)(): [mixed](language.types.mixed.md)

}

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL ds 1.4.0 | **Collection** implementa [IteratorAggregate](class.iteratoraggregate.md) agora, em vez de apenas [Traversable](class.traversable.md). (Essa mudança ocorreu no polyfill na versão 1.4.1.) |

## Índice

- [Ds\Collection::clear](ds-collection.clear.md) — Remove todos os valores
- [Ds\Collection::copy](ds-collection.copy.md) — Retorna uma cópia rasa da coleção
- [Ds\Collection::isEmpty](ds-collection.isempty.md) — Retorna se a coleção está vazia
- [Ds\Collection::toArray](ds-collection.toarray.md) — Converte a coleção para um array

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
