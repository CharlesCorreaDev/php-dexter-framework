# Retorna os metadados de resultado de uma instrução preparada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli-stmt.result-metadata.php

---

# mysqli\_stmt::result\_metadata

# mysqli\_stmt\_result\_metadata

(PHP 5, PHP 7, PHP 8)

mysqli\_stmt::result\_metadata -- mysqli\_stmt\_result\_metadata — Retorna os metadados de resultado de uma instrução preparada

### Descrição

Estilo orientado a objetos

public function **mysqli\_stmt::result\_metadata**(): [mysqli\_result](class.mysqli-result.md)|[false](language.types.singleton.md)

Estilo procedural

function **mysqli\_stmt\_result\_metadata**([mysqli\_stmt](class.mysqli-stmt.md) `$statement`): [mysqli\_result](class.mysqli-result.md)|[false](language.types.singleton.md)

Se uma instrução passada a [mysqli\_prepare()](mysqli.prepare.md) for do tipo que produz
um conjunto de resultados, **mysqli\_stmt\_result\_metadata()** retornará o objeto de resultado
que pode ser usado para processar a meta informação como o número total de campos
e informações individual dos campos.

Esta função retorna um objeto vazio [mysqli\_result](class.mysqli-result.md)
que pode ser usado para acessar informações de metadados da instrução preparada
sem precisar buscar as linhas de dados reais. Não é necessário usar
esta função ao usar [mysqli\_stmt\_get\_result()](mysqli-stmt.get-result.md) para
recuperar todo o conjunto de resultados de uma instrução preparada como um objeto de resultado.

> **Nota**:
>
> Este objeto de conjunto de resultados pode ser passado como argumento apenas para as
> funções baseadas em campo que processam metadados de resultados, como:
>
> - [mysqli\_num\_fields()](mysqli-result.field-count.md)
> - [mysqli\_fetch\_field()](mysqli-result.fetch-field.md)
> - [mysqli\_fetch\_field\_direct()](mysqli-result.fetch-field-direct.md)
> - [mysqli\_fetch\_fields()](mysqli-result.fetch-fields.md)
> - [mysqli\_field\_count()](mysqli.field-count.md)
> - [mysqli\_field\_seek()](mysqli-result.field-seek.md)
> - [mysqli\_field\_tell()](mysqli-result.current-field.md)
> - [mysqli\_free\_result()](mysqli-result.free.md)

> **Nota**:
>
> O conjunto de resultados retornado por **mysqli\_stmt\_result\_metadata()**
> contém apenas metadados. Não contém nenhum resultado de linha.
> As linhas são obtidas chamando [mysqli\_stmt\_get\_result()](mysqli-stmt.get-result.md)
> no identificador da instrução ou com [mysqli\_stmt\_fetch()](mysqli-stmt.fetch.md).

### Parâmetros

`statement`
:   Somente no estilo procedural: Um objeto [mysqli\_stmt](class.mysqli-stmt.md)
    retornado por [mysqli\_stmt\_init()](mysqli.stmt-init.md).

### Valor Retornado

Retorna um objeto de resultado ou **`false`** se um erro ocorrer.
Se a instrução não produzir um conjunto de resultados, **`false`** também será retornado.

### Erros/Exceções

Se o relatório de erros da extensão mysqli estiver habilitado (**`MYSQLI_REPORT_ERROR`**) e a operação solicitada falhar,
um aviso será gerado. Se, além disso, o modo for definido como **`MYSQLI_REPORT_STRICT`**,
uma exceção [mysqli\_sql\_exception](class.mysqli-sql-exception.md) será lançada em vez do aviso.

### Examples

**Exemplo #1 Estilo orientado a objetos**

```
<?php
$mysqli = new mysqli("localhost", "my_user", "my_password", "test");

$mysqli->query("DROP TABLE IF EXISTS friends");
$mysqli->query("CREATE TABLE friends (id int, name varchar(20))");

$mysqli->query("INSERT INTO friends VALUES (1,'Hartmut'), (2, 'Ulf')");

$stmt = $mysqli->prepare("SELECT id, name FROM friends");
$stmt->execute();

/* obtém o resultado de metadados */
$result = $stmt->result_metadata();

/* obtém informação do campo a partir do resultado de metadados */
$field = $result->fetch_field();

printf("Nome do campo: %s\n", $field->name);
?>
```

**Exemplo #2 Estilo procedural**

```
<?php
$link = mysqli_connect("localhost", "my_user", "my_password", "test");

mysqli_query($link, "DROP TABLE IF EXISTS friends");
mysqli_query($link, "CREATE TABLE friends (id int, name varchar(20))");

mysqli_query($link, "INSERT INTO friends VALUES (1,'Hartmut'), (2, 'Ulf')");

$stmt = mysqli_prepare($link, "SELECT id, name FROM friends");
mysqli_stmt_execute($stmt);

/* obtém o resultado de metadados */
$result = mysqli_stmt_result_metadata($stmt);

/* obtém informação do campo a partir do resultado de metadados */
$field = mysqli_fetch_field($result);

printf("Nome do campo: %s\n", $field->name);
?>
```

### Veja também

- [mysqli\_prepare()](mysqli.prepare.md) - Prepara uma instrução SQL para execução
- [mysqli\_free\_result()](mysqli-result.free.md) - Libera memória associada a um resultado
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
