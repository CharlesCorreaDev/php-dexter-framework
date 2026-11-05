# Move o ponteiro interno do resultado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mysql-data-seek.php

---

# mysql\_data\_seek

(PHP 4, PHP 5)

mysql\_data\_seek — Move o ponteiro interno do resultado

**Aviso**

Esta extensão foi descontinuada a partir do PHP 5.5.0 e foi removida no PHP 7.0.0.
Em vez disso, as extensões [MySQLi](book.mysqli.md) ou [PDO\_MySQL](ref.pdo-mysql.md) devem ser usadas.
Veja também o guia [MySQL: escolhendo uma API](mysqlinfo.api.choosing.md).
Alternativas a esta função incluem:

- [mysqli\_data\_seek()](mysqli-result.data-seek.md)
- **`PDO::FETCH_ORI_ABS`**

### Descrição

function **mysql\_data\_seek**([resource](language.types.resource.md) `$result`, [int](language.types.integer.md) `$row_number`): [bool](language.types.boolean.md)

**mysql\_data\_seek()** move o ponteiro interno
da linha de um resultado MySQL associado ao identificador de resultado informado
para o número da linha especificada. A próxima chamada
a uma função MySQL que retorna resultado, como [mysql\_fetch\_assoc()](function.mysql-fetch-assoc.md),
irá retornar esta linha.

`row_number` começa em 0. O
`row_number` deve ser um valor no intervalo de 0 a
[mysql\_num\_rows()](function.mysql-num-rows.md) - 1. Entretanto, se o conjunto de resultados
for vazio ([mysql\_num\_rows()](function.mysql-num-rows.md) == 0), uma busca para 0 irá
falhar com um **`E_WARNING`** e
**mysql\_data\_seek()** iá retornar **`false`**.

### Parâmetros

`result`
:   O [resource](language.types.resource.md) do resultado que
    está sendo avaliado. Este resultado vem de uma chamada a
    [mysql\_query()](function.mysql-query.md).

`row_number`
:   O número de linha desejado para o ponteiro de resultado.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo **mysql\_data\_seek()****

```
<?php
$link = mysql_connect('localhost', 'mysql_user', 'mysql_password');
if (!$link) {
    die('Não foi possível conectar: ' . mysql_error());
}
$db_selected = mysql_select_db('sample_db');
if (!$db_selected) {
    die('Não foi possível selecionar o banco de dados: ' . mysql_error());
}
$query = 'SELECT last_name, first_name FROM friends';
$result = mysql_query($query);
if (!$result) {
    die('A consulta falhou: ' . mysql_error());
}
/* Busca linhas na ordem inversa */
for ($i = mysql_num_rows($result) - 1; $i >= 0; $i--) {
    if (!mysql_data_seek($result, $i)) {
        echo "Não foi possível apontar para a linha $i: " . mysql_error() . "\n";
        continue;
    }

    if (!($row = mysql_fetch_assoc($result))) {
        continue;
    }

    echo $row['last_name'] . ' ' . $row['first_name'] . "<br />\n";
}

mysql_free_result($result);
?>
```

### Notas

> **Nota**:
>
> A função **mysql\_data\_seek()** pode ser usada apenas
> em conjunto com a função [mysql\_query()](function.mysql-query.md), não com
> [mysql\_unbuffered\_query()](function.mysql-unbuffered-query.md).

### Veja também

- [mysql\_query()](function.mysql-query.md) - Envia uma consulta MySQL
- [mysql\_num\_rows()](function.mysql-num-rows.md) - Obtém o número de linhas em um resultado
- [mysql\_fetch\_row()](function.mysql-fetch-row.md) - Obtém uma linha como um array numérico
- [mysql\_fetch\_assoc()](function.mysql-fetch-assoc.md) - Obtém uma linha do resultado como um array associativo
- [mysql\_fetch\_array()](function.mysql-fetch-array.md) - Obtém uma linha de resultado como um array associativo, numérico, ou ambos
- [mysql\_fetch\_object()](function.mysql-fetch-object.md) - Obtém o resultado de uma linha como um objeto

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
