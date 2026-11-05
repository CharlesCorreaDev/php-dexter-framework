# Exporta um objeto grande para arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-lo-export.php

---

# pg\_lo\_export

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

pg\_lo\_export — Exporta um objeto grande para arquivo

### Descrição

function **pg\_lo\_export**([PgSql\Connection](class.pgsql-connection.md) `$connection` = ?, [int](language.types.integer.md) `$oid`, [string](language.types.string.md) `$filename`): [bool](language.types.boolean.md)

**pg\_lo\_export()** pega um objeto grande em um
banco de dados PostgreSQL e salva seu conteúdo em um arquivo no sistema de
arquivos local.

Para usar a interface de objeto grande, é necessário
incluí-la em um bloco de transação.

> **Nota**:
>
> Esta função costumava ser chamada de **pg\_loexport()**.

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

`filename`
:   O caminho completo e o nome do arquivo no qual gravar o
    objeto grande no sistema de arquivos do cliente.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `connection` agora espera uma instância de [PgSql\Connection](class.pgsql-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **pg\_lo\_export()****

```
<?php
   $database = pg_connect("dbname=jacarta");
   pg_query($database, "begin");
   $oid = pg_lo_create($database);
   $handle = pg_lo_open($database, $oid, "w");
   pg_lo_write($handle, "large object data");
   pg_lo_close($handle);
   pg_lo_export($database, $oid, '/tmp/lob.dat');
   pg_query($database, "commit");
?>
```

### Veja também

- [pg\_lo\_import()](function.pg-lo-import.md) - Importa um objeto grande do arquivo

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
