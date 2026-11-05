# Lê o próximo resultado de uma consulta múltipla

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli-stmt.next-result.php

---

# mysqli\_stmt::next\_result

# mysqli\_stmt\_next\_result

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

mysqli\_stmt::next\_result -- mysqli\_stmt\_next\_result — Lê o próximo resultado de uma consulta múltipla

### Descrição

Estilo orientado a objetos

public function **mysqli\_stmt::next\_result**(): [bool](language.types.boolean.md)

Estilo procedural:

function **mysqli\_stmt\_next\_result**([mysqli\_stmt](class.mysqli-stmt.md) `$statement`): [bool](language.types.boolean.md)

Lê o próximo resultado de uma consulta múltipla.

> **Nota**:
>
> Antes do PHP 8.1.0, disponível somente com
> [mysqlnd](book.mysqlnd.md).

### Parâmetros

`statement`
:   Somente no estilo procedural: Um objeto [mysqli\_stmt](class.mysqli-stmt.md)
    retornado por [mysqli\_stmt\_init()](mysqli.stmt-init.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

Se o relatório de erros da extensão mysqli estiver habilitado (**`MYSQLI_REPORT_ERROR`**) e a operação solicitada falhar,
um aviso será gerado. Se, além disso, o modo for definido como **`MYSQLI_REPORT_STRICT`**,
uma exceção [mysqli\_sql\_exception](class.mysqli-sql-exception.md) será lançada em vez do aviso.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | Agora também disponível com a biblioteca libmysqlclient. |

### Veja também

- [mysqli\_stmt::more\_results()](mysqli-stmt.more-results.md) - Verifica se há mais resultados de uma consulta múltipla
- [mysqli::multi\_query()](mysqli.multi-query.md) - Executa uma ou mais consultas no banco de dados

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
