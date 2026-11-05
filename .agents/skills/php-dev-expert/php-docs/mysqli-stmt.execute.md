# Executa uma instrução preparada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli-stmt.execute.php

---

# mysqli\_stmt::execute

# mysqli\_stmt\_execute

(PHP 5, PHP 7, PHP 8)

mysqli\_stmt::execute -- mysqli\_stmt\_execute — Executa uma instrução preparada

### Descrição

Estilo orientado a objetos

public function **mysqli\_stmt::execute**([?](language.types.null.md)[array](language.types.array.md) `$params` = **`null`**): [bool](language.types.boolean.md)

Estilo procedural

function **mysqli\_stmt\_execute**([mysqli\_stmt](class.mysqli-stmt.md) `$statement`, [?](language.types.null.md)[array](language.types.array.md) `$params` = **`null`**): [bool](language.types.boolean.md)

Executa uma instrução previamente preparada. A instrução precisa ser preparada
com sucesso antes da execução, usando a função
[mysqli\_prepare()](mysqli.prepare.md) ou
a função [mysqli\_stmt\_prepare()](mysqli-stmt.prepare.md), ou ainda passando o segundo
argumento para o método [mysqli\_stmt::\_\_construct()](mysqli-stmt.construct.md).

Se a instrução for `UPDATE`, `DELETE`
ou `INSERT`, o número total de linhas afetadas pode ser
determinado usando-se a função [mysqli\_stmt\_affected\_rows()](mysqli-stmt.affected-rows.md).
Se a consulta retorna um resultado, ele pode ser recebido pela função
[mysqli\_stmt\_get\_result()](mysqli-stmt.get-result.md) ou linha por linha
diretamente da instrução usando a função
[mysqli\_stmt\_fetch()](mysqli-stmt.fetch.md).

### Parâmetros

`statement`
:   Somente no estilo procedural: Um objeto [mysqli\_stmt](class.mysqli-stmt.md)
    retornado por [mysqli\_stmt\_init()](mysqli.stmt-init.md).

`params`
:   Um [array](language.types.array.md) opcional listando tantos elementos quantos forem os parâmetros vinculados na instrução SQL sendo executada. Cada valor é tratado como uma [string](language.types.string.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

Se o relatório de erros da extensão mysqli estiver habilitado (**`MYSQLI_REPORT_ERROR`**) e a operação solicitada falhar,
um aviso será gerado. Se, além disso, o modo for definido como **`MYSQLI_REPORT_STRICT`**,
uma exceção [mysqli\_sql\_exception](class.mysqli-sql-exception.md) será lançada em vez do aviso.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro optional `params` foi adicionado. |

### Examples

**Exemplo #1 Executa a instrução preparada com variáveis vinculadas**

Estilo orientado a objetos

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "my_user", "my_password", "world");

$mysqli->query("CREATE TEMPORARY TABLE myCity LIKE City");

/* Prepara uma instrução de inserção */
$stmt = $mysqli->prepare("INSERT INTO myCity (Name, CountryCode, District) VALUES (?,?,?)");

/* Vincula variáveis aos parâmetros */
$stmt->bind_param("sss", $val1, $val2, $val3);

$val1 = 'Stuttgart';
$val2 = 'DEU';
$val3 = 'Baden-Wuerttemberg';

/* Executa a instrução */
$stmt->execute();

$val1 = 'Bordeaux';
$val2 = 'FRA';
$val3 = 'Aquitaine';

/* Executa a instrução */
$stmt->execute();

/* Recebe todas as linhas da tabela myCity */
$query = "SELECT Name, CountryCode, District FROM myCity";
$result = $mysqli->query($query);
while ($row = $result->fetch_row()) {
    printf("%s (%s,%s)\n", $row[0], $row[1], $row[2]);
}
```

Estilo procedural

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$link = mysqli_connect("localhost", "my_user", "my_password", "world");

mysqli_query($link, "CREATE TEMPORARY TABLE myCity LIKE City");

/* Prepara uma instrução de inserção */
$stmt = mysqli_prepare($link, "INSERT INTO myCity (Name, CountryCode, District) VALUES (?,?,?)");

/* Vincula variáveis aos parâmetros */
mysqli_stmt_bind_param($stmt, "sss", $val1, $val2, $val3);

$val1 = 'Stuttgart';
$val2 = 'DEU';
$val3 = 'Baden-Wuerttemberg';

/* Executa a instrução */
mysqli_stmt_execute($stmt);

$val1 = 'Bordeaux';
$val2 = 'FRA';
$val3 = 'Aquitaine';

/* Executa a instrução */
mysqli_stmt_execute($stmt);

/* Recebe todas as linhas da tabela myCity */
$query = "SELECT Name, CountryCode, District FROM myCity";
$result = mysqli_query($link, $query);
while ($row = mysqli_fetch_row($result)) {
    printf("%s (%s,%s)\n", $row[0], $row[1], $row[2]);
}
```

Os exemplos acima produzirão:

```
Stuttgart (DEU,Baden-Wuerttemberg)
Bordeaux (FRA,Aquitaine)
```

**Exemplo #2 Executa uma isntrução preparada com um array de valores**

Estilo orientado a objetos

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli('localhost', 'my_user', 'my_password', 'world');

$mysqli->query('CREATE TEMPORARY TABLE myCity LIKE City');

/* Prepara uma instrução de inserção */
$stmt = $mysqli->prepare('INSERT INTO myCity (Name, CountryCode, District) VALUES (?,?,?)');

/* Executa a instrução */
$stmt->execute(['Stuttgart', 'DEU', 'Baden-Wuerttemberg']);

/* Recebe todas as linhas da tabela myCity */
$query = 'SELECT Name, CountryCode, District FROM myCity';
$result = $mysqli->query($query);
while ($row = $result->fetch_row()) {
    printf("%s (%s,%s)\n", $row[0], $row[1], $row[2]);
}
```

Estilo procedural

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$link = mysqli_connect('localhost', 'my_user', 'my_password', 'world');

mysqli_query($link, 'CREATE TEMPORARY TABLE myCity LIKE City');

/* Prepara uma instrução de inserção */
$stmt = mysqli_prepare($link, 'INSERT INTO myCity (Name, CountryCode, District) VALUES (?,?,?)');

/* Executa a instrução */
mysqli_stmt_execute($stmt, ['Stuttgart', 'DEU', 'Baden-Wuerttemberg']);

/* Recebe todas as linhas da tabela myCity */
$query = 'SELECT Name, CountryCode, District FROM myCity';
$result = mysqli_query($link, $query);
while ($row = mysqli_fetch_row($result)) {
    printf("%s (%s,%s)\n", $row[0], $row[1], $row[2]);
}
```

Os exemplos acima produzirão:

```
Stuttgart (DEU,Baden-Wuerttemberg)
```

### Veja também

- [mysqli\_execute\_query()](mysqli.execute-query.md) - Prepara, vincula parâmetros e executa a instrução SQL
- [mysqli\_prepare()](mysqli.prepare.md) - Prepara uma instrução SQL para execução
- [mysqli\_stmt\_bind\_param()](mysqli-stmt.bind-param.md) - Liga variáveis a uma declaração preparada como parâmetros
- [mysqli\_stmt\_get\_result()](mysqli-stmt.get-result.md) - Obtém um resultado de uma instrução preparada como um objeto mysqli\_result

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
