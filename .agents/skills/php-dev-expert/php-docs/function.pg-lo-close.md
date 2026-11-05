# Fecha um objeto grande

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-lo-close.php

---

# pg\_lo\_close

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

pg\_lo\_close — Fecha um objeto grande

### Descrição

function **pg\_lo\_close**([PgSql\Lob](class.pgsql-lob.md) `$lob`): [bool](language.types.boolean.md)

**pg\_lo\_close()** fecha um objeto grande.

Para usar a interface de objeto grande, é necessário incluí-la
em um bloco de transação.

> **Nota**:
>
> Esta função costumava ser chamada de **pg\_loclose()**.

### Parâmetros

`lob`
:   Uma instância de [PgSql\Lob](class.pgsql-lob.md), retornada por [pg\_lo\_open()](function.pg-lo-open.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `lob` agora espera uma instância de [PgSql\Lob](class.pgsql-lob.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **pg\_lo\_close()****

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

- [pg\_lo\_open()](function.pg-lo-open.md) - Abra um objeto grande
- [pg\_lo\_create()](function.pg-lo-create.md) - Cria um objeto grande
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
