# Prepara o próximo resultado de multi_query

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli.next-result.php

---

# mysqli::next\_result

# mysqli\_next\_result

(PHP 5, PHP 7, PHP 8)

mysqli::next\_result -- mysqli\_next\_result — Prepara o próximo resultado de multi\_query

### Descrição

Estilo orientado a objetos

public function **mysqli::next\_result**(): [bool](language.types.boolean.md)

Estilo procedural

function **mysqli\_next\_result**([mysqli](class.mysqli.md) `$mysql`): [bool](language.types.boolean.md)

Prepara o próximo conjunto de resultado de uma chamada anterior a
[mysqli\_multi\_query()](mysqli.multi-query.md) que pode ser recuperado por
[mysqli\_store\_result()](mysqli.store-result.md) ou
[mysqli\_use\_result()](mysqli.use-result.md).

### Parâmetros

`mysql`
:   Somente no estilo procedural: Um objeto [mysqli](class.mysqli.md)
    retornado por [mysqli\_connect()](function.mysqli-connect.md) ou [mysqli\_init()](mysqli.init.md)

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha. Também retorna **`false`** se a declaração seguinte resultou em erro, diferentemente de [mysqli\_more\_results()](mysqli.more-results.md).

### Erros/Exceções

Se o relatório de erros da extensão mysqli estiver habilitado (**`MYSQLI_REPORT_ERROR`**) e a operação solicitada falhar,
um aviso será gerado. Se, além disso, o modo for definido como **`MYSQLI_REPORT_STRICT`**,
uma exceção [mysqli\_sql\_exception](class.mysqli-sql-exception.md) será lançada em vez do aviso.

### Examples

Consulte [mysqli\_multi\_query()](mysqli.multi-query.md).

### Veja também

- [mysqli\_multi\_query()](mysqli.multi-query.md) - Executa uma ou mais consultas no banco de dados
- [mysqli\_more\_results()](mysqli.more-results.md) - Verifica se há mais algum resultado de uma consulta múltipla
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
