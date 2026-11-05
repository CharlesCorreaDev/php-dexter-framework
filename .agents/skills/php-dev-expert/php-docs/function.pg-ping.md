# Ping em conexão com banco de dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-ping.php

---

# pg\_ping

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

pg\_ping — Ping em conexão com banco de dados

### Descrição

function **pg\_ping**([?](language.types.null.md)[PgSql\Connection](class.pgsql-connection.md) `$connection` = **`null`**): [bool](language.types.boolean.md)

**pg\_ping()** executa ping em uma conexão de banco de dados e tenta
reconectá-la se ela estiver interrompida.

### Parâmetros

`connection`
:   Uma instância de [PgSql\Connection](class.pgsql-connection.md).
    Quando o parâmetro `connection` for **`null`**, a conexão padrão será usada.
    A conexão padrão é a última conexão feita por [pg\_connect()](function.pg-connect.md)
    ou [pg\_pconnect()](function.pg-pconnect.md).

    **Aviso**

    A partir do PHP 8.1.0, usar a conexão padrão foi descontinuado.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `connection` agora espera uma instância de [PgSql\Connection](class.pgsql-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |
| 8.0.0 | `connection` é anulável agora. |

### Examples

**Exemplo #1 Exemplo de **pg\_ping()****

```
<?php
$conn = pg_pconnect("dbname=publisher");
if (!$conn) {
  echo "Ocorreu um erro.\n";
  exit;
}

if (!pg_ping($conn))
  die("A conexão está quebrada\n");
?>
```

### Veja também

- [pg\_connection\_status()](function.pg-connection-status.md) - Obtém o status da conexão
- [pg\_connection\_reset()](function.pg-connection-reset.md) - Redefine conexão (reconecta)

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
