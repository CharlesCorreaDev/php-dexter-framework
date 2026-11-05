# Obtém informações de coluna de um resultado e retorna como um objeto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mysql-fetch-field.php

---

# mysql\_fetch\_field

(PHP 4, PHP 5)

mysql\_fetch\_field — Obtém informações de coluna de um resultado e retorna como um objeto

**Aviso**

Esta extensão foi descontinuada a partir do PHP 5.5.0 e foi removida no PHP 7.0.0.
Em vez disso, as extensões [MySQLi](book.mysqli.md) ou [PDO\_MySQL](ref.pdo-mysql.md) devem ser usadas.
Veja também o guia [MySQL: escolhendo uma API](mysqlinfo.api.choosing.md).
Alternativas a esta função incluem:

- [mysqli\_fetch\_field()](mysqli-result.fetch-field.md)
- [PDOStatement::getColumnMeta()](pdostatement.getcolumnmeta.md)

### Descrição

function **mysql\_fetch\_field**([resource](language.types.resource.md) `$result`, [int](language.types.integer.md) `$field_offset` = 0): [object](language.types.object.md)

Retorna um objeto contendo informações sobre campo. Esta função pode ser usada
para obter informações sobre campos no resultado de consulta informado.

### Parâmetros

`result`
:   O [resource](language.types.resource.md) do resultado que
    está sendo avaliado. Este resultado vem de uma chamada a
    [mysql\_query()](function.mysql-query.md).

`field_offset`
:   O índice numérico do campo. Se o índice não for especificado, o
    próximo campo que ainda não tenha sido obtido por esta função é recuperado.
    `field_offset` inicia em `0`.

### Valor Retornado

Retorna um [object](language.types.object.md) contendo informação sobre o campo. As propriedades
do objeto são:

- name - nome da coluna
- table - a tabela à qual o objeto pertence, que é o nome do apelido se um estiver definido
- max\_length - comprimento máximo da coluna
- not\_null - 1 se a coluna não puder ser **`null`**
- primary\_key - 1 se a coluna for uma chave primária
- unique\_key - 1 se a coluna for uma chave exclusiva
- multiple\_key - 1 se a coluna for uma chave não-exclusiva
- numeric - 1 se a coluna for numérica
- blob - 1 se a coluna for um BLOB
- type - o tipo da coluna
- unsigned - 1 se a coluna for sem sinal
- zerofill - 1 se a coluna for prenchida com zero

### Examples

**Exemplo #1 Exemplo de **mysql\_fetch\_field()****

```
<?php
$conn = mysql_connect('localhost', 'mysql_user', 'mysql_password');
if (!$conn) {
    die('Não foi possível conectar: ' . mysql_error());
}
mysql_select_db('database');
$result = mysql_query('select * from table');
if (!$result) {
    die('A consulta falhou: ' . mysql_error());
}
/* Obtém as informações da coluna */
$i = 0;
while ($i < mysql_num_fields($result)) {
    echo "Informação para a coluna $i:<br />\n";
    $meta = mysql_fetch_field($result, $i);
    if (!$meta) {
        echo "Sem informação disponível<br />\n";
    }
    echo "<pre>
blob:         $meta->blob
max_length:   $meta->max_length
multiple_key: $meta->multiple_key
name:         $meta->name
not_null:     $meta->not_null
numeric:      $meta->numeric
primary_key:  $meta->primary_key
table:        $meta->table
type:         $meta->type
unique_key:   $meta->unique_key
unsigned:     $meta->unsigned
zerofill:     $meta->zerofill
</pre>";
    $i++;
}
mysql_free_result($result);
?>
```

### Notas

> **Nota**:
>
> Os nomes de campos retornados por esta função
> *diferenciam maiúsculas e minúsculas*.

> **Nota**:
>
> Se campos ou nomes de tabelas forem apelidados na consulta SQL, o nome do apelido
> será retornado. O nome original pode ser recuperado, por exemplo, usando
> [mysqli\_result::fetch\_field()](mysqli-result.fetch-field.md).

### Veja também

- [mysql\_field\_seek()](function.mysql-field-seek.md) - Define o ponteiro do resultado para o índice de campo especificado

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
