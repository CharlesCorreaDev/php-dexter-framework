# Insere registros em uma tabela a partir de um array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-copy-from.php

---

# pg\_copy\_from

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

pg\_copy\_from — 
Insere registros em uma tabela a partir de um array

### Descrição

function **pg\_copy\_from**(  
    [PgSql\Connection](class.pgsql-connection.md) `$connection`,  
    [string](language.types.string.md) `$table_name`,  
    [array](language.types.array.md)|[Traversable](class.traversable.md) `$rows`,  
    [string](language.types.string.md) `$separator` = "\t",  
    [string](language.types.string.md) `$null_as` = "\\\\N"  
): [bool](language.types.boolean.md)

**pg\_copy\_from()** insere registros em uma tabela a partir de
`rows`. Ele emite um comando SQL `COPY FROM`
internamente para inserir registros.

### Parâmetros

`connection`
:   Uma instância de [PgSql\Connection](class.pgsql-connection.md).

`table_name`
:   Nome da tabela na qual copiar as `rows`.

`rows`
:   Dados do tipo [iterable](language.types.iterable.md) a serem copiados em `table_name`.
    Cada valor em `rows` se torna uma linha em `table_name`.
    Cada valor em `rows` deve ser uma string delimitada dos valores
    a serem inseridos em cada campo. Os valores devem ser finalizados com avanço de linha.

`separator`
:   O token que separa os valores de cada campo em cada elemento de
    `rows`. O padrão é `\t`.

`null_as`
:   Como os valores SQL `NULL` são representados nas
    `rows`. O padrão é `\\N` (`"\\\\N"`).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | `rows` agora é do tipo [iterable](language.types.iterable.md). Anteriormente era do tipo [array](language.types.array.md). |
| 8.1.0 | O parâmetro `connection` agora espera uma instância de [PgSql\Connection](class.pgsql-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **pg\_copy\_from()****

```
<?php
   $db = pg_connect("dbname=publisher") or die("Não foi possível conectar");

   $rows = pg_copy_to($db, $table_name);

   pg_query($db, "DELETE FROM $table_name");

   pg_copy_from($db, $table_name, $rows);
?>
```

### Veja também

- [pg\_copy\_to()](function.pg-copy-to.md) - Copia uma tabela para um array

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
