# A classe mysqli_result

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mysqli-result.php

---

# A classe mysqli\_result

(PHP 5, PHP 7, PHP 8)

## Introdução

Representa o conjunto de resultados da consulta feita ao banco de dados.

## Resumo da classe

class ****mysqli\_result****
implements
[IteratorAggregate](class.iteratoraggregate.md) {

/\* Propriedades \*/

public
readonly
[int](language.types.integer.md)
[$current\_field](mysqli-result.current-field.md);

public
readonly
[int](language.types.integer.md)
[$field\_count](mysqli-result.field-count.md);

public
readonly
?[array](language.types.array.md)
[$lengths](mysqli-result.lengths.md);

public
readonly
[int](language.types.integer.md)|[string](language.types.string.md)
[$num\_rows](mysqli-result.num-rows.md);

public
[int](language.types.integer.md)
[$type](class.mysqli-result.md#mysqli-result.props.type);

/\* Métodos \*/

public function [\_\_construct](mysqli-result.construct.md)([mysqli](class.mysqli.md) `$mysql`, [int](language.types.integer.md) `$result_mode` = **`MYSQLI_STORE_RESULT`**)

public function [data\_seek](mysqli-result.data-seek.md)([int](language.types.integer.md) `$offset`): [bool](language.types.boolean.md)

public function [fetch\_all](mysqli-result.fetch-all.md)([int](language.types.integer.md) `$mode` = **`MYSQLI_NUM`**): [array](language.types.array.md)

public function [fetch\_array](mysqli-result.fetch-array.md)([int](language.types.integer.md) `$mode` = **`MYSQLI_BOTH`**): [array](language.types.array.md)|[null](language.types.null.md)|[false](language.types.singleton.md)

public function [fetch\_assoc](mysqli-result.fetch-assoc.md)(): [array](language.types.array.md)|[null](language.types.null.md)|[false](language.types.singleton.md)

public function [fetch\_column](mysqli-result.fetch-column.md)([int](language.types.integer.md) `$column` = 0): [null](language.types.null.md)|[int](language.types.integer.md)|[float](language.types.float.md)|[string](language.types.string.md)|[false](language.types.singleton.md)

public function [fetch\_field](mysqli-result.fetch-field.md)(): [object](language.types.object.md)|[false](language.types.singleton.md)

public function [fetch\_field\_direct](mysqli-result.fetch-field-direct.md)([int](language.types.integer.md) `$index`): [object](language.types.object.md)|[false](language.types.singleton.md)

public function [fetch\_fields](mysqli-result.fetch-fields.md)(): [array](language.types.array.md)

public function [fetch\_object](mysqli-result.fetch-object.md)([string](language.types.string.md) `$class` = "stdClass", [array](language.types.array.md) `$constructor_args` = []): [object](language.types.object.md)|[null](language.types.null.md)|[false](language.types.singleton.md)

public function [fetch\_row](mysqli-result.fetch-row.md)(): [array](language.types.array.md)|[null](language.types.null.md)|[false](language.types.singleton.md)

public function [field\_seek](mysqli-result.field-seek.md)([int](language.types.integer.md) `$index`): [true](language.types.singleton.md)

public function [free](mysqli-result.free.md)(): [void](language.types.void.md)

public function [close](mysqli-result.free.md)(): [void](language.types.void.md)

public function [free\_result](mysqli-result.free.md)(): [void](language.types.void.md)

public function [getIterator](mysqli-result.getiterator.md)(): [Iterator](class.iterator.md)

}

## Propriedades

type
:   Armazena informação se o o resultado é com ou sem buffer, como um [int](language.types.integer.md)
    (**`MYSQLI_STORE_RESULT`** ou
    **`MYSQLI_USE_RESULT`**, respectivamente).

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | **mysqli\_result** agora implementa [IteratorAggregate](class.iteratoraggregate.md). Anteriormente, [Traversable](class.traversable.md) era implementado. |

## Índice

- [mysqli\_result::\_\_construct](mysqli-result.construct.md) — Constrói um objeto mysqli\_result
- [mysqli\_result::$current\_field](mysqli-result.current-field.md) — Obtém o deslocamento atual de campo de um ponteiro de resultado
- [mysqli\_result::data\_seek](mysqli-result.data-seek.md) — Ajusta o ponteiro do resultado para uma linha arbitrária no resultado
- [mysqli\_result::fetch\_all](mysqli-result.fetch-all.md) — Recebe todas as linhas de resultado como array associativo, numérico, ou ambos
- [mysqli\_result::fetch\_array](mysqli-result.fetch-array.md) — Recebe a próxima linha de resultado como array associativo, numérico, ou ambos
- [mysqli\_result::fetch\_assoc](mysqli-result.fetch-assoc.md) — Obtém a próxima linha do conjunto de resultados como um array associativo
- [mysqli\_result::fetch\_column](mysqli-result.fetch-column.md) — Recebe uma única coluna da próxima linha de um resultado
- [mysqli\_result::fetch\_field](mysqli-result.fetch-field.md) — Retorna o próximo campo no conjunto de resultados
- [mysqli\_result::fetch\_field\_direct](mysqli-result.fetch-field-direct.md) — Recebe metadados para um único campo
- [mysqli\_result::fetch\_fields](mysqli-result.fetch-fields.md) — Retorna um array de objetos representando os campos em um conjunto de resultados
- [mysqli\_result::fetch\_object](mysqli-result.fetch-object.md) — Recebe a próxima linha de um resultado como um objeto
- [mysqli\_result::fetch\_row](mysqli-result.fetch-row.md) — Obtém a próxima linha de um resultado como um array enumerado
- [mysqli\_result::$field\_count](mysqli-result.field-count.md) — Obtém o número de campos no conjunto de resultados
- [mysqli\_result::field\_seek](mysqli-result.field-seek.md) — Move o ponteiro do resultado para um campo especificado
- [mysqli\_result::free](mysqli-result.free.md) — Libera memória associada a um resultado
- [mysqli\_result::getIterator](mysqli-result.getiterator.md) — Obtém um iterador externo
- [mysqli\_result::$lengths](mysqli-result.lengths.md) — Retorna os comprimentos das colunas da linha atual do resultado
- [mysqli\_result::$num\_rows](mysqli-result.num-rows.md) — Obtém o número de linhas no resultado

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
