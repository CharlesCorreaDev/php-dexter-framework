# Recupera informação sobre a recente consulta executada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli.info.php

---

# mysqli::$info

# mysqli\_info

(PHP 5, PHP 7, PHP 8)

mysqli::$info -- mysqli\_info — Recupera informação sobre a recente consulta executada

### Descrição

Estilo orientado a objetos

?[string](language.types.string.md) [$mysqli->info](mysqli.info.md);

Estilo procedural

function **mysqli\_info**([mysqli](class.mysqli.md) `$mysql`): [?](language.types.null.md)[string](language.types.string.md)

A função **mysqli\_info()** retorna uma string contendo
informação sobre a última consulta executada. A natureza desta string é
fornecida abaixo:

**Possíveis valores de retorno de mysqli\_info**

| Tipo de consulta | Exemplo da string de resultado |
| --- | --- |
| INSERT INTO...SELECT... | Records: 100 Duplicates: 0 Warnings: 0 |
| INSERT INTO...VALUES (...),(...),(...) | Records: 3 Duplicates: 0 Warnings: 0 |
| LOAD DATA INFILE ... | Records: 1 Deleted: 0 Skipped: 0 Warnings: 0 |
| ALTER TABLE ... | Records: 3 Duplicates: 0 Warnings: 0 |
| UPDATE ... | Rows matched: 40 Changed: 40 Warnings: 0 |

> **Nota**:
>
> Consultas que não se encaixam em um dos formatos acima não são suportadas.
> Nesta situação, **mysqli\_info()** irá retornar uma string vazia.

### Parâmetros

`mysql`
:   Somente no estilo procedural: Um objeto [mysqli](class.mysqli.md)
    retornado por [mysqli\_connect()](function.mysqli-connect.md) ou [mysqli\_init()](mysqli.init.md)

### Valor Retornado

Uma string de caracteres representando informação adicional sobre a mais recente consulta executada.

### Examples

**Exemplo #1 Exemplo de $mysqli->info**

Estilo orientado a objetos

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "my_user", "my_password", "world");

$mysqli->query("CREATE TEMPORARY TABLE t1 LIKE City");

/* INSERT INTO ... SELECT */
$mysqli->query("INSERT INTO t1 SELECT * FROM City ORDER BY ID LIMIT 150");
printf("%s\n", $mysqli->info);
```

Estilo procedural

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$link = mysqli_connect("localhost", "my_user", "my_password", "world");

mysqli_query($link, "CREATE TEMPORARY TABLE t1 LIKE City");

/* INSERT INTO ... SELECT */
mysqli_query($link, "INSERT INTO t1 SELECT * FROM City ORDER BY ID LIMIT 150");
printf("%s\n", mysqli_info($link));
```

Os exemplos acima produzirão:

```
Records: 150  Duplicates: 0  Warnings: 0
```

### Veja também

- [mysqli\_affected\_rows()](mysqli.affected-rows.md) - Retorna o número de linhas afetadas pela operação MySQL anterior
- [mysqli\_warning\_count()](mysqli.warning-count.md) - Retorna o número de alertas gerados pela consulta mais recente
- [mysqli\_num\_rows()](mysqli-result.num-rows.md) - Obtém o número de linhas no resultado

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
