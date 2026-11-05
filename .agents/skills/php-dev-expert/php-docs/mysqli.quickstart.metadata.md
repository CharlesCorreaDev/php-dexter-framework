# Metadados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli.quickstart.metadata.php

---

## Metadados

Um conjunto de resultados MySQL contém metadados. Os metadados descrevem as colunas
encontradas no resultado. Todos os metadados enviados pelo MySQL podem ser acessados
através da interface `mysqli`.
A extensão não altera, ou algumas vezes praticamente não altera, a
informação que recebe.
As diferenças entre as versões do servidor MySQL não estão alinhadas.

Metadados são acessados através da interface [mysqli\_result](class.mysqli-result.md).

**Exemplo #1 Acessando metadados do conjunto de resultados**

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("example.com", "user", "password", "database");

$result = $mysqli->query("SELECT 1 AS _one, 'Hello' AS _two FROM DUAL");
var_dump($result->fetch_fields());
```

O exemplo acima produzirá:

```
array(2) {
  [0]=>
  object(stdClass)#3 (13) {
    ["name"]=>
    string(4) "_one"
    ["orgname"]=>
    string(0) ""
    ["table"]=>
    string(0) ""
    ["orgtable"]=>
    string(0) ""
    ["def"]=>
    string(0) ""
    ["db"]=>
    string(0) ""
    ["catalog"]=>
    string(3) "def"
    ["max_length"]=>
    int(1)
    ["length"]=>
    int(1)
    ["charsetnr"]=>
    int(63)
    ["flags"]=>
    int(32897)
    ["type"]=>
    int(8)
    ["decimals"]=>
    int(0)
  }
  [1]=>
  object(stdClass)#4 (13) {
    ["name"]=>
    string(4) "_two"
    ["orgname"]=>
    string(0) ""
    ["table"]=>
    string(0) ""
    ["orgtable"]=>
    string(0) ""
    ["def"]=>
    string(0) ""
    ["db"]=>
    string(0) ""
    ["catalog"]=>
    string(3) "def"
    ["max_length"]=>
    int(5)
    ["length"]=>
    int(5)
    ["charsetnr"]=>
    int(8)
    ["flags"]=>
    int(1)
    ["type"]=>
    int(253)
    ["decimals"]=>
    int(31)
  }
}
```

**Instruções preparadas**

Metadados de conjuntos de resultados criados por instruções preparadas são acessados
da mesma forma. Um manipulador [mysqli\_result](class.mysqli-result.md) adequado é
retornado pelo método [mysqli\_stmt::result\_metadata()](mysqli-stmt.result-metadata.md).

**Exemplo #2 Metadados de instruções preparadas**

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("example.com", "user", "password", "database");

$stmt = $mysqli->prepare("SELECT 1 AS _one, 'Hello' AS _two FROM DUAL");
$stmt->execute();
$result = $stmt->result_metadata();
var_dump($result->fetch_fields());
```

**Veja também**

- [mysqli::query()](mysqli.query.md)
- [mysqli\_result::fetch\_fields()](mysqli-result.fetch-fields.md)

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
