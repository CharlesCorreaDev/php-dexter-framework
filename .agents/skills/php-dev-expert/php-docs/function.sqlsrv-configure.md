# Altera as configurações de tratamento de erros e registro do driver

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sqlsrv-configure.php

---

# sqlsrv\_configure

(No version information available, might only be in Git)

sqlsrv\_configure — Altera as configurações de tratamento de erros e registro do driver

### Descrição

function **sqlsrv\_configure**([string](language.types.string.md) `$setting`, [mixed](language.types.mixed.md) `$value`): [bool](language.types.boolean.md)

Altera as configurações de tratamento de erros e registro do driver.

### Parâmetros

`setting`
:   O nome da configuração a ser definida. Os valores possíveis são
    "WarningsReturnAsErrors", "LogSubsystems" e "LogSeverity".

`value`
:   O valor da configuração especificada. A tabela a seguir mostra os valores possíveis:

    **Opções de Configuração de Erro e Registro**

    | Configuração | Opções |
    | --- | --- |
    | WarningsReturnAsErrors | 1 (**`true`**) ou 0 (**`false`**) |
    | LogSubsystems | SQLSRV\_LOG\_SYSTEM\_ALL (-1) SQLSRV\_LOG\_SYSTEM\_CONN (2) SQLSRV\_LOG\_SYSTEM\_INIT (1) SQLSRV\_LOG\_SYSTEM\_OFF (0) SQLSRV\_LOG\_SYSTEM\_STMT (4) SQLSRV\_LOG\_SYSTEM\_UTIL (8) |
    | LogSeverity | SQLSRV\_LOG\_SEVERITY\_ALL (-1) SQLSRV\_LOG\_SEVERITY\_ERROR (1) SQLSRV\_LOG\_SEVERITY\_NOTICE (4) SQLSRV\_LOG\_SEVERITY\_WARNING (2) |

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [» SQLSRV Error Handling](https://msdn.microsoft.com/en-us/library/cc626302.aspx).
- [» Logging SQLSRV Activity](https://msdn.microsoft.com/en-us/library/cc296188.aspx).

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
