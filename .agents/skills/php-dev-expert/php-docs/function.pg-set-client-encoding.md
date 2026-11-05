# Define a codificação do cliente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-set-client-encoding.php

---

# pg\_set\_client\_encoding

(PHP 4 >= 4.0.3, PHP 5, PHP 7, PHP 8)

pg\_set\_client\_encoding — 
Define a codificação do cliente

### Descrição

function **pg\_set\_client\_encoding**([PgSql\Connection](class.pgsql-connection.md) `$connection` = ?, [string](language.types.string.md) `$encoding`): [int](language.types.integer.md)

**pg\_set\_client\_encoding()** define a codificação
do cliente e retorna 0 em caso de sucesso ou -1 em caso de erro.

O PostgreSQL converterá automaticamente os dados da codificação do banco de dados
backend na codificação frontend.

> **Nota**:
>
> A função costumava ser chamada de
> **pg\_setclientencoding()**.

### Parâmetros

`connection`
:   Uma instância de [PgSql\Connection](class.pgsql-connection.md).
    Quando o parâmetro `connection` não for especificado, a conexão padrão será usada.
    A conexão padrão é a última conexão feita por [pg\_connect()](function.pg-connect.md)
    ou [pg\_pconnect()](function.pg-pconnect.md).

    **Aviso**

    A partir do PHP 8.1.0, usar a conexão padrão foi descontinuado.

`encoding`
:   A codificação do cliente necessária. Um de `SQL_ASCII`, `EUC_JP`,
    `EUC_CN`, `EUC_KR`, `EUC_TW`,
    `UNICODE`, `MULE_INTERNAL`, `LATINX` (X=1...9),
    `KOI8`, `WIN` , `ALT`, `SJIS`,
    `BIG5` ou `WIN1250`.

    A lista exata de codificações disponíveis depende da sua versão do PostgreSQL, portanto verifique
    o manual do PostgreSQL para obter uma lista mais específica.

### Valor Retornado

Retorna `0` em caso de sucesso ou `-1` em caso de erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `connection` agora espera uma instância de [PgSql\Connection](class.pgsql-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **pg\_set\_client\_encoding()****

```
<?php

$conn = pg_pconnect("dbname=publisher");
if (!$conn) {
  echo "An error occurred.\n";
  exit;
}

// Define a codificação do cliente como UNICODE. Os dados serão automaticamente
// convertidos da codificação de backend para frontend.
pg_set_client_encoding($conn, "UNICODE");

$result = pg_query($conn, "SELECT author, email FROM authors");
if (!$result) {
  echo "An error occurred.\n";
  exit;
}

// Escreve dados UTF-8
while ($row = pg_fetch_row($result)) {
  echo "Author: $row[0]  E-mail: $row[1]";
  echo "<br />\n";
}

?>
```

### Veja também

- [pg\_client\_encoding()](function.pg-client-encoding.md) - Obtém a codificação do cliente

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
