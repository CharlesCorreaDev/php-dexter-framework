# Obtém o número de linhas em um resultado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mysql-num-rows.php

---

# mysql\_num\_rows

(PHP 4, PHP 5)

mysql\_num\_rows — Obtém o número de linhas em um resultado

**Aviso**

Esta extensão foi descontinuada a partir do PHP 5.5.0 e foi removida no PHP 7.0.0.
Em vez disso, as extensões [MySQLi](book.mysqli.md) ou [PDO\_MySQL](ref.pdo-mysql.md) devem ser usadas.
Veja também o guia [MySQL: escolhendo uma API](mysqlinfo.api.choosing.md).
Alternativas a esta função incluem:

- [mysqli\_num\_rows()](mysqli-result.num-rows.md)
- [mysqli\_stmt\_num\_rows()](mysqli-stmt.num-rows.md)
- [PDOStatement::rowCount()](pdostatement.rowcount.md)

### Descrição

function **mysql\_num\_rows**([resource](language.types.resource.md) `$result`): [int](language.types.integer.md)|[false](language.types.singleton.md)

Obtém o numero de linhas de um conjunto de resultados. Este comando é valido apenas
para comandos como SELECT ou SHOW que realmente retornam um conjunto de resultados.
Para obter o numero de linhas afetadas por uma consulta INSERT, UPDATE, REPLACE ou
DELETE, use [mysql\_affected\_rows()](function.mysql-affected-rows.md).

### Parâmetros

`result`
:   O [resource](language.types.resource.md) do resultado que
    está sendo avaliado. Este resultado vem de uma chamada a
    [mysql\_query()](function.mysql-query.md).

### Valor Retornado

O numero de linhas em um conjunto de resultados em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo **mysql\_num\_rows()****

```
<?php

$link = mysql_connect("localhost", "mysql_user", "mysql_password");
mysql_select_db("database", $link);

$result = mysql_query("SELECT * FROM table1", $link);
$num_rows = mysql_num_rows($result);

echo "$num_rows Rows\n";

?>
```

### Notas

> **Nota**:
>
> Se você usar [mysql\_unbuffered\_query()](function.mysql-unbuffered-query.md),
> **mysql\_num\_rows()** não irá retornar o valor
> correto até que todas as linhas no conjunto de resultado
> tenham sido obtidas.

> **Nota**:
>
> Para compatibilidade com versões anteriores, o seguinte
> apelido descontinuado pode ser usado:
> **mysql\_numrows()**

### Veja também

- [mysql\_affected\_rows()](function.mysql-affected-rows.md) - Obtém o número de linhas afetadas na operação anterior do MySQL
- [mysql\_connect()](function.mysql-connect.md) - Abre uma conexão a um servidor MySQL
- [mysql\_data\_seek()](function.mysql-data-seek.md) - Move o ponteiro interno do resultado
- [mysql\_select\_db()](function.mysql-select-db.md) - Seleciona um banco de dados MySQL
- [mysql\_query()](function.mysql-query.md) - Envia uma consulta MySQL

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
