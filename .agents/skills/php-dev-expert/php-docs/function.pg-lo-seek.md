# Aponta para posição dentro de um objeto grande

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-lo-seek.php

---

# pg\_lo\_seek

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

pg\_lo\_seek — 
Aponta para posição dentro de um objeto grande

### Descrição

function **pg\_lo\_seek**([PgSql\Lob](class.pgsql-lob.md) `$lob`, [int](language.types.integer.md) `$offset`, [int](language.types.integer.md) `$whence` = **`SEEK_CUR`**): [bool](language.types.boolean.md)

**pg\_lo\_seek()** seeks a position within an [PgSql\Lob](class.pgsql-lob.md) instance.

Para usar a interface de objeto grande, é necessário
incluí-la em um bloco de transação.

### Parâmetros

`lob`
:   Uma instância de [PgSql\Lob](class.pgsql-lob.md), retornada por [pg\_lo\_open()](function.pg-lo-open.md).

`offset`
:   A posição em bytes para apontar.

`whence`
:   Uma das constantes **`PGSQL_SEEK_SET`** (aponta a partir do início do objeto),
    **`PGSQL_SEEK_CUR`** (aponta a partir da posição atual)
    ou **`PGSQL_SEEK_END`** (aponta a partir do final do objeto).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `lob` agora espera uma instância de [PgSql\Lob](class.pgsql-lob.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **pg\_lo\_seek()****

```
<?php
   $doc_oid = 189762345;
   $database = pg_connect("dbname=jacarta");
   pg_query($database, "begin");
   $handle = pg_lo_open($database, $doc_oid, "r");
   // Ignora os primeiros 50.000 bytes
   pg_lo_seek($handle, 50000, PGSQL_SEEK_SET);
   // Lê os próximos 10.000 bytes
   $data = pg_lo_read($handle, 10000);
   pg_query($database, "commit");
   echo $data;
?>
```

### Veja também

- [pg\_lo\_tell()](function.pg-lo-tell.md) - Retorna a posição de busca atual a de um objeto grande

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
