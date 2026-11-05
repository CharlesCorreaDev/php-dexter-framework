# Prepara uma instrução SQL para execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli.prepare.php

---

# mysqli::prepare

# mysqli\_prepare

(PHP 5, PHP 7, PHP 8)

mysqli::prepare -- mysqli\_prepare — Prepara uma instrução SQL para execução

### Descrição

Estilo orientado a objetos

public function **mysqli::prepare**([string](language.types.string.md) `$query`): [mysqli\_stmt](class.mysqli-stmt.md)|[false](language.types.singleton.md)

Estilo procedural

function **mysqli\_prepare**([mysqli](class.mysqli.md) `$mysql`, [string](language.types.string.md) `$query`): [mysqli\_stmt](class.mysqli-stmt.md)|[false](language.types.singleton.md)

Prepara a consulta SQL e retorna um identificador de instrução a ser usado para outras
operações na instrução. A consulta deve consistir em uma única instrução SQL.

O modelo de instrução pode conter zero ou mais marcadores de parâmetro de ponto de interrogação
(`?`) também chamados de espaços reservados.
Os marcadores de parâmetro devem ser vinculados às variáveis do aplicativo usando
[mysqli\_stmt\_bind\_param()](mysqli-stmt.bind-param.md) antes de executar a instrução.

### Parâmetros

`mysql`
:   Somente no estilo procedural: Um objeto [mysqli](class.mysqli.md)
    retornado por [mysqli\_connect()](function.mysqli-connect.md) ou [mysqli\_init()](mysqli.init.md)

`query`
:   A consulta, como uma string. Deve consistir em uma única instrução SQL.

    A instrução SQL pode conter zero ou mais marcadores de
    parâmetro representados por caracteres de ponto de interrogação (`?`)
    nas posições apropriadas.

    > **Nota**:
    >
    > Os marcadores são válidos apenas em determinados locais nas instruções SQL.
    > Por exemplo, eles são permitidos na lista `VALUES()`
    > de uma instrução `INSERT` (para especificar valores de
    > coluna para uma linha) ou em uma comparação com uma coluna em uma cláusula
    > `WHERE` para especificar um valor de comparação.
    > No entanto, eles não são permitidos para identificadores (como nomes de tabelas ou
    > colunas).

### Valor Retornado

**mysqli\_prepare()** retorna um objeto de instrução ou **`false`** se ocorreu um erro.

### Erros/Exceções

Se o relatório de erros da extensão mysqli estiver habilitado (**`MYSQLI_REPORT_ERROR`**) e a operação solicitada falhar,
um aviso será gerado. Se, além disso, o modo for definido como **`MYSQLI_REPORT_STRICT`**,
uma exceção [mysqli\_sql\_exception](class.mysqli-sql-exception.md) será lançada em vez do aviso.

### Examples

**Exemplo #1 Exemplo de **mysqli::prepare()****

Estilo orientado a objetos

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "my_user", "my_password", "world");

$city = "Amersfoort";

/* criar uma declaração preparada */
$stmt = $mysqli->prepare("SELECT District FROM City WHERE Name=?");

/* parâmetros de ligação para marcadores */
$stmt->bind_param("s", $city);

/* executar consulta */
$stmt->execute();

/* vincular variáveis de resultado */
$stmt->bind_result($district);

/* buscar valor */
$stmt->fetch();

printf("%s está no distrito %s\n", $city, $district);
```

Estilo procedural

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$link = mysqli_connect("localhost", "my_user", "my_password", "world");

$city = "Amersfoort";

/* criar uma declaração preparada */
$stmt = mysqli_prepare($link, "SELECT District FROM City WHERE Name=?");

/* parâmetros de ligação para marcadores */
mysqli_stmt_bind_param($stmt, "s", $city);

/* executar consulta */
mysqli_stmt_execute($stmt);

/* vincular variáveis de resultado */
mysqli_stmt_bind_result($stmt, $district);

/* buscar valor */
mysqli_stmt_fetch($stmt);

printf("%s está no distrito %s\n", $city, $district);
```

Os exemplos acima produzirão:

```
Amersfoort está no distrito de Utrecht
```

### Veja também

- [mysqli\_stmt\_execute()](mysqli-stmt.execute.md) - Executa uma instrução preparada
- [mysqli\_stmt\_fetch()](mysqli-stmt.fetch.md) - Recebe resultados de uma instrução preparada nas variáveis vinculadas
- [mysqli\_stmt\_bind\_param()](mysqli-stmt.bind-param.md) - Liga variáveis a uma declaração preparada como parâmetros
- [mysqli\_stmt\_bind\_result()](mysqli-stmt.bind-result.md) - Liga variáveis a uma declaração preparada para armazenamento de resultado
- [mysqli\_stmt\_get\_result()](mysqli-stmt.get-result.md) - Obtém um resultado de uma instrução preparada como um objeto mysqli\_result
- [mysqli\_stmt\_close()](mysqli-stmt.close.md) - Fecha uma instrução preparada

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
