# Executa uma consulta SQL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli.real-query.php

---

# mysqli::real\_query

# mysqli\_real\_query

(PHP 5, PHP 7, PHP 8)

mysqli::real\_query -- mysqli\_real\_query — Executa uma consulta SQL

### Descrição

Estilo orientado a objetos

public function **mysqli::real\_query**([string](language.types.string.md) `$query`): [bool](language.types.boolean.md)

Estilo procedural

function **mysqli\_real\_query**([mysqli](class.mysqli.md) `$mysql`, [string](language.types.string.md) `$query`): [bool](language.types.boolean.md)

Executa uma única consulta no banco de dados cujo resultado pode ser
recuperado ou armazenado usando as funções [mysqli\_store\_result()](mysqli.store-result.md) ou
[mysqli\_use\_result()](mysqli.use-result.md).

**Aviso**

# Alerta de segurança: injeção de SQL

Se a consulta contiver qualquer entrada de
variável, [instruções
preparadas parametrizadas](mysqli.quickstart.prepared-statements.md) devem ser usadas. Alternativamente, os
dados devem ser formatados corretamente e todas as strings devem ser escapadas usando
a função [mysqli\_real\_escape\_string()](mysqli.real-escape-string.md).

Para determinar se uma determinada consulta deve retornar um conjunto de resultados ou não,
consulte [mysqli\_field\_count()](mysqli.field-count.md).

### Parâmetros

`mysql`
:   Somente no estilo procedural: Um objeto [mysqli](class.mysqli.md)
    retornado por [mysqli\_connect()](function.mysqli-connect.md) ou [mysqli\_init()](mysqli.init.md)

`query`
:   A string de consulta.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

Se o relatório de erros da extensão mysqli estiver habilitado (**`MYSQLI_REPORT_ERROR`**) e a operação solicitada falhar,
um aviso será gerado. Se, além disso, o modo for definido como **`MYSQLI_REPORT_STRICT`**,
uma exceção [mysqli\_sql\_exception](class.mysqli-sql-exception.md) será lançada em vez do aviso.

### Veja também

- [mysqli\_query()](mysqli.query.md) - Executa uma consulta no banco de dados
- [mysqli\_store\_result()](mysqli.store-result.md) - Transfere um conjunto de resultados da última consulta
- [mysqli\_use\_result()](mysqli.use-result.md) - Inicia uma recuperação de conjunto de resultados

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
