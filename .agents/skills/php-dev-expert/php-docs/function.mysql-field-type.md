# Obtém o tipo do campo especificado em um resultado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mysql-field-type.php

---

# mysql\_field\_type

(PHP 4, PHP 5)

mysql\_field\_type — Obtém o tipo do campo especificado em um resultado

**Aviso**

Esta extensão foi descontinuada a partir do PHP 5.5.0 e foi removida no PHP 7.0.0.
Em vez disso, as extensões [MySQLi](book.mysqli.md) ou [PDO\_MySQL](ref.pdo-mysql.md) devem ser usadas.
Veja também o guia [MySQL: escolhendo uma API](mysqlinfo.api.choosing.md).
Alternativas a esta função incluem:

- [mysqli\_fetch\_field\_direct()](mysqli-result.fetch-field-direct.md) [type]
- [PDOStatement::getColumnMeta()](pdostatement.getcolumnmeta.md) [driver:decl\_type] ou [pdo\_type]

### Descrição

function **mysql\_field\_type**([resource](language.types.resource.md) `$result`, [int](language.types.integer.md) `$field_offset`): [string](language.types.string.md)

**mysql\_field\_type()** é similar a função
[mysql\_field\_name()](function.mysql-field-name.md). Os argumentos são
idênticos, mas é o tipo do campo que é retornado.

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

O tipo de campo retornado
será um de `"int"`, `"real"`,
`"string"`, `"blob"` e outros como
detalhado na [» 
documentação do MySQL](https://dev.mysql.com/doc/).

### Examples

**Exemplo #1 Exemplo de **mysql\_field\_type()****

```
<?php
mysql_connect("localhost", "mysql_username", "mysql_password");
mysql_select_db("mysql");
$result = mysql_query("SELECT * FROM func");
$fields = mysql_num_fields($result);
$rows   = mysql_num_rows($result);
$table  = mysql_field_table($result, 0);
echo "Sua tabela '" . $table . "' tem " . $fields . " campos e " . $rows . " registro(s)\n";
echo "A tabela tem os seguintes campos:\n";
for ($i=0; $i < $fields; $i++) {
    $type  = mysql_field_type($result, $i);
    $name  = mysql_field_name($result, $i);
    $len   = mysql_field_len($result, $i);
    $flags = mysql_field_flags($result, $i);
    echo $type . " " . $name . " " . $len . " " . $flags . "\n";
}
mysql_free_result($result);
mysql_close();
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Sua tabela 'func' tem 4 campos e 1 registro(s)
A tabela tem os seguintes campos:
string name 64 not_null primary_key binary
int ret 1 not_null
string dl 128 not_null
string type 9 not_null enum
```

### Notas

> **Nota**:
>
> Para compatibilidade com versões anteriores, o seguinte
> apelido descontinuado pode ser usado:
> **mysql\_fieldtype()**

### Veja também

- [mysql\_field\_name()](function.mysql-field-name.md) - Obtém o nome do campo especificado em um resultado
- [mysql\_field\_len()](function.mysql-field-len.md) - Retorna o tamanho do campo especificado

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
