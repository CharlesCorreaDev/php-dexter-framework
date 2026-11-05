# Lê um objeto grande

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-lo-read.php

---

# pg\_lo\_read

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

pg\_lo\_read — Lê um objeto grande

### Descrição

function **pg\_lo\_read**([PgSql\Lob](class.pgsql-lob.md) `$lob`, [int](language.types.integer.md) `$length` = 8192): [string](language.types.string.md)|[false](language.types.singleton.md)

**pg\_lo\_read()** lê no máximo
`length` bytes de um objeto grande e o
retorna como uma [string](language.types.string.md).

Para usar a interface de objeto grande, é necessário
incluí-la em um bloco de transação.

> **Nota**:
>
> Esta função costumava ser chamada de **pg\_loread()**.

### Parâmetros

`lob`
:   Uma instância de [PgSql\Lob](class.pgsql-lob.md), retornada por [pg\_lo\_open()](function.pg-lo-open.md).

`length`
:   Um número máximo opcional de bytes a serem retornados.

### Valor Retornado

Uma [string](language.types.string.md) contendo bytes de `length` do
objeto grande, ou **`false`** por erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `lob` agora espera uma instância de [PgSql\Lob](class.pgsql-lob.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **pg\_lo\_read()****

```
<?php
   $doc_oid = 189762345;
   $database = pg_connect("dbname=jacarta");
   pg_query($database, "begin");
   $handle = pg_lo_open($database, $doc_oid, "r");
   $data = pg_lo_read($handle, 50000);
   pg_query($database, "commit");
   echo $data;
?>
```

### Veja também

- [pg\_lo\_read\_all()](function.pg-lo-read-all.md) - Lê um objeto grande inteiro e envia direto para o navegador

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
