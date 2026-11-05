# Retorna o número total de linhas modificadas, apagadas, inseridas ou
   correspondidas pela última instrução executada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli-stmt.affected-rows.php

---

# mysqli\_stmt::$affected\_rows

# mysqli\_stmt\_affected\_rows

(PHP 5, PHP 7, PHP 8)

mysqli\_stmt::$affected\_rows -- mysqli\_stmt\_affected\_rows — Retorna o número total de linhas modificadas, apagadas, inseridas ou
correspondidas pela última instrução executada

### Descrição

Estilo orientado a objetos

[int](language.types.integer.md)|[string](language.types.string.md) [$mysqli\_stmt->affected\_rows](mysqli-stmt.affected-rows.md);

Estilo procedural

function **mysqli\_stmt\_affected\_rows**([mysqli\_stmt](class.mysqli-stmt.md) `$statement`): [int](language.types.integer.md)|[string](language.types.string.md)

Retorna o número de linhas afetadas por consultas `INSERT`,
`UPDATE` ou `DELETE`.
Funciona como [mysqli\_stmt\_num\_rows()](mysqli-stmt.num-rows.md) para instruções
`SELECT`.

### Parâmetros

`statement`
:   Somente no estilo procedural: Um objeto [mysqli\_stmt](class.mysqli-stmt.md)
    retornado por [mysqli\_stmt\_init()](mysqli.stmt-init.md).

### Valor Retornado

Um inteiro maior que zero indica o número de linhas afetadas ou
recebidas. Zero indica que nenhum registro foi atualizado para uma instrução
`UPDATE`, nenhuma linha correspondeu à cláusula
`WHERE` na consulta ou que nenhuma consulta foi
executada. `-1` indica que a consulta retornou um erro ou
que, para uma consulta `SELECT`,
**mysqli\_stmt\_affected\_rows()** foi chamada antes de
[mysqli\_stmt\_store\_result()](mysqli-stmt.store-result.md).

> **Nota**:
>
> Se o número de linhas afetadas for maior que o máximo valor inteiro do PHP, o
> número de linhas afetadas será retornado como uma string.

### Examples

**Exemplo #1 Exemplo de **mysqli\_stmt\_affected\_rows()****

Estilo orientado a objetos

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "my_user", "my_password", "world");

/* cria tabela temporária */
$mysqli->query("CREATE TEMPORARY TABLE myCountry LIKE Country");

$query = "INSERT INTO myCountry SELECT * FROM Country WHERE Code LIKE ?";

/* prepara a instrução */
$stmt = $mysqli->prepare($query);

/* Vincula variável para o espaço reservado */
$code = 'A%';
$stmt->bind_param("s", $code);

/* executa a instrução */
$stmt->execute();

printf("Linhas inseridas: %d\n", $stmt->affected_rows);
```

Estilo procedural

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$link = mysqli_connect("localhost", "my_user", "my_password", "world");

/* cria tabela temporária */
mysqli_query($link, "CREATE TEMPORARY TABLE myCountry LIKE Country");

$query = "INSERT INTO myCountry SELECT * FROM Country WHERE Code LIKE ?";

/* prepara a instrução */
$stmt = mysqli_prepare($link, $query);

/* Vincula variável para o espaço reservado */
$code = 'A%';
mysqli_stmt_bind_param($stmt, "s", $code);

/* executa a instrução */
mysqli_stmt_execute($stmt);

printf("Linhas inseridas: %d\n", mysqli_stmt_affected_rows($stmt));
```

Os exemplos acima produzirão:

```
Linhas inseridas: 17
```

### Veja também

- [mysqli\_stmt\_num\_rows()](mysqli-stmt.num-rows.md) - Retorna o número de linhas recebidas pelo servidor
- [mysqli\_stmt\_store\_result()](mysqli-stmt.store-result.md) - Armazena um conjunto de resultados em um buffer interno

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
