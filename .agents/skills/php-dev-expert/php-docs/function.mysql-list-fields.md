# Lista os campos de uma tabela MySQL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mysql-list-fields.php

---

# mysql\_list\_fields

(PHP 4, PHP 5)

mysql\_list\_fields — Lista os campos de uma tabela MySQL

**Aviso**

Esta função foi descontinuada a partir do PHP 5.4.0 e
ela e a [extensão MySQL original](book.mysql.md) foram removidas a partir do PHP 7.0.0.
Em vez disso, use as extensões [MySQLi](book.mysqli.md) ou [PDO\_MySQL](ref.pdo-mysql.md), que são desenvolvidas ativamente.
Veja também o guia [MySQL: escolhendo uma API](mysqlinfo.api.choosing.md).
Alternativas a esta função incluem:

- Consulta SQL: `SHOW COLUMNS FROM sometable`

### Descrição

function **mysql\_list\_fields**([string](language.types.string.md) `$database_name`, [string](language.types.string.md) `$table_name`, [resource](language.types.resource.md) `$link_identifier` = NULL): [resource](language.types.resource.md)

Obtém informações sobre a tabela informada.

Esta função foi descontinuada. É preferrível usar
[mysql\_query()](function.mysql-query.md) para realizar uma consulta SQL `SHOW COLUMNS FROM
table [LIKE 'name']`.

### Parâmetros

`database_name`
:   O nome do banco de dados que está sendo consultado.

`table_name`
:   O nome da tabela que esta sendo consultada.

`link_identifier`
:   A conexão MySQL. Se o
    identificador da conexão não for especificado, a última conexão aberta por
    [mysql\_connect()](function.mysql-connect.md) será usada. Se não houver uma conexão anterior,
    haverá uma tentativa de criar uma como se [mysql\_connect()](function.mysql-connect.md) tivesse sido chamada
    sem argumentos. Se nenhuma conexão for encontrada ou estabelecida, um erro de nível
    **`E_WARNING`** será gerado.

### Valor Retornado

Um ponteiro de recurso [resource](language.types.resource.md) em caso de sucesso, ou **`false`** em
caso de falha.

O ponteiro de resultado pode ser usado com [mysql\_field\_flags()](function.mysql-field-flags.md),
[mysql\_field\_len()](function.mysql-field-len.md),
[mysql\_field\_name()](function.mysql-field-name.md) e
[mysql\_field\_type()](function.mysql-field-type.md).

### Examples

**Exemplo #1 Alternativa para a função descontinuada **mysql\_list\_fields()****

```
<?php
$result = mysql_query("SHOW COLUMNS FROM sometable");
if (!$result) {
    echo 'Não foi possível executar a consulta: ' . mysql_error();
    exit;
}
if (mysql_num_rows($result) > 0) {
    while ($row = mysql_fetch_assoc($result)) {
        print_r($row);
    }
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [Field] => id
    [Type] => int(7)
    [Null] =>
    [Key] => PRI
    [Default] =>
    [Extra] => auto_increment
)
Array
(
    [Field] => email
    [Type] => varchar(100)
    [Null] =>
    [Key] =>
    [Default] =>
    [Extra] =>
)
```

### Notas

> **Nota**:
>
> Para compatibilidade com versões anteriores, o seguinte
> apelido descontinuado pode ser usado:
> **mysql\_listfields()**

### Veja também

- [mysql\_field\_flags()](function.mysql-field-flags.md) - Obtém as opções associadas ao campo especificado em um resultado
- [mysql\_info()](function.mysql-info.md) - Obtém informação sobre a consulta mais recente

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
