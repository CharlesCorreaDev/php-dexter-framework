# Liga variáveis a uma declaração preparada para armazenamento de resultado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli-stmt.bind-result.php

---

# mysqli\_stmt::bind\_result

# mysqli\_stmt\_bind\_result

(PHP 5, PHP 7, PHP 8)

mysqli\_stmt::bind\_result -- mysqli\_stmt\_bind\_result — Liga variáveis a uma declaração preparada para armazenamento de resultado

### Descrição

Estilo orientado a objetos

public function **mysqli\_stmt::bind\_result**([mixed](language.types.mixed.md) `&$var`, [mixed](language.types.mixed.md) `&...$vars`): [bool](language.types.boolean.md)

Estilo procedural

function **mysqli\_stmt\_bind\_result**([mysqli\_stmt](class.mysqli-stmt.md) `$statement`, [mixed](language.types.mixed.md) `&$var`, [mixed](language.types.mixed.md) `&...$vars`): [bool](language.types.boolean.md)

Liga colunas no conjunto de resultados a variáveis.

Quando [mysqli\_stmt\_fetch()](mysqli-stmt.fetch.md) é chamada para obter dados, o
protocolo cliente/servidor MySQL coloca os dados das colunas ligadas nas
variáveis expecificadas `var`/`vars`.

Uma coluna pode ser ligada ou religada a qualquer tempo, mesmo depois que um conjunto
de resultados tenha sido parcialmente recebido. A nova ligação tem efeito na próxima vez que
[mysqli\_stmt\_fetch()](mysqli-stmt.fetch.md) for chamada.

> **Nota**:
>
> Todas as colunas precisam ser ligadas depois da chamada a
> [mysqli\_stmt\_execute()](mysqli-stmt.execute.md) e antes da chamada a
> [mysqli\_stmt\_fetch()](mysqli-stmt.fetch.md).

> **Nota**:
>
> Dependendo dos tipos das colunas, variáveis ligadas podem silenciosamente ser alteradas para O
> tipo PHP correspondente.

**Dica**

Esta função é útil para resultados simples. Para receber um conjunto de resultados
iterável ou obter cada linha como um array ou objeto,
use a função [mysqli\_stmt\_get\_result()](mysqli-stmt.get-result.md).

### Parâmetros

`statement`
:   Somente no estilo procedural: Um objeto [mysqli\_stmt](class.mysqli-stmt.md)
    retornado por [mysqli\_stmt\_init()](mysqli.stmt-init.md).

`var`
:   A primeira variável a ser ligada.

`vars`
:   Mais variáveis a serem ligadas.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Estilo orientado a objetos**

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "my_user", "my_password", "world");

/* prepara a declaração */
$stmt = $mysqli->prepare("SELECT Code, Name FROM Country ORDER BY Name LIMIT 5");
$stmt->execute();

/* liga as variáveis à declaração preparada */
$stmt->bind_result($col1, $col2);

/* obtém os valores */
while ($stmt->fetch()) {
    printf("%s %s\n", $col1, $col2);
}
```

**Exemplo #2 Estilo procedural**

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$link = mysqli_connect("localhost", "my_user", "my_password", "world");

/* prepara a declaração */
$stmt = mysqli_prepare($link, "SELECT Code, Name FROM Country ORDER BY Name LIMIT 5");
mysqli_stmt_execute($stmt);

/* liga as variáveis à declaração preparada */
mysqli_stmt_bind_result($stmt, $col1, $col2);

/* obtém os valores */
while (mysqli_stmt_fetch($stmt)) {
    printf("%s %s\n", $col1, $col2);
}
```

Os exemplos acima produzirão
algo semelhante a:

```
AFG Afghanistan
ALB Albania
DZA Algeria
ASM American Samoa
AND Andorra
```

### Veja também

- [mysqli\_stmt\_get\_result()](mysqli-stmt.get-result.md) - Obtém um resultado de uma instrução preparada como um objeto mysqli\_result
- [mysqli\_stmt\_bind\_param()](mysqli-stmt.bind-param.md) - Liga variáveis a uma declaração preparada como parâmetros
- [mysqli\_stmt\_execute()](mysqli-stmt.execute.md) - Executa uma instrução preparada
- [mysqli\_stmt\_fetch()](mysqli-stmt.fetch.md) - Recebe resultados de uma instrução preparada nas variáveis vinculadas
- [mysqli\_prepare()](mysqli.prepare.md) - Prepara uma instrução SQL para execução
- [mysqli\_stmt\_prepare()](mysqli-stmt.prepare.md) - Prepara uma declaração SQL para execução

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
