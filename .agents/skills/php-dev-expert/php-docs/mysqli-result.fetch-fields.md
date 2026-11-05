# Retorna um array de objetos representando os campos em um conjunto de resultados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli-result.fetch-fields.php

---

# mysqli\_result::fetch\_fields

# mysqli\_fetch\_fields

(PHP 5, PHP 7, PHP 8)

mysqli\_result::fetch\_fields -- mysqli\_fetch\_fields — Retorna um array de objetos representando os campos em um conjunto de resultados

### Descrição

Estilo orientado a objetos

public function **mysqli\_result::fetch\_fields**(): [array](language.types.array.md)

Estilo procedural

function **mysqli\_fetch\_fields**([mysqli\_result](class.mysqli-result.md) `$result`): [array](language.types.array.md)

Esta função serve para o mesmo propósito que a
função [mysqli\_fetch\_field()](mysqli-result.fetch-field.md) com uma simples
diferença, ao invés de retornar um objeto de cada vez para cada campo,
as colunas são retornadas como um array de objetos.

### Parâmetros

`result`
:   Somente no estilo procedural: Um objeto [mysqli\_result](class.mysqli-result.md)
    retornado por [mysqli\_query()](mysqli.query.md), [mysqli\_store\_result()](mysqli.store-result.md),
    [mysqli\_use\_result()](mysqli.use-result.md) ou [mysqli\_stmt\_get\_result()](mysqli-stmt.get-result.md).

### Valor Retornado

Retorna um array de objetos contendo informações de definições de campo.

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
$mysqli = new mysqli("127.0.0.1", "root", "foofoo", "sakila");

/*verifica a conexão */
if ($mysqli->connect_errno) {
    printf("Conexão falhou: %s\n", $mysqli->connect_error);
    exit();
}

foreach (array('latin1', 'utf8') as $charset) {

    // Define o conjunto de caracteres, para mostrar seu impacto em alguns valores (ex.: comprimento em bytes)
    $mysqli->set_charset($charset);

    $query = "SELECT actor_id, last_name from actor ORDER BY actor_id";

    echo "======================\n";
    echo "Conjunto de Caracteres: $charset\n";
    echo "======================\n";

    if ($result = $mysqli->query($query)) {

        /* Obtém informação de campo para todas as colunas */
        $finfo = $result->fetch_fields();

        foreach ($finfo as $val) {
            printf("Nome:        %s\n",   $val->name);
            printf("Tabela:      %s\n",   $val->table);
            printf("Comp. máx:   %d\n",   $val->max_length);
            printf("Comprimento: %d\n",   $val->length);
            printf("Id conj. carac: %d\n",   $val->charsetnr);
            printf("Opções:      %d\n",   $val->flags);
            printf("Tipo:        %d\n\n", $val->type);
        }
        $result->free();
    }
}
$mysqli->close();
?>
```

**Exemplo #2 Estilo procedural**

```
<?php
$link = mysqli_connect("127.0.0.1", "my_user", "my_password", "sakila");

/*verifica a conexão */
if (mysqli_connect_errno()) {
    printf("Conexão falhou: %s\n", mysqli_connect_error());
    exit();
}

foreach (array('latin1', 'utf8') as $charset) {

    // Define o conjunto de caracteres, para mostrar seu impacto em alguns valores (ex.: comprimento em bytes)
    mysqli_set_charset($link, $charset);

    $query = "SELECT actor_id, last_name from actor ORDER BY actor_id";

    echo "======================\n";
    echo "Conjunto de Caracteres: $charset\n";
    echo "======================\n";

    if ($result = mysqli_query($link, $query)) {

        /* Obtém informação de campo para todas as colunas */
        $finfo = mysqli_fetch_fields($result);

        foreach ($finfo as $val) {
            printf("Nome:        %s\n",   $val->name);
            printf("Tabela:      %s\n",   $val->table);
            printf("Comp. máx:   %d\n",   $val->max_length);
            printf("Comprimento: %d\n",   $val->length);
            printf("Id conj. carac: %d\n",   $val->charsetnr);
            printf("Opções:      %d\n",   $val->flags);
            printf("Tipo:        %d\n\n", $val->type);
        }
        mysqli_free_result($result);
    }
}

mysqli_close($link);
?>
```

Os exemplos acima produzirão:

```
======================
Conjunto de Caracteres: latin1
======================
Nome:        actor_id
Tabela:      actor
Comp. máx:   3
Comprimento: 5
Id conj. carac: 63
Opções:      49699
Tipo:        2

Nome:        last_name
Tabela:      actor
Comp. máx:   12
Comprimento: 45
Id conj. carac: 8
Opções:      20489
Tipo:        253

======================
Conjunto de Caracteres: utf8
======================
Nome:        actor_id
Tabela:      actor
Comp. máx:   3
Comprimento: 5
Id conj. carac: 63
Opções:      49699
Tipo:        2

Nome:        last_name
Tabela:      actor
Comp. máx:   12
Comprimento: 135
Id conj. carac: 33
Opções:      20489
```

### Veja também

- [mysqli\_num\_fields()](mysqli-result.field-count.md) - Obtém o número de campos no conjunto de resultados
- [mysqli\_fetch\_field\_direct()](mysqli-result.fetch-field-direct.md) - Recebe metadados para um único campo
- [mysqli\_fetch\_field()](mysqli-result.fetch-field.md) - Retorna o próximo campo no conjunto de resultados

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
