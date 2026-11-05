# Procura uma configuração de parâmetro atual do servidor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-parameter-status.php

---

# pg\_parameter\_status

(PHP 5, PHP 7, PHP 8)

pg\_parameter\_status — Procura uma configuração de parâmetro atual do servidor

### Descrição

function **pg\_parameter\_status**([PgSql\Connection](class.pgsql-connection.md) `$connection` = ?, [string](language.types.string.md) `$name`): [string](language.types.string.md)|[false](language.types.singleton.md)

Procura uma configuração de parâmetro atual do servidor.

Certos valores de parâmetros são reportados automaticamente pelo
servidor na inicialização da conexão ou sempre que seus valores mudam. **pg\_parameter\_status()** pode ser
usado para interrogar essas configurações. Ele retorna o valor atual de um
parâmetro, se conhecido, ou **`false`** se o parâmetro não for conhecido.

Os parâmetros relatados pelo servidor incluem `server_version`,
`server_encoding`, `client_encoding`,
`is_superuser`, `session_authorization`,
`DateStyle`, `TimeZone` e `integer_datetimes`.
Observe que
`server_version`, `server_encoding` e `integer_datetimes`
não podem ser alterados após a inicialização do PostgreSQL.

### Parâmetros

`connection`
:   Uma instância de [PgSql\Connection](class.pgsql-connection.md).
    Quando o parâmetro `connection` não for especificado, a conexão padrão será usada.
    A conexão padrão é a última conexão feita por [pg\_connect()](function.pg-connect.md)
    ou [pg\_pconnect()](function.pg-pconnect.md).

    **Aviso**

    A partir do PHP 8.1.0, usar a conexão padrão foi descontinuado.

`name`
:   Os possíveis valores de `name` incluem `server_version`,
    `server_encoding`, `client_encoding`,
    `is_superuser`, `session_authorization`,
    `DateStyle`, `TimeZone` e
    `integer_datetimes`. Observe que esse valor diferencia maiúsculas de minúsculas.

### Valor Retornado

Uma [string](language.types.string.md) contendo o valor do parâmetro, **`false`** em caso de falha ou
`name` inválido.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `connection` agora espera uma instância de [PgSql\Connection](class.pgsql-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **pg\_parameter\_status()****

```
<?php
  $dbconn = pg_connect("dbname=publisher") or die("Não foi possível conectar");

  echo "Codificação de servidor: ", pg_parameter_status($dbconn, "server_encoding");
?>
```

O exemplo acima produzirá:

```
Codificação de servidor: SQL_ASCII
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
