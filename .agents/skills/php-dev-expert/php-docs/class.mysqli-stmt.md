# A classe mysqli_stmt

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mysqli-stmt.php

---

# A classe mysqli\_stmt

(PHP 5, PHP 7, PHP 8)

## Introdução

Representa uma declaração preparada.

## Resumo da classe

class ****mysqli\_stmt****
{

/\* Propriedades \*/

public
readonly
[int](language.types.integer.md)|[string](language.types.string.md)
[$affected\_rows](mysqli-stmt.affected-rows.md);

public
readonly
[int](language.types.integer.md)|[string](language.types.string.md)
[$insert\_id](mysqli-stmt.insert-id.md);

public
readonly
[int](language.types.integer.md)|[string](language.types.string.md)
[$num\_rows](mysqli-stmt.num-rows.md);

public
readonly
[int](language.types.integer.md)
[$param\_count](mysqli-stmt.param-count.md);

public
readonly
[int](language.types.integer.md)
[$field\_count](mysqli-stmt.field-count.md);

public
readonly
[int](language.types.integer.md)
[$errno](mysqli-stmt.errno.md);

public
readonly
[string](language.types.string.md)
[$error](mysqli-stmt.error.md);

public
readonly
[array](language.types.array.md)
[$error\_list](mysqli-stmt.error-list.md);

public
readonly
[string](language.types.string.md)
[$sqlstate](mysqli-stmt.sqlstate.md);

public
[int](language.types.integer.md)
[$id](class.mysqli-stmt.md#mysqli-stmt.props.id);

/\* Métodos \*/

public function [\_\_construct](mysqli-stmt.construct.md)([mysqli](class.mysqli.md) `$mysql`, [?](language.types.null.md)[string](language.types.string.md) `$query` = **`null`**)

public function [attr\_get](mysqli-stmt.attr-get.md)([int](language.types.integer.md) `$attribute`): [int](language.types.integer.md)

public function [attr\_set](mysqli-stmt.attr-set.md)([int](language.types.integer.md) `$attribute`, [int](language.types.integer.md) `$value`): [bool](language.types.boolean.md)

public function [bind\_param](mysqli-stmt.bind-param.md)([string](language.types.string.md) `$types`, [mixed](language.types.mixed.md) `&$var`, [mixed](language.types.mixed.md) `&...$vars`): [bool](language.types.boolean.md)

public function [bind\_result](mysqli-stmt.bind-result.md)([mixed](language.types.mixed.md) `&$var`, [mixed](language.types.mixed.md) `&...$vars`): [bool](language.types.boolean.md)

public function [close](mysqli-stmt.close.md)(): [true](language.types.singleton.md)

public function [data\_seek](mysqli-stmt.data-seek.md)([int](language.types.integer.md) `$offset`): [void](language.types.void.md)

public function [execute](mysqli-stmt.execute.md)([?](language.types.null.md)[array](language.types.array.md) `$params` = **`null`**): [bool](language.types.boolean.md)

public function [fetch](mysqli-stmt.fetch.md)(): [?](language.types.null.md)[bool](language.types.boolean.md)

public function [free\_result](mysqli-stmt.free-result.md)(): [void](language.types.void.md)

public function [get\_result](mysqli-stmt.get-result.md)(): [mysqli\_result](class.mysqli-result.md)|[false](language.types.singleton.md)

public function [get\_warnings](mysqli-stmt.get-warnings.md)(): [mysqli\_warning](class.mysqli-warning.md)|[false](language.types.singleton.md)

public function [more\_results](mysqli-stmt.more-results.md)(): [bool](language.types.boolean.md)

public function [next\_result](mysqli-stmt.next-result.md)(): [bool](language.types.boolean.md)

public function [num\_rows](mysqli-stmt.num-rows.md)(): [int](language.types.integer.md)|[string](language.types.string.md)

public function [prepare](mysqli-stmt.prepare.md)([string](language.types.string.md) `$query`): [bool](language.types.boolean.md)

public function [reset](mysqli-stmt.reset.md)(): [bool](language.types.boolean.md)

public function [result\_metadata](mysqli-stmt.result-metadata.md)(): [mysqli\_result](class.mysqli-result.md)|[false](language.types.singleton.md)

public function [send\_long\_data](mysqli-stmt.send-long-data.md)([int](language.types.integer.md) `$param_num`, [string](language.types.string.md) `$data`): [bool](language.types.boolean.md)

public function [store\_result](mysqli-stmt.store-result.md)(): [bool](language.types.boolean.md)

}

## Propriedades

id
:   Armazena o ID da declaração.

## Índice

- [mysqli\_stmt::$affected\_rows](mysqli-stmt.affected-rows.md) — Retorna o número total de linhas modificadas, apagadas, inseridas ou
  correspondidas pela última instrução executada
- [mysqli\_stmt::attr\_get](mysqli-stmt.attr-get.md) — Usado para obter o valor atual de um atributo de instrução
- [mysqli\_stmt::attr\_set](mysqli-stmt.attr-set.md) — Usado para modificar o comportamento de uma instrução preparada
- [mysqli\_stmt::bind\_param](mysqli-stmt.bind-param.md) — Liga variáveis a uma declaração preparada como parâmetros
- [mysqli\_stmt::bind\_result](mysqli-stmt.bind-result.md) — Liga variáveis a uma declaração preparada para armazenamento de resultado
- [mysqli\_stmt::close](mysqli-stmt.close.md) — Fecha uma instrução preparada
- [mysqli\_stmt::\_\_construct](mysqli-stmt.construct.md) — Constrói um novo objeto mysqli\_stmt
- [mysqli\_stmt::data\_seek](mysqli-stmt.data-seek.md) — Ajusta o ponteiro de resultado para uma linha arbitrária no resultado com buffer
- [mysqli\_stmt::$errno](mysqli-stmt.errno.md) — Retorna o código de erro para a chamada de instrução mais recente
- [mysqli\_stmt::$error](mysqli-stmt.error.md) — Retorna uma descrição em string para o último erro de instrução
- [mysqli\_stmt::$error\_list](mysqli-stmt.error-list.md) — Retorna uma lista de erros da última instrução executada
- [mysqli\_stmt::execute](mysqli-stmt.execute.md) — Executa uma instrução preparada
- [mysqli\_stmt::fetch](mysqli-stmt.fetch.md) — Recebe resultados de uma instrução preparada nas variáveis vinculadas
- [mysqli\_stmt::$field\_count](mysqli-stmt.field-count.md) — Retorna o número de colunas na instrução informada
- [mysqli\_stmt::free\_result](mysqli-stmt.free-result.md) — Libera memória do resultado armazenado para o manipulador de instrução informado
- [mysqli\_stmt::get\_result](mysqli-stmt.get-result.md) — Obtém um resultado de uma instrução preparada como um objeto mysqli\_result
- [mysqli\_stmt::get\_warnings](mysqli-stmt.get-warnings.md) — Obtém o resultado de SHOW WARNINGS
- [mysqli\_stmt::$insert\_id](mysqli-stmt.insert-id.md) — Obtém o ID gerado pela operação INSERT anterior
- [mysqli\_stmt::more\_results](mysqli-stmt.more-results.md) — Verifica se há mais resultados de uma consulta múltipla
- [mysqli\_stmt::next\_result](mysqli-stmt.next-result.md) — Lê o próximo resultado de uma consulta múltipla
- [mysqli\_stmt::$num\_rows](mysqli-stmt.num-rows.md) — Retorna o número de linhas recebidas pelo servidor
- [mysqli\_stmt::$param\_count](mysqli-stmt.param-count.md) — Retorna o número de parâmetros para uma instrução fornecida
- [mysqli\_stmt::prepare](mysqli-stmt.prepare.md) — Prepara uma declaração SQL para execução
- [mysqli\_stmt::reset](mysqli-stmt.reset.md) — Redefine uma instrução preparada
- [mysqli\_stmt::result\_metadata](mysqli-stmt.result-metadata.md) — Retorna os metadados de resultado de uma instrução preparada
- [mysqli\_stmt::send\_long\_data](mysqli-stmt.send-long-data.md) — Envia dados em blocos
- [mysqli\_stmt::$sqlstate](mysqli-stmt.sqlstate.md) — Retorna o erro SQLSTATE da operação da instrução anterior
- [mysqli\_stmt::store\_result](mysqli-stmt.store-result.md) — Armazena um conjunto de resultados em um buffer interno

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
