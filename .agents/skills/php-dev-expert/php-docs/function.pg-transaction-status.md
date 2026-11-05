# Retorna o status atual da transação do servidor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-transaction-status.php

---

# pg\_transaction\_status

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

pg\_transaction\_status — Retorna o status atual da transação do servidor

### Descrição

function **pg\_transaction\_status**([PgSql\Connection](class.pgsql-connection.md) `$connection`): [int](language.types.integer.md)

Retorna o status atual da transação do servidor.

**Cuidado**

**pg\_transaction\_status()** fornecerá resultados incorretos ao usar
um servidor PostgreSQL 7.3 que tenha o parâmetro `autocommit`
desativado. O recurso de confirmação automática do lado do servidor foi
descontinuado e não existe em versões de servidor posteriores.

### Parâmetros

`connection`
:   Uma instância de [PgSql\Connection](class.pgsql-connection.md).

### Valor Retornado

O status pode ser **`PGSQL_TRANSACTION_IDLE`** (atualmente inativo),
**`PGSQL_TRANSACTION_ACTIVE`** (um comando está em andamento),
**`PGSQL_TRANSACTION_INTRANS`** (inativo, em um bloco de transação válido),
ou **`PGSQL_TRANSACTION_INERROR`** (ocioso, em um bloco de transação com falha).
**`PGSQL_TRANSACTION_UNKNOWN`** é relatado se a conexão estiver ruim.
**`PGSQL_TRANSACTION_ACTIVE`** é relatado somente quando uma consulta
foi enviada ao servidor e ainda não foi concluída.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `connection` agora espera uma instância de [PgSql\Connection](class.pgsql-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **pg\_transaction\_status()****

```
<?php
  $dbconn = pg_connect("dbname=publisher") or die("Não foi possível conectar");
  $stat = pg_transaction_status($dbconn);
  if ($stat === PGSQL_TRANSACTION_UNKNOWN) {
      echo 'A conexão está ruim';
  } else if ($stat === PGSQL_TRANSACTION_IDLE) {
      echo 'A conexão está inativa no momento';
  } else {
      echo 'A conexão está em estado de transação';
  }
?>
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
