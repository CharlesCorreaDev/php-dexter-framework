# Confirma uma transação ODBC

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.odbc-commit.php

---

# odbc\_commit

(PHP 4, PHP 5, PHP 7, PHP 8)

odbc\_commit — Confirma uma transação ODBC

### Descrição

function **odbc\_commit**([Odbc\Connection](class.odbc-connection.md) `$odbc`): [bool](language.types.boolean.md)

Confirma todas as transações pendentes na conexão.

### Parâmetros

`odbc`
:   O objeto da conexão ODBC.
    Consulte [odbc\_connect()](function.odbc-connect.md) para obter detalhes.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | `odbc` agora espera uma instância de [Odbc\Connection](class.odbc-connection.md); anteriormente, esperava um [resource](language.types.resource.md). |

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
