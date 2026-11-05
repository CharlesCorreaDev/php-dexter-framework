# Obtém o nome da tabela na qual o campo especificado esta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mysql-field-table.php

---

# mysql\_field\_table

(PHP 4, PHP 5)

mysql\_field\_table — Obtém o nome da tabela na qual o campo especificado esta

**Aviso**

Esta extensão foi descontinuada a partir do PHP 5.5.0 e foi removida no PHP 7.0.0.
Em vez disso, as extensões [MySQLi](book.mysqli.md) ou [PDO\_MySQL](ref.pdo-mysql.md) devem ser usadas.
Veja também o guia [MySQL: escolhendo uma API](mysqlinfo.api.choosing.md).
Alternativas a esta função incluem:

- [mysqli\_fetch\_field\_direct()](mysqli-result.fetch-field-direct.md) [table] ou [orgtable]
- [PDOStatement::getColumnMeta()](pdostatement.getcolumnmeta.md) [table]

### Descrição

function **mysql\_field\_table**([resource](language.types.resource.md) `$result`, [int](language.types.integer.md) `$field_offset`): [string](language.types.string.md)

Retorna o nome da tabela na qual o campo especificado está.

### Parâmetros

`result`
:   O [resource](language.types.resource.md) do resultado que
    está sendo avaliado. Este resultado vem de uma chamada a
    [mysql\_query()](function.mysql-query.md).

`field_offset`
:   O deslocamento numérico do campo.
    `field_offset` começa em `0`. Se
    `field_offset` não existir, um erro de nível
    **`E_WARNING`** também será emitido.

### Valor Retornado

O nome da tabela em caso de sucesso.

### Examples

**Exemplo #1 Exemplo de **mysql\_field\_table()****

```
<?php

$query = "SELECT account.*, country.* FROM account, country WHERE country.name = 'Portugal' AND account.country_id = country.id";

// obtém resultado do banco de dados
$result = mysql_query($query);

// Lista o nome da tabela e depois o nome do campo
for ($i = 0; $i < mysql_num_fields($result); ++$i) {
    $table = mysql_field_table($result, $i);
    $field = mysql_field_name($result, $i);

    echo  "$table: $field\n";
}

?>
```

### Notas

> **Nota**:
>
> Para compatibilidade com versões anteriores, o seguinte
> apelido descontinuado pode ser usado:
> **mysql\_fieldtable()**

### Veja também

- [mysql\_list\_tables()](function.mysql-list-tables.md) - Lista as tabelas em um banco de dados MySQL

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
