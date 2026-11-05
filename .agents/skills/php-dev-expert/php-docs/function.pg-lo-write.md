# Escreve em um objeto grande

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-lo-write.php

---

# pg\_lo\_write

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

pg\_lo\_write — Escreve em um objeto grande

### Descrição

function **pg\_lo\_write**([PgSql\Lob](class.pgsql-lob.md) `$lob`, [string](language.types.string.md) `$data`, [?](language.types.null.md)[int](language.types.integer.md) `$length` = **`null`**): [int](language.types.integer.md)|[false](language.types.singleton.md)

**pg\_lo\_write()** grava dados em um objeto grande
na posição de busca atual.

Para usar a interface de objeto grande, é necessário
incluí-la em um bloco de transação.

> **Nota**:
>
> Esta função costumava ser chamada de **pg\_lowrite()**.

### Parâmetros

`lob`
:   Uma instância de [PgSql\Lob](class.pgsql-lob.md), retornada por [pg\_lo\_open()](function.pg-lo-open.md).

`data`
:   Os dados a serem gravados no objeto grande. Se `length` for
    um [int](language.types.integer.md) e for menor que o comprimento de `data`, apenas
    os bytes de `length` serão gravados.

`length`
:   Um número máximo opcional de bytes a serem gravados. Deve ser maior que zero
    e não maior que o comprimento dos `data`. O padrão é
    o comprimento dos `data`.

### Valor Retornado

O número de bytes gravados no objeto grande, ou **`false`** em caso de erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `lob` agora espera uma instância de [PgSql\Lob](class.pgsql-lob.md); anteriormente, um [resource](language.types.resource.md) era esperado. |
| 8.0.0 | `length` agora é anulável. |

### Examples

**Exemplo #1 Exemplo de **pg\_lo\_write()****

```
<?php
   $doc_oid = 189762345;
   $data = "Isto irá substituir o início do objeto grande.";
   $database = pg_connect("dbname=jacarta");
   pg_query($database, "begin");
   $handle = pg_lo_open($database, $doc_oid, "w");
   $data = pg_lo_write($handle, $data);
   pg_query($database, "commit");
?>
```

### Veja também

- [pg\_lo\_create()](function.pg-lo-create.md) - Cria um objeto grande
- [pg\_lo\_open()](function.pg-lo-open.md) - Abra um objeto grande

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
