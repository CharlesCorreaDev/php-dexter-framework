# Cria um objeto grande

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-lo-create.php

---

# pg\_lo\_create

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

pg\_lo\_create — Cria um objeto grande

### Descrição

function **pg\_lo\_create**([PgSql\Connection](class.pgsql-connection.md) `$connection` = ?, [mixed](language.types.mixed.md) `$object_id` = ?): [int](language.types.integer.md)

function **pg\_lo\_create**([mixed](language.types.mixed.md) `$object_id`): [int](language.types.integer.md)

**pg\_lo\_create()** cria um objeto grande
e retorna o OID do objeto
grande. Os modos de acesso do PostgreSQL
**`INV_READ`** e **`INV_WRITE`**
não são suportados, o objeto é criado sempre com acesso
de leitura e gravação.

Para usar a interface de objeto grande, é necessário
incluí-la em um bloco de transação.

Em vez de usar a interface de objeto grande (que não tem controles de acesso
e é complicada de usar), experimente o tipo de coluna bytea
e [pg\_escape\_bytea()](function.pg-escape-bytea.md) do PostgreSQL.

> **Nota**:
>
> Esta função costumava ser chamada de **pg\_locreate()**.

### Parâmetros

`connection`
:   Uma instância de [PgSql\Connection](class.pgsql-connection.md).
    Quando o parâmetro `connection` não for especificado, a conexão padrão será usada.
    A conexão padrão é a última conexão feita por [pg\_connect()](function.pg-connect.md)
    ou [pg\_pconnect()](function.pg-pconnect.md).

    **Aviso**

    A partir do PHP 8.1.0, usar a conexão padrão foi descontinuado.

`object_id`
:   Se um `object_id` for fornecido, a função
    tentará criar um objeto grande com este id, caso contrário,
    um id de objeto livre será atribuído pelo servidor.

### Valor Retornado

Um objeto grande OID, ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `connection` agora espera uma instância de [PgSql\Connection](class.pgsql-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **pg\_lo\_create()****

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
