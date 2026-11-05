# Prepara, vincula parâmetros e executa a instrução SQL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli.execute-query.php

---

# mysqli::execute\_query

# mysqli\_execute\_query

(PHP 8 >= 8.2.0)

mysqli::execute\_query -- mysqli\_execute\_query — Prepara, vincula parâmetros e executa a instrução SQL

### Descrição

Estilo orientado a objetos

public function **mysqli::execute\_query**([string](language.types.string.md) `$query`, [?](language.types.null.md)[array](language.types.array.md) `$params` = **`null`**): [mysqli\_result](class.mysqli-result.md)|[bool](language.types.boolean.md)

Estilo procedural

function **mysqli\_execute\_query**([mysqli](class.mysqli.md) `$mysql`, [string](language.types.string.md) `$query`, [?](language.types.null.md)[array](language.types.array.md) `$params` = **`null`**): [mysqli\_result](class.mysqli-result.md)|[bool](language.types.boolean.md)

Prepara a consulta SQL, associa parâmetros e a executa.
O método **mysqli::execute\_query()** é um atalho para
[mysqli::prepare()](mysqli.prepare.md),
[mysqli\_stmt::bind\_param()](mysqli-stmt.bind-param.md),
[mysqli\_stmt::execute()](mysqli-stmt.execute.md)
e [mysqli\_stmt::get\_result()](mysqli-stmt.get-result.md).

O modelo de instrução pode conter zero ou mais marcadores de parâmetro de
ponto de interrogação (`?`) também chamados de espaços reservados.
Os valores dos parâmetros devem ser fornecidos como um [array](language.types.array.md) usando o
parâmetro `params`.

Uma instrução preparada é criada, mas nunca é exposta fora
da função. É impossível acessar as propriedades da instrução como
faria com o objeto [mysqli\_stmt](class.mysqli-stmt.md).
Devido a essa limitação, as informações de status são copiadas para o objeto
[mysqli](class.mysqli.md) e estão disponíveis usando seus métodos, por exemplo
[mysqli\_affected\_rows()](mysqli.affected-rows.md) ou [mysqli\_error()](mysqli.error.md).

> **Nota**:
>
> No caso em que uma instrução é passada para
> **mysqli\_execute\_query()** que é maior que
> `max_allowed_packet` do servidor, os códigos
> de erro retornados são diferentes dependendo do sistema operacional.
> O comportamento é o seguinte:
>
> - No Linux retorna um código de erro de 1153.
>   A mensagem de erro significa "que o pacote é maior que
>   `max_allowed_packet` bytes."
> - No Windows retorna um código de erro 2006.
>   Essa mensagem de erro significa "que o servidor foi desativado".

### Parâmetros

`mysql`
:   Somente no estilo procedural: Um objeto [mysqli](class.mysqli.md)
    retornado por [mysqli\_connect()](function.mysqli-connect.md) ou [mysqli\_init()](mysqli.init.md)

`query`
:   A consulta, como uma string. Deve consistir em uma única instrução SQL.

    A instrução SQL pode conter zero ou mais marcadores de parâmetro
    representados por caracteres de ponto de interrogação (`?`)
    nas posições apropriadas.

    > **Nota**:
    >
    > Os marcadores são válidos apenas em determinados locais nas instruções SQL.
    > Por exemplo, eles são permitidos na lista `VALUES()`
    > de uma instrução `INSERT` (para especificar valores
    > de coluna para uma linha) ou em uma comparação com uma coluna em uma
    > cláusula `WHERE` para especificar um valor de comparação.
    > No entanto, eles não são permitidos para identificadores (como nomes de tabelas
    > ou colunas).

`params`
:   Um [array](language.types.array.md) opcional com tantos elementos quantos forem os parâmetros vinculados na instrução SQL que está sendo executada. Cada valor é tratado como uma [string](language.types.string.md).

### Valor Retornado

Retorna **`false`** em caso de falha. Para consultas bem-sucedidas que produzem
um conjunto de resultados, como `SELECT, SHOW, DESCRIBE` ou
`EXPLAIN`, retorna um objeto
[mysqli\_result](class.mysqli-result.md). Para outras consultas bem-sucedidas,
retorna **`true`**.

### Examples

**Exemplo #1 Exemplo de **mysqli::execute\_query()****

Estilo orientado a objetos

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli('localhost', 'my_user', 'my_password', 'world');

$query = 'SELECT Name, District FROM City WHERE CountryCode=? ORDER BY Name LIMIT 5';
$result = $mysqli->execute_query($query, ['DEU']);
foreach ($result as $row) {
    printf("%s (%s)\n", $row["Name"], $row["District"]);
}
```

Estilo procedural

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$link = mysqli_connect("localhost", "my_user", "my_password", "world");

$query = 'SELECT Name, District FROM City WHERE CountryCode=? ORDER BY Name LIMIT 5';
$result = mysqli_execute_query($link, $query, ['DEU']);
foreach ($result as $row) {
    printf("%s (%s)\n", $row["Name"], $row["District"]);
}
```

Os exemplos acima produzirão
algo semelhante a:

```
Aachen (Nordrhein-Westfalen)
Augsburg (Baijeri)
Bergisch Gladbach (Nordrhein-Westfalen)
Berlin (Berliini)
Bielefeld (Nordrhein-Westfalen)
```

### Veja também

- [mysqli\_prepare()](mysqli.prepare.md) - Prepara uma instrução SQL para execução
- [mysqli\_stmt\_execute()](mysqli-stmt.execute.md) - Executa uma instrução preparada
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
