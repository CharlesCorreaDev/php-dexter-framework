# Obtém uma linha do resultado como um array associativo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mysql-fetch-assoc.php

---

# mysql\_fetch\_assoc

(PHP 4 >= 4.0.3, PHP 5)

mysql\_fetch\_assoc — Obtém uma linha do resultado como um array associativo

**Aviso**

Esta extensão foi descontinuada a partir do PHP 5.5.0 e foi removida no PHP 7.0.0.
Em vez disso, as extensões [MySQLi](book.mysqli.md) ou [PDO\_MySQL](ref.pdo-mysql.md) devem ser usadas.
Veja também o guia [MySQL: escolhendo uma API](mysqlinfo.api.choosing.md).
Alternativas a esta função incluem:

- [mysqli\_fetch\_assoc()](mysqli-result.fetch-assoc.md)
- [PDOStatement::fetch()](pdostatement.fetch.md)
  com `mode` como **`PDO::FETCH_ASSOC`**

### Descrição

function **mysql\_fetch\_assoc**([resource](language.types.resource.md) `$result`): [array](language.types.array.md)

Retorna um array associativo que corresponde a linha obtida
e move o ponteiro interno dos dados adiante.
**mysql\_fetch\_assoc()** é equivalente a utilizar
[mysql\_fetch\_array()](function.mysql-fetch-array.md) com MYSQL\_ASSOC para o
segunto parâmetro, que é opcional. Ela apenas retorna um array associativo.

### Parâmetros

`result`
:   O [resource](language.types.resource.md) do resultado que
    está sendo avaliado. Este resultado vem de uma chamada a
    [mysql\_query()](function.mysql-query.md).

### Valor Retornado

Retorna um array associativo de strings que corresponde à linha obtida, ou
**`false`** se não houver mais linhas.

Se duas ou mais colunas do resultado tiverem o mesmo nome de campo,
a ultima coluna terá precedencia. Para acessar as outras
colunas com o mesmo nome, é necessário acessar os
outros resultados usando índices numéricos com
[mysql\_fetch\_row()](function.mysql-fetch-row.md) ou adicionar apelidos.
Veja o exemplo em [mysql\_fetch\_array()](function.mysql-fetch-array.md)
para uma descrição sobre apelidos.

### Examples

**Exemplo #1 Um exemplo expandido de **mysql\_fetch\_assoc()****

```
<?php

$conn = mysql_connect("localhost", "mysql_user", "mysql_password");

if (!$conn) {
    echo "Não foi possível conectar ao DB: " . mysql_error();
    exit;
}

if (!mysql_select_db("mydbname")) {
    echo "Não foi possível selecionar mydbname: " . mysql_error();
    exit;
}

$sql = "SELECT id as userid, fullname, userstatus
        FROM   sometable
        WHERE  userstatus = 1";

$result = mysql_query($sql);

if (!$result) {
    echo "Não foi possível executar a consulta ($sql) no DB: " . mysql_error();
    exit;
}

if (mysql_num_rows($result) == 0) {
    echo "Nenhuma linha encontrada, nada para exibir, saindo...";
    exit;
}

// Enquanto uma linha de dados existir, coloque essa linha em $row como um array associativo
// Observação: Se for esperada apenas uma linha, não é necessário usar um loop
// Observação: Se for colocado extract($row); dentro do loop a seguir, serão
// criados $userid, $fullname e $userstatus
while ($row = mysql_fetch_assoc($result)) {
    echo $row["userid"];
    echo $row["fullname"];
    echo $row["userstatus"];
}

mysql_free_result($result);

?>
```

### Notas

> **Nota**:
> **Performance**  
>
> Uma coisa importante para notar é que usar
> **mysql\_fetch\_assoc()** *não
> é significativamente* mais lento do que usar
> [mysql\_fetch\_row()](function.mysql-fetch-row.md), enquanto provê
> um valor agregado significante.

> **Nota**:
>
> Os nomes de campos retornados por esta função
> *diferenciam maiúsculas e minúsculas*.

> **Nota**:
>
> Esta função define campos NULL como o
> valor **`null`** do PHP.

### Veja também

- [mysql\_fetch\_row()](function.mysql-fetch-row.md) - Obtém uma linha como um array numérico
- [mysql\_fetch\_array()](function.mysql-fetch-array.md) - Obtém uma linha de resultado como um array associativo, numérico, ou ambos
- [mysql\_data\_seek()](function.mysql-data-seek.md) - Move o ponteiro interno do resultado
- [mysql\_query()](function.mysql-query.md) - Envia uma consulta MySQL
- [mysql\_error()](function.mysql-error.md) - Retorna o texto da mensagem de erro da operação MySQL anterior

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
