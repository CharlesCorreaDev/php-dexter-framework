# Obtém a última mensagem de erro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.odbc-errormsg.php

---

# odbc\_errormsg

(PHP 4 >= 4.0.5, PHP 5, PHP 7, PHP 8)

odbc\_errormsg — Obtém a última mensagem de erro

### Descrição

function **odbc\_errormsg**([?](language.types.null.md)[Odbc\Connection](class.odbc-connection.md) `$odbc` = **`null`**): [string](language.types.string.md)

Retorna uma string contendo a última mensagem de erro ODBC ou uma string
vazia se não houve erros.

### Parâmetros

`odbc`
:   O objeto da conexão ODBC.
    Consulte [odbc\_connect()](function.odbc-connect.md) para obter detalhes.

### Valor Retornado

Se `odbc` for especificado, o último estado
dessa conexão será retornado, caso contrário, o último estado de qualquer conexão
será retornado.

Esta função retorna um valor significativo somente se a última consulta ODBC falhou
(ou seja, [odbc\_exec()](function.odbc-exec.md) retornou **`false`**).

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | `odbc` agora espera uma instância de [Odbc\Connection](class.odbc-connection.md); anteriormente, esperava um [resource](language.types.resource.md). |
| 8.0.0 | `odbc` agora pode ser nulo. |

### Veja também

- [odbc\_error()](function.odbc-error.md) - Obtém o último código de erro
- [odbc\_exec()](function.odbc-exec.md) - Executa diretamente uma instrução SQL

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
