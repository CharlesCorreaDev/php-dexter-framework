# Obtém o número de linhas no resultado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli-result.num-rows.php

---

# mysqli\_result::$num\_rows

# mysqli\_num\_rows

(PHP 5, PHP 7, PHP 8)

mysqli\_result::$num\_rows -- mysqli\_num\_rows — Obtém o número de linhas no resultado

### Descrição

Estilo orientado a objetos

[int](language.types.integer.md)|[string](language.types.string.md) [$mysqli\_result->num\_rows](mysqli-result.num-rows.md);

Estilo procedural

function **mysqli\_num\_rows**([mysqli\_result](class.mysqli-result.md) `$result`): [int](language.types.integer.md)|[string](language.types.string.md)

Retorna o número de linhas no resultado.

O comportamento de **mysqli\_num\_rows()** depende se
estão sendo usados resultados com buffer ou sem buffer.
A função retorna `0` para resultado sem buffer a menos que
todas as linhas já tiverem sido recebidas do servidor.

### Parâmetros

`result`
:   Somente no estilo procedural: Um objeto [mysqli\_result](class.mysqli-result.md)
    retornado por [mysqli\_query()](mysqli.query.md), [mysqli\_store\_result()](mysqli.store-result.md),
    [mysqli\_use\_result()](mysqli.use-result.md) ou [mysqli\_stmt\_get\_result()](mysqli-stmt.get-result.md).

### Valor Retornado

Um [int](language.types.integer.md) que representa o número de linhas recebidas.
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

$result = $mysqli->query("SELECT Code, Name FROM Country ORDER BY Name");

/* Obtém o número de linhas no resultado */
$row_cnt = $result->num_rows;

printf("Resultado contém %d linhas.\n", $row_cnt);
```

**Exemplo #2 Estilo procedural**

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$link = mysqli_connect("localhost", "my_user", "my_password", "world");

$result = mysqli_query($link, "SELECT Code, Name FROM Country ORDER BY Name");

/* Obtém o número de linhas no resultado */
$row_cnt = mysqli_num_rows($result);

printf("Resultado contém %d linhas.\n", $row_cnt);
```

Os exemplos acima produzirão:

```
Resultado contém 239 linhas.
```

### Notas

> **Nota**:
>
> Em contraste à função [mysqli\_stmt\_num\_rows()](mysqli-stmt.num-rows.md),
> esta função não tem uma variante de método orientado a objetos.
> No estilo de linguagem orientada a objetos, use \_\_get().

### Veja também

- [mysqli\_affected\_rows()](mysqli.affected-rows.md) - Retorna o número de linhas afetadas pela operação MySQL anterior
- [mysqli\_store\_result()](mysqli.store-result.md) - Transfere um conjunto de resultados da última consulta
- [mysqli\_use\_result()](mysqli.use-result.md) - Inicia uma recuperação de conjunto de resultados
- [mysqli\_query()](mysqli.query.md) - Executa uma consulta no banco de dados
- [mysqli\_stmt\_num\_rows()](mysqli-stmt.num-rows.md) - Retorna o número de linhas recebidas pelo servidor

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
