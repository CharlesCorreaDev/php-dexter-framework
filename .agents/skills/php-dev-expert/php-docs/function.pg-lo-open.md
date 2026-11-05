# Abra um objeto grande

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-lo-open.php

---

# pg\_lo\_open

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

pg\_lo\_open — Abra um objeto grande

### Descrição

function **pg\_lo\_open**([PgSql\Connection](class.pgsql-connection.md) `$connection`, [int](language.types.integer.md) `$oid`, [string](language.types.string.md) `$mode`): [PgSql\Lob](class.pgsql-lob.md)|[false](language.types.singleton.md)

**pg\_lo\_open()** abre um objeto grande no banco de dados
e retorna uma instância [PgSql\Lob](class.pgsql-lob.md) para que possa ser manipulado.

**Aviso**

Não feche a conexão com o banco de dados antes de fechar a instância [PgSql\Lob](class.pgsql-lob.md).

Para usar a interface de objeto grande, é necessário
incluí-la em um bloco de transação.

> **Nota**:
>
> Esta função costumava ser chamada de **pg\_loopen()**.

### Parâmetros

`connection`
:   Uma instância de [PgSql\Connection](class.pgsql-connection.md).
    Quando o parâmetro `connection` não for especificado, a conexão padrão será usada.
    A conexão padrão é a última conexão feita por [pg\_connect()](function.pg-connect.md)
    ou [pg\_pconnect()](function.pg-pconnect.md).

    **Aviso**

    A partir do PHP 8.1.0, usar a conexão padrão foi descontinuado.

`oid`
:   O OID do objeto grande no banco de dados.

`mode`
:   Pode ser "r" para somente leitura, "w" para somente gravação ou "rw" para leitura e
    gravação.

### Valor Retornado

Uma instância [PgSql\Lob](class.pgsql-lob.md), ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | Retorna uma instância [PgSql\Lob](class.pgsql-lob.md) agora; anteriormente, um [resource](language.types.resource.md) era retornado. |
| 8.1.0 | O parâmetro `connection` agora espera uma instância de [PgSql\Connection](class.pgsql-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **pg\_lo\_open()****

```
<?php
   $database = pg_connect("dbname=jacarta");
   pg_query($database, "begin");
   $oid = pg_lo_create($database);
   echo "$oid\n";
   $handle = pg_lo_open($database, $oid, "w");
   echo "$handle\n";
   pg_lo_write($handle, "large object data");
   pg_lo_close($handle);
   pg_query($database, "commit");
?>
```

### Veja também

- [pg\_lo\_close()](function.pg-lo-close.md) - Fecha um objeto grande
- [pg\_lo\_create()](function.pg-lo-create.md) - Cria um objeto grande

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
