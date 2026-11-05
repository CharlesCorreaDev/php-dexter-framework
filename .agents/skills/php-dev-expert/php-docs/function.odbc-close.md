# Fecha uma conexão ODBC

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.odbc-close.php

---

# odbc\_close

(PHP 4, PHP 5, PHP 7, PHP 8)

odbc\_close — Fecha uma conexão ODBC

### Descrição

function **odbc\_close**([Odbc\Connection](class.odbc-connection.md) `$odbc`): [void](language.types.void.md)

Fecha a conexão com o servidor de banco de dados.

### Parâmetros

`odbc`
:   O objeto da conexão ODBC.
    Consulte [odbc\_connect()](function.odbc-connect.md) para obter detalhes.

### Valor Retornado

Nenhum valor é retornado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | `odbc` agora espera uma instância de [Odbc\Connection](class.odbc-connection.md); anteriormente, esperava um [resource](language.types.resource.md). |

### Notas

> **Nota**:
>
> Esta função falhará se houver transações abertas nesta
> conexão. A conexão permanecerá aberta neste caso.

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
