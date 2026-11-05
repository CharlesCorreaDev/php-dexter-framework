# Retorna informações sobre DSNs disponíveis

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.odbc-data-source.php

---

# odbc\_data\_source

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

odbc\_data\_source — Retorna informações sobre DSNs disponíveis

### Descrição

function **odbc\_data\_source**([Odbc\Connection](class.odbc-connection.md) `$odbc`, [int](language.types.integer.md) `$fetch_type`): [array](language.types.array.md)|[null](language.types.null.md)|[false](language.types.singleton.md)

Esta função retornará a lista de DSN disponíveis (após chamá-la
várias vezes).

### Parâmetros

`odbc`
:   O objeto da conexão ODBC.
    Consulte [odbc\_connect()](function.odbc-connect.md) para obter detalhes.

`fetch_type`
:   O `fetch_type` pode ser um de dois tipos de constantes:
    **`SQL_FETCH_FIRST`** ou **`SQL_FETCH_NEXT`**.
    Use **`SQL_FETCH_FIRST`** na primeira vez que esta função for
    chamada, depois use **`SQL_FETCH_NEXT`**.

### Valor Retornado

Retorna **`false`** em caso de erro, um [array](language.types.array.md) em caso de sucesso e **`null`** depois de buscar
o último DSN disponível.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | `odbc` agora espera uma instância de [Odbc\Connection](class.odbc-connection.md); anteriormente, esperava um [resource](language.types.resource.md). |

### Examples

**Exemplo #1 Lista os DSNs disponíveis**

```
<?php
$conn = odbc_connect('dsn', 'user', 'pass');
$dsn_info = odbc_data_source($conn, SQL_FETCH_FIRST);
while ($dsn_info) {
    print_r($dsn_info);
    $dsn_info = odbc_data_source($conn, SQL_FETCH_NEXT);
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [server] => dsn
    [description] => ODBC Driver 17 for SQL Server
)
Array
(
    [server] => other_dsn
    [description] => Microsoft Access Driver (*.mdb, *.accdb)
)
```

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
