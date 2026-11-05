# Escapa um identificador para inserção em um campo de texto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-escape-identifier.php

---

# pg\_escape\_identifier

(PHP 5 >= 5.4.4, PHP 7, PHP 8)

pg\_escape\_identifier — 
Escapa um identificador para inserção em um campo de texto

### Descrição

function **pg\_escape\_identifier**([PgSql\Connection](class.pgsql-connection.md) `$connection` = ?, [string](language.types.string.md) `$string`): [string](language.types.string.md)|[false](language.types.singleton.md)

**pg\_escape\_identifier()** escapa um identificador
(por exemplo, tabela, nomes de campos) para consultar o banco de dados. Ele retorna uma
string identificadora de escape para o servidor
PostgreSQL. **pg\_escape\_identifier()** adiciona aspas duplas
antes e depois dos dados. Os usuários não devem adicionar aspas
duplas. O uso desta função é recomendado para parâmetros identificadores
em consulta. Para literais SQL (ou seja, parâmetros exceto
bytea), [pg\_escape\_literal()](function.pg-escape-literal.md)
ou [pg\_escape\_string()](function.pg-escape-string.md) devem ser usados. Para campos do tipo
bytea, [pg\_escape\_bytea()](function.pg-escape-bytea.md) deve ser usado
no lugar.

### Parâmetros

`connection`
:   Uma instância de [PgSql\Connection](class.pgsql-connection.md).
    Quando o parâmetro `connection` não for especificado, a conexão padrão será usada.
    A conexão padrão é a última conexão feita por [pg\_connect()](function.pg-connect.md)
    ou [pg\_pconnect()](function.pg-pconnect.md).

    **Aviso**

    A partir do PHP 8.1.0, usar a conexão padrão foi descontinuado.

`string`
:   Uma [string](language.types.string.md) contendo texto a ser escapado.

### Valor Retornado

Uma [string](language.types.string.md) contendo os dados escapados ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `connection` agora espera uma instância de [PgSql\Connection](class.pgsql-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **pg\_escape\_identifier()****

```
<?php
  // Conecta ao banco de dados
  $dbconn = pg_connect('dbname=foo');

  // Escapa os dados do nome da tabela
  $escaped = pg_escape_identifier($table_name);

  // Seleciona linhas de $table_name
  pg_query("SELECT * FROM {$escaped};");
?>
```

### Veja também

- [pg\_escape\_literal()](function.pg-escape-literal.md) - Escapa um literal para inserção em um campo de texto
- [pg\_escape\_bytea()](function.pg-escape-bytea.md) - Escapa uma string para inserção em um campo bytea
- [pg\_escape\_string()](function.pg-escape-string.md) - Escapa uma string para consulta

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
