# Retorna o próximo campo no conjunto de resultados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli-result.fetch-field.php

---

# mysqli\_result::fetch\_field

# mysqli\_fetch\_field

(PHP 5, PHP 7, PHP 8)

mysqli\_result::fetch\_field -- mysqli\_fetch\_field — Retorna o próximo campo no conjunto de resultados

### Descrição

Estilo orientado a objetos

public function **mysqli\_result::fetch\_field**(): [object](language.types.object.md)|[false](language.types.singleton.md)

Estilo procedural

function **mysqli\_fetch\_field**([mysqli\_result](class.mysqli-result.md) `$result`): [object](language.types.object.md)|[false](language.types.singleton.md)

Retorna a definição de uma coluna de um conjunto de resultados como um objeto. Utilize
esta função repetidamente para obter informação sobre todas as colunas no
conjunto de resultados.

### Parâmetros

`result`
:   Somente no estilo procedural: Um objeto [mysqli\_result](class.mysqli-result.md)
    retornado por [mysqli\_query()](mysqli.query.md), [mysqli\_store\_result()](mysqli.store-result.md),
    [mysqli\_use\_result()](mysqli.use-result.md) ou [mysqli\_stmt\_get\_result()](mysqli-stmt.get-result.md).

### Valor Retornado

Retorna um objeto que contém informações sobre a definição do campo ou **`false`**
se nenhuma informação de campos estiver disponível.

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

$query = "SELECT Name, SurfaceArea from Country ORDER BY Code LIMIT 5";

if ($result = $mysqli->query($query)) {

    /* Obtém informação do campo para todos os campos */
    while ($finfo = $result->fetch_field()) {

        printf("Name:     %s\n", $finfo->name);
        printf("Table:    %s\n", $finfo->table);
        printf("max. Len: %d\n", $finfo->max_length);
        printf("Flags:    %d\n", $finfo->flags);
        printf("Type:     %d\n\n", $finfo->type);
    }
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

$query = "SELECT Name, SurfaceArea from Country ORDER BY Code LIMIT 5";

if ($result = mysqli_query($link, $query)) {

    /* Obtém informação do campo para todos os campos */
    while ($finfo = mysqli_fetch_field($result)) {

        printf("Name:     %s\n", $finfo->name);
        printf("Table:    %s\n", $finfo->table);
        printf("max. Len: %d\n", $finfo->max_length);
        printf("Flags:    %d\n", $finfo->flags);
        printf("Type:     %d\n\n", $finfo->type);
    }
    mysqli_free_result($result);
}

/* fecha a conexão */
mysqli_close($link);
?>
```

Os exemplos acima produzirão:

```
Name:     Name
Table:    Country
max. Len: 11
Flags:    1
Type:     254

Name:     SurfaceArea
Table:    Country
max. Len: 10
Flags:    32769
Type:     4
```

### Veja também

- [mysqli\_num\_fields()](mysqli-result.field-count.md) - Obtém o número de campos no conjunto de resultados
- [mysqli\_fetch\_field\_direct()](mysqli-result.fetch-field-direct.md) - Recebe metadados para um único campo
- [mysqli\_fetch\_fields()](mysqli-result.fetch-fields.md) - Retorna um array de objetos representando os campos em um conjunto de resultados
- [mysqli\_field\_seek()](mysqli-result.field-seek.md) - Move o ponteiro do resultado para um campo especificado

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
