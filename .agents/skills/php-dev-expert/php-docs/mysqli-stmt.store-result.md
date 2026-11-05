# Armazena um conjunto de resultados em um buffer interno

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli-stmt.store-result.php

---

# mysqli\_stmt::store\_result

# mysqli\_stmt\_store\_result

(PHP 5, PHP 7, PHP 8)

mysqli\_stmt::store\_result -- mysqli\_stmt\_store\_result — Armazena um conjunto de resultados em um buffer interno

### Descrição

Estilo orientado a objetos

public function **mysqli\_stmt::store\_result**(): [bool](language.types.boolean.md)

Estilo procedural

function **mysqli\_stmt\_store\_result**([mysqli\_stmt](class.mysqli-stmt.md) `$statement`): [bool](language.types.boolean.md)

Esta função deve ser chamada, para consultas que produzem com sucesso
um conjunto de resultados (ex.: `SELECT, SHOW, DESCRIBE, EXPLAIN`),
seomente se o resultado completo precisa ser mantido em buffer no PHP. Cada chamada subsequente a
[mysqli\_stmt\_fetch()](mysqli-stmt.fetch.md) retornará dados em buffer.

> **Nota**:
>
> É desnecessário chamar **mysqli\_stmt\_store\_result()** para outras conultas,
> mas se isto for feito, não irá causar dano ou qualquer perda notável de desempenho em qualquer caso.
> Pode-se detectar se a consulta produziu resultado verificando se
> a função [mysqli\_stmt\_result\_metadata()](mysqli-stmt.result-metadata.md) retorna **`false`**.

### Parâmetros

`statement`
:   Somente no estilo procedural: Um objeto [mysqli\_stmt](class.mysqli-stmt.md)
    retornado por [mysqli\_stmt\_init()](mysqli.stmt-init.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

Se o relatório de erros da extensão mysqli estiver habilitado (**`MYSQLI_REPORT_ERROR`**) e a operação solicitada falhar,
um aviso será gerado. Se, além disso, o modo for definido como **`MYSQLI_REPORT_STRICT`**,
uma exceção [mysqli\_sql\_exception](class.mysqli-sql-exception.md) será lançada em vez do aviso.

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

- [mysqli\_prepare()](mysqli.prepare.md) - Prepara uma instrução SQL para execução
- [mysqli\_stmt\_result\_metadata()](mysqli-stmt.result-metadata.md) - Retorna os metadados de resultado de uma instrução preparada
- [mysqli\_stmt\_fetch()](mysqli-stmt.fetch.md) - Recebe resultados de uma instrução preparada nas variáveis vinculadas

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
