# Recebe metadados para um único campo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli-result.fetch-field-direct.php

---

# mysqli\_result::fetch\_field\_direct

# mysqli\_fetch\_field\_direct

(PHP 5, PHP 7, PHP 8)

mysqli\_result::fetch\_field\_direct -- mysqli\_fetch\_field\_direct — Recebe metadados para um único campo

### Descrição

Estilo orientado a objetos

public function **mysqli\_result::fetch\_field\_direct**([int](language.types.integer.md) `$index`): [object](language.types.object.md)|[false](language.types.singleton.md)

Estilo procedural

function **mysqli\_fetch\_field\_direct**([mysqli\_result](class.mysqli-result.md) `$result`, [int](language.types.integer.md) `$index`): [object](language.types.object.md)|[false](language.types.singleton.md)

Retorna um objeto que contém informação de definição de campo a partir
do conjunto de resultados especificado.

### Parâmetros

`result`
:   Somente no estilo procedural: Um objeto [mysqli\_result](class.mysqli-result.md)
    retornado por [mysqli\_query()](mysqli.query.md), [mysqli\_store\_result()](mysqli.store-result.md),
    [mysqli\_use\_result()](mysqli.use-result.md) ou [mysqli\_stmt\_get\_result()](mysqli-stmt.get-result.md).

`index`
:   O número do campo. Este valor deve estar na faixa de
    `0` a `número de campos - 1`.

### Valor Retornado

Retorna um objeto que contém informação de definição de campo ou **`false`**
se nenhuma informação de campo para o valor especificado em `index` estiver
disponível.

**Propriedades dos objetos**

| Propriedade | Descrição |
| --- | --- |
| name | O nome da coluna |
| orgname | O nome original da coluna se foi especificado um apelido |
| table | O nome da tabela à qual o campo pertence (se não calculado) |
| orgtable | Nome da tabela original se foi especificado um apelido |
| def | Não utilizado. Sempre uma string vazia |
| db | O nome do banco de dados |
| catalog | Não utilizado. Sempre `"def"` |
| max\_length | A largura máxima do campo para o conjunto de resultados. A partir do PHP 8.1, este valor é sempre `0`. |
| length | O comprimento do campo em bytes. Para colunas de strings, o valor do comprimento depende do conjunto de caracteres. Por exemplo, se o conjunto de caracteres for `latin1`, um conjunto de um byte, o valor de comprimento para uma consulta `SELECT 'abc'` será 3. Se o conjunto for `utf8mb4`, um conjunto multi-bytes onde os caracteres podem ter até 4 bytes, o valor de comprimento será 12. |
| charsetnr | O número do conjunto de caracteres do campo. |
| flags | Um inteiro representando bits de opções para o campo. |
| type | O tipo de dados usado para este campo |
| decimals | O número de decimais para campos numéricos, e a precisão em segundos fracionários para campos temporais. |

### Examples

**Exemplo #1 Estilo orientado a objetos**

```
<?php
$mysqli = new mysqli("localhost", "my_user", "my_password", "world");

/* verifica a conexão */
if (mysqli_connect_errno()) {
    printf("Conexão falhou: %s\n", mysqli_connect_error());
    exit();
}

$query = "SELECT Name, SurfaceArea from Country ORDER BY Name LIMIT 5";

if ($result = $mysqli->query($query)) {

    /* Obtém informação de campo para a coluna 'SurfaceArea' */
    $finfo = $result->fetch_field_direct(1);

    printf("Name:     %s\n", $finfo->name);
    printf("Table:    %s\n", $finfo->table);
    printf("max. Len: %d\n", $finfo->max_length);
    printf("Flags:    %d\n", $finfo->flags);
    printf("Type:     %d\n", $finfo->type);

    $result->close();
}

/* fecha a conexão */
$mysqli->close();
?>
```

**Exemplo #2 Estilo procedural**

```
<?php
$link = mysqli_connect("localhost", "my_user", "my_password", "world");

/* verifica a conexão */
if (mysqli_connect_errno()) {
    printf("Conexão falhou: %s\n", mysqli_connect_error());
    exit();
}

$query = "SELECT Name, SurfaceArea from Country ORDER BY Name LIMIT 5";

if ($result = mysqli_query($link, $query)) {

    /* Obtém informação de campo para a coluna 'SurfaceArea' */
    $finfo = mysqli_fetch_field_direct($result, 1);

    printf("Name:     %s\n", $finfo->name);
    printf("Table:    %s\n", $finfo->table);
    printf("max. Len: %d\n", $finfo->max_length);
    printf("Flags:    %d\n", $finfo->flags);
    printf("Type:     %d\n", $finfo->type);

    mysqli_free_result($result);
}

/* fecha a conexão */
mysqli_close($link);
?>
```

Os exemplos acima produzirão:

```
Name:     SurfaceArea
Table:    Country
max. Len: 10
Flags:    32769
Type:     4
```

### Veja também

- [mysqli\_num\_fields()](mysqli-result.field-count.md) - Obtém o número de campos no conjunto de resultados
- [mysqli\_fetch\_field()](mysqli-result.fetch-field.md) - Retorna o próximo campo no conjunto de resultados
- [mysqli\_fetch\_fields()](mysqli-result.fetch-fields.md) - Retorna um array de objetos representando os campos em um conjunto de resultados

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
