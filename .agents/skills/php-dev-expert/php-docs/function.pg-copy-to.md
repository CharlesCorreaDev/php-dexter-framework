# Copia uma tabela para um array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-copy-to.php

---

# pg\_copy\_to

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

pg\_copy\_to — 
Copia uma tabela para um array

### Descrição

function **pg\_copy\_to**(  
    [PgSql\Connection](class.pgsql-connection.md) `$connection`,  
    [string](language.types.string.md) `$table_name`,  
    [string](language.types.string.md) `$separator` = "\t",  
    [string](language.types.string.md) `$null_as` = "\\\\N"  
): [array](language.types.array.md)|[false](language.types.singleton.md)

**pg\_copy\_to()** copia uma tabela para um array. Ele
emite o comando SQL `COPY TO` internamente para
recuperar registros.

### Parâmetros

`connection`
:   Uma instância de [PgSql\Connection](class.pgsql-connection.md).

`table_name`
:   Nome da tabela da qual copiar os dados em `rows`.

`separator`
:   O token que separa os valores de cada campo em cada elemento de
    `rows`. O padrão é `\t`.

`null_as`
:   Como os valores SQL `NULL` são representados nas
    `rows`. O padrão é `\\N` (`"\\\\N"`).

### Valor Retornado

Um [array](language.types.array.md) com um elemento para cada linha de dados `COPY`, ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `connection` agora espera uma instância de [PgSql\Connection](class.pgsql-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **pg\_copy\_to()****

```
<?php
   $db = pg_connect("dbname=publisher") or die("Não foi possível conectar");

   $rows = pg_copy_to($db, $table_name);

   pg_query($db, "DELETE FROM $table_name");

   pg_copy_from($db, $table_name, $rows);
?>
```

### Veja também

- [pg\_copy\_from()](function.pg-copy-from.md) - Insere registros em uma tabela a partir de um array

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
