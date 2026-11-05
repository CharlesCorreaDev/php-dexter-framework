# Retorna a última mensagem de aviso do servidor PostgreSQL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-last-notice.php

---

# pg\_last\_notice

(PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8)

pg\_last\_notice — 
Retorna a última mensagem de aviso do servidor PostgreSQL

### Descrição

function **pg\_last\_notice**([PgSql\Connection](class.pgsql-connection.md) `$connection`, [int](language.types.integer.md) `$mode` = **`PGSQL_NOTICE_LAST`**): [array](language.types.array.md)|[string](language.types.string.md)|[bool](language.types.boolean.md)

**pg\_last\_notice()** retorna a última mensagem de
aviso do servidor PostgreSQL na especificada
`connection`. O servidor PostgreSQL envia mensagens
de aviso em vários casos, por exemplo ao criar uma coluna `SERIAL`
em uma tabela.

Com **pg\_last\_notice()**, você pode evitar a emissão de consultas
inúteis verificando se o aviso está ou não relacionado à sua transação.

O rastreamento de mensagens de aviso pode ser definido como opcional definindo 1 para
`pgsql.ignore_notice` no php.ini.

O registro de mensagens de aviso pode ser definido como opcional definindo 0 para
`pgsql.log_notice` no php.ini.
A menos que `pgsql.ignore_notice` esteja definido
como 0, a mensagem de aviso não pode ser registrada.

### Parâmetros

`connection`
:   Uma instância de [PgSql\Connection](class.pgsql-connection.md).

`mode`
:   Um dos **`PGSQL_NOTICE_LAST`** (para retornar o último aviso),
    **`PGSQL_NOTICE_ALL`** (para retornar todos os avisos)
    ou **`PGSQL_NOTICE_CLEAR`** (para limpar avisos).

### Valor Retornado

Uma [string](language.types.string.md) contendo o último aviso
na `connection` fornecida com
**`PGSQL_NOTICE_LAST`**,
um [array](language.types.array.md) com **`PGSQL_NOTICE_ALL`**,
um [bool](language.types.boolean.md) com **`PGSQL_NOTICE_CLEAR`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `connection` agora espera uma instância de [PgSql\Connection](class.pgsql-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |
| 7.1.0 | O parâmetro `mode` foi adicionado. |

### Examples

**Exemplo #1 Exemplo de **pg\_last\_notice()****

```
<?php
  $pgsql_conn = pg_connect("dbname=mark host=localhost");

  $res = pg_query("CREATE TABLE test (id SERIAL)");

  $notice = pg_last_notice($pgsql_conn);

  echo $notice;
?>
```

O exemplo acima produzirá:

```
CREATE TABLE will create implicit sequence "test_id_seq" for "serial" column "test.id"
```

### Veja também

- [pg\_query()](function.pg-query.md) - Executa uma consulta
- [pg\_last\_error()](function.pg-last-error.md) - Obtém a última string da mensagem de erro de uma conexão

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
