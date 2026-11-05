# Obtém o nome do campo especificado em um resultado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mysql-field-name.php

---

# mysql\_field\_name

(PHP 4, PHP 5)

mysql\_field\_name — Obtém o nome do campo especificado em um resultado

**Aviso**

Esta extensão foi descontinuada a partir do PHP 5.5.0 e foi removida no PHP 7.0.0.
Em vez disso, as extensões [MySQLi](book.mysqli.md) ou [PDO\_MySQL](ref.pdo-mysql.md) devem ser usadas.
Veja também o guia [MySQL: escolhendo uma API](mysqlinfo.api.choosing.md).
Alternativas a esta função incluem:

- [mysqli\_fetch\_field\_direct()](mysqli-result.fetch-field-direct.md) [name] ou [orgname]
- [PDOStatement::getColumnMeta()](pdostatement.getcolumnmeta.md) [name]

### Descrição

function **mysql\_field\_name**([resource](language.types.resource.md) `$result`, [int](language.types.integer.md) `$field_offset`): [string](language.types.string.md)|[false](language.types.singleton.md)

**mysql\_field\_name()** retorna o nome do campo do
índice especificado.

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

O nome do campo do índice especificado emj caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo **mysql\_field\_name()****

```
<?php
/* A tabela users consiste em três campos:
 *   user_id
 *   username
 *   password.
 */
$link = mysql_connect('localhost', 'mysql_user', 'mysql_password');
if (!$link) {
    die('Não foi possível conectar ao servidor MySQL: ' . mysql_error());
}
$dbname = 'mydb';
$db_selected = mysql_select_db($dbname, $link);
if (!$db_selected) {
    die("Não foi possível selecionar $dbname: " . mysql_error());
}
$res = mysql_query('select * from users', $link);

echo mysql_field_name($res, 0) . "\n";
echo mysql_field_name($res, 2);
?>
```

O exemplo acima produzirá:

```
user_id
password
```

### Notas

> **Nota**:
>
> Os nomes de campos retornados por esta função
> *diferenciam maiúsculas e minúsculas*.

> **Nota**:
>
> Para compatibilidade com versões anteriores, o seguinte
> apelido descontinuado pode ser usado:
> **mysql\_fieldname()**

### Veja também

- [mysql\_field\_type()](function.mysql-field-type.md) - Obtém o tipo do campo especificado em um resultado
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
