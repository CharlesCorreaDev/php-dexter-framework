# Retorna o número de linhas recebidas pelo servidor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli-stmt.num-rows.php

---

# mysqli\_stmt::$num\_rows

# mysqli\_stmt::num\_rows

# mysqli\_stmt\_num\_rows

(PHP 5, PHP 7, PHP 8)

mysqli\_stmt::$num\_rows -- mysqli\_stmt::num\_rows -- mysqli\_stmt\_num\_rows — Retorna o número de linhas recebidas pelo servidor

### Descrição

Estilo orientado a objetos

[int](language.types.integer.md)|[string](language.types.string.md) [$mysqli\_stmt->num\_rows](mysqli-stmt.num-rows.md);

public function **mysqli\_stmt::num\_rows**(): [int](language.types.integer.md)|[string](language.types.string.md)

Estilo procedural

function **mysqli\_stmt\_num\_rows**([mysqli\_stmt](class.mysqli-stmt.md) `$statement`): [int](language.types.integer.md)|[string](language.types.string.md)

Retorna o número de linhas em buffer na instrução. Esta função somente funcionará
depois que [mysqli\_stmt\_store\_result()](mysqli-stmt.store-result.md) for chamara para fazer buffer
do conjunto inteiro de resultados no manipulador da instrução.

Esta função retorna `0` a menos que todas as linhas tenham sido
recebidas do servidor.

### Parâmetros

`statement`
:   Somente no estilo procedural: Um objeto [mysqli\_stmt](class.mysqli-stmt.md)
    retornado por [mysqli\_stmt\_init()](mysqli.stmt-init.md).

### Valor Retornado

Um [int](language.types.integer.md) que representa o número de linhas em buffer.
Retorna `0` em modo sem buffer a menos que todas as linhas tenham sido
recebidas do servidor.

> **Nota**:
>
> Se o número de linhas for maior que **`PHP_INT_MAX`**,
> o número será retornado como uma [string](language.types.string.md).

### Examples

**Exemplo #1 Estilo orientado a objetos**

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "my_user", "my_password", "world");

$query = "SELECT Name, CountryCode FROM City ORDER BY Name LIMIT 20";
$stmt = $mysqli->prepare($query);
$stmt->execute();

/* armazena o resultado em um buffer interno */
$stmt->store_result();

printf("Número de linhas: %d.\n", $stmt->num_rows);
```

**Exemplo #2 Estilo procedural**

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$link = mysqli_connect("localhost", "my_user", "my_password", "world");

$query = "SELECT Name, CountryCode FROM City ORDER BY Name LIMIT 20";
$stmt = mysqli_prepare($link, $query);
mysqli_stmt_execute($stmt);

/* armazena o resultado em um buffer interno */
mysqli_stmt_store_result($stmt);

printf("Número de linhas: %d.\n", mysqli_stmt_num_rows($stmt));
```

Os exemplos acima produzirão:

```
Número de linhas: 20.
```

### Veja também

- [mysqli\_stmt\_store\_result()](mysqli-stmt.store-result.md) - Armazena um conjunto de resultados em um buffer interno
- [mysqli\_stmt\_affected\_rows()](mysqli-stmt.affected-rows.md) - Retorna o número total de linhas modificadas, apagadas, inseridas ou
  correspondidas pela última instrução executada
- [mysqli\_prepare()](mysqli.prepare.md) - Prepara uma instrução SQL para execução

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
