# Trunca um objeto grande

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-lo-truncate.php

---

# pg\_lo\_truncate

(PHP 5 >= 5.6.0, PHP 7, PHP 8)

pg\_lo\_truncate — 
Trunca um objeto grande

### Descrição

function **pg\_lo\_truncate**([PgSql\Lob](class.pgsql-lob.md) `$lob`, [int](language.types.integer.md) `$size`): [bool](language.types.boolean.md)

**pg\_lo\_truncate()** truncates an [PgSql\Lob](class.pgsql-lob.md) instance.

Para usar a interface de objeto grande, é necessário
incluí-la em um bloco de transação.

### Parâmetros

`lob`
:   Uma instância de [PgSql\Lob](class.pgsql-lob.md), retornada por [pg\_lo\_open()](function.pg-lo-open.md).

`size`
:   O número de bytes a serem truncados.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `lob` agora espera uma instância de [PgSql\Lob](class.pgsql-lob.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **pg\_lo\_truncate()****

```
<?php
   $doc_oid = 189762345;
   $database = pg_connect("dbname=jacarta");
   pg_query($database, "begin");
   $handle = pg_lo_open($database, $doc_oid, "r");
   // Trunca para 0
   pg_lo_truncate($handle, 0);
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
