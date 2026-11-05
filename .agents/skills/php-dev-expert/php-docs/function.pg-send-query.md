# Envia consulta assíncrona

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-send-query.php

---

# pg\_send\_query

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

pg\_send\_query — 
Envia consulta assíncrona

### Descrição

function **pg\_send\_query**([PgSql\Connection](class.pgsql-connection.md) `$connection`, [string](language.types.string.md) `$query`): [int](language.types.integer.md)|[bool](language.types.boolean.md)

**pg\_send\_query()** envia uma consulta ou consultas de forma assíncrona para a
`connection`. Ao contrário de
[pg\_query()](function.pg-query.md), ele pode enviar múltiplas consultas de uma vez ao
PostgreSQL e obter os resultados um por um usando
[pg\_get\_result()](function.pg-get-result.md).

A execução do script não é bloqueada enquanto as consultas estão em execução. Use
[pg\_connection\_busy()](function.pg-connection-busy.md) para verificar se a conexão está
ocupada (ou seja, a consulta está em execução). As consultas podem ser canceladas usando
[pg\_cancel\_query()](function.pg-cancel-query.md).

Embora o usuário possa enviar diversas consultas de uma só vez, diversas consultas
não podem ser enviadas em uma conexão ocupada. Se uma consulta for enviada enquanto
a conexão estiver ocupada, ela aguardará até que a última consulta termine e
descarta todos os seus resultados.

### Parâmetros

`connection`
:   Uma instância de [PgSql\Connection](class.pgsql-connection.md).

`query`
:   A instrução ou instruções SQL a serem executadas.

    Os dados dentro da consulta devem ser [escapados corretamente](function.pg-escape-string.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso, **`false`** ou `0` em caso de falha. Use [pg\_get\_result()](function.pg-get-result.md)
para determinar o resultado da consulta.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `connection` agora espera uma instância de [PgSql\Connection](class.pgsql-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **pg\_send\_query()****

```
<?php
  $dbconn = pg_connect("dbname=publisher") or die("Não foi possivel conectar");

  if (!pg_connection_busy($dbconn)) {
      pg_send_query($dbconn, "select * from authors; select count(*) from authors;");
  }

  $res1 = pg_get_result($dbconn);
  echo "Primeira chamada a pg_get_result(): $res1\n";
  $rows1 = pg_num_rows($res1);
  echo "$res1 possui $rows1 registro(s)\n\n";

  $res2 = pg_get_result($dbconn);
  echo "Segunda chamada a pg_get_result(): $res2\n";
  $rows2 = pg_num_rows($res2);
  echo "$res2 possui $rows2 registro(s)\n";
?>
```

O exemplo acima produzirá:

```
Primeira chamada a pg_get_result(): Resource id #3
Resource id #3 possui 3 registro(s)

Segunda chamada a pg_get_result(): Resource id #4
Resource id #4 possui 1 registro(s)
```

### Veja também

- [pg\_query()](function.pg-query.md) - Executa uma consulta
- [pg\_cancel\_query()](function.pg-cancel-query.md) - Cancela uma consulta assíncrona
- [pg\_get\_result()](function.pg-get-result.md) - Obtém o resultado da consulta assíncrona
- [pg\_connection\_busy()](function.pg-connection-busy.md) - Obtém se conexão está ocupada ou não

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
