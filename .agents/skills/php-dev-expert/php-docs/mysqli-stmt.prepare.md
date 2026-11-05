# Prepara uma declaração SQL para execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli-stmt.prepare.php

---

# mysqli\_stmt::prepare

# mysqli\_stmt\_prepare

(PHP 5, PHP 7, PHP 8)

mysqli\_stmt::prepare -- mysqli\_stmt\_prepare — Prepara uma declaração SQL para execução

### Descrição

Estilo orientado a objetos

public function **mysqli\_stmt::prepare**([string](language.types.string.md) `$query`): [bool](language.types.boolean.md)

Estilo procedural

function **mysqli\_stmt\_prepare**([mysqli\_stmt](class.mysqli-stmt.md) `$statement`, [string](language.types.string.md) `$query`): [bool](language.types.boolean.md)

Prepara uma declaração para execução.
A consulta deve consistir de uma única declaração SQL.

O modelo de declaração pode conter zero ou mais marcadores de parâmetro que são os
pontos de interrogação (`?`), também chamados de espaços reservados.
Os marcadores de parâmetros devem ser ligados às variáveis da aplicação usando
[mysqli\_stmt\_bind\_param()](mysqli-stmt.bind-param.md) antes da execução da declaração.

> **Nota**:
>
> No caso de uma declaração passada a
> **mysqli\_stmt\_prepare()** ser mais longa que o parâmetro
> `max_allowed_packet` do servidor, os códigos de erro
> retornados serão diferentes dependendo se está sendo utilizando o driver
> nativo MySQL (`mysqlnd`) ou a biblioteca cliente do
> MySQL (`libmysqlclient`). O comportamento é o seguinte:
>
> - `mysqlnd` no Linux retorna o código de erro 1153.
>   A mensagem de erro diz "got a packet bigger than (recebido pacote maior que)
>   `max_allowed_packet` bytes".
> - `mysqlnd` no Windos retorna o código de erro 2006.
>   Esta mensagem de erro diz "server has gone away" (servidor se foi).
> - `libmysqlclient` em todas as plataformas a retorna o código
>   de erro 2006. Esta mensagem de erro diz "server has gone
>   away" (servidor se foi).

### Parâmetros

`statement`
:   Somente no estilo procedural: Um objeto [mysqli\_stmt](class.mysqli-stmt.md)
    retornado por [mysqli\_stmt\_init()](mysqli.stmt-init.md).

`query`
:   A consulta, como uma string. Deve consistir de uma única declaração SQL.

    A declaração SQL pode conter zero ou mais marcadores de parâmetros
    representados por caracteres de ponto de interrogação (`?`)
    nas posições apropriadas.

    > **Nota**:
    >
    > Os marcadores são permitidos somente em alguns lugares das declarações SQL.
    > Por exemplo, eles são permitidos na lista `VALUES()` de Uma
    > declaração `INSERT` (para especificar valores de colunas
    > para uma linha), ou em uma comparação com uma coluna em uma cláusula
    > `WHERE` para especificar um valor de comparação.
    > Entretanto, não são permitidos para identificadores (como tabelas ou
    > nomes de colunas).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

Se o relatório de erros da extensão mysqli estiver habilitado (**`MYSQLI_REPORT_ERROR`**) e a operação solicitada falhar,
um aviso será gerado. Se, além disso, o modo for definido como **`MYSQLI_REPORT_STRICT`**,
uma exceção [mysqli\_sql\_exception](class.mysqli-sql-exception.md) será lançada em vez do aviso.

### Examples

**Exemplo #1 Exemplo de **mysqli\_stmt::prepare()****

Estilo orientado a objetos

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "my_user", "my_password", "world");

$city = "Amersfoort";

/* cria uma declaração preparada */
$stmt = $mysqli->stmt_init();
$stmt->prepare("SELECT District FROM City WHERE Name=?");

/* liga parâmetros para os marcadores */
$stmt->bind_param("s", $city);

/* executa a consulta */
$stmt->execute();

/* liga o resultado à variável */
$stmt->bind_result($district);

/* obtém o valor */
$stmt->fetch();

printf("%s está no distrito %s\n", $city, $district);
```

Estilo procedural

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$link = mysqli_connect("localhost", "my_user", "my_password", "world");

$city = "Amersfoort";

/* cria uma declaração preparada */
$stmt = mysqli_stmt_init($link);
mysqli_stmt_prepare($stmt, "SELECT District FROM City WHERE Name=?");

/* liga parâmetros para os marcadores */
mysqli_stmt_bind_param($stmt, "s", $city);

/* executa a consulta */
mysqli_stmt_execute($stmt);

/* liga o resultado à variável */
mysqli_stmt_bind_result($stmt, $district);

/* obtém o valor */
mysqli_stmt_fetch($stmt);

printf("%s está no distrito %s\n", $city, $district);
```

Os exemplos acima produzirão:

```
Amersfoort está no distrito Utrecht
```

### Veja também

- [mysqli\_stmt\_init()](mysqli.stmt-init.md) - Inicializa uma instrução e retorna um objeto para uso com mysqli\_stmt\_prepare
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
