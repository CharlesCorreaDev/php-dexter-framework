# Retorna o valor gerado para uma coluna AUTO_INCREMENT pela última consulta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli.insert-id.php

---

# mysqli::$insert\_id

# mysqli\_insert\_id

(PHP 5, PHP 7, PHP 8)

mysqli::$insert\_id -- mysqli\_insert\_id — Retorna o valor gerado para uma coluna AUTO\_INCREMENT pela última consulta

### Descrição

Estilo orientado a objetos

[int](language.types.integer.md)|[string](language.types.string.md) [$mysqli->insert\_id](mysqli.insert-id.md);

Estilo procedural

function **mysqli\_insert\_id**([mysqli](class.mysqli.md) `$mysql`): [int](language.types.integer.md)|[string](language.types.string.md)

Retorna o ID gerado por uma consulta `INSERT` ou
`UPDATE` em uma tabela que tenha o
atributo `AUTO_INCREMENT`. No caso de uma declaração
`INSERT` de múltiplas linhas, ela retorna o primeiro valor
gerado automaticamente que foi inserido com sucesso.

Realizar uma declaração `INSERT` ou `UPDATE`
usando a função MYSQL `LAST_INSERT_ID()`
também irá modificar o valor retornado por **mysqli\_insert\_id()**.
Se `LAST_INSERT_ID(expr)` foi usado para gerar o valor de
`AUTO_INCREMENT`, ela retorna o valor da última `expr`
no lugar do valor `AUTO_INCREMENT` gerado.

Retorna `0` se a declaração anterior não modificou um
valor `AUTO_INCREMENT`. **mysqli\_insert\_id()** deve ser
chamada imediatamente após a declaração que gerou o valor.

### Parâmetros

`mysql`
:   Somente no estilo procedural: Um objeto [mysqli](class.mysqli.md)
    retornado por [mysqli\_connect()](function.mysqli-connect.md) ou [mysqli\_init()](mysqli.init.md)

### Valor Retornado

O valor do campo `AUTO_INCREMENT` que foi atualizado
pela consulta anterior. Retorna zero se não houve consulta anterior na
conexão ou se a consulta não atualizou um valor
`AUTO_INCREMENT`.

Apenas declarações emitidas com a conexão atual afetam o valor de retorno. O
valor não é afetado por declarações emitidas usando outras conexões ou clientes.

> **Nota**:
>
> Se o número é maior que o máximo valor de um inteiro, ele será retornado como
> uma string.

### Examples

**Exemplo #1 Exemplo de $mysqli->insert\_id**

Estilo orientado a objetos

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "my_user", "my_password", "world");

$mysqli->query("CREATE TABLE myCity LIKE City");

$query = "INSERT INTO myCity VALUES (NULL, 'Stuttgart', 'DEU', 'Stuttgart', 617000)";
$mysqli->query($query);

printf("Novo registro tem ID %d.\n", $mysqli->insert_id);

/* deleta a tabela */
$mysqli->query("DROP TABLE myCity");
```

Estilo procedural

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$link = mysqli_connect("localhost", "my_user", "my_password", "world");

mysqli_query($link, "CREATE TABLE myCity LIKE City");

$query = "INSERT INTO myCity VALUES (NULL, 'Stuttgart', 'DEU', 'Stuttgart', 617000)";
mysqli_query($link, $query);

printf("Novo registro tem ID %d.\n", mysqli_insert_id($link));

/* deleta a tabela */
mysqli_query($link, "DROP TABLE myCity");
```

Os exemplos acima produzirão:

```
Novo registro tem ID 1.
```

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
