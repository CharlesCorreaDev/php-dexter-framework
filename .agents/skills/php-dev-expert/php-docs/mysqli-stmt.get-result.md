# Obtém um resultado de uma instrução preparada como um objeto mysqli_result

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli-stmt.get-result.php

---

# mysqli\_stmt::get\_result

# mysqli\_stmt\_get\_result

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

mysqli\_stmt::get\_result -- mysqli\_stmt\_get\_result — Obtém um resultado de uma instrução preparada como um objeto [mysqli\_result](class.mysqli-result.md)

### Descrição

Estilo orientado a objetos

public function **mysqli\_stmt::get\_result**(): [mysqli\_result](class.mysqli-result.md)|[false](language.types.singleton.md)

Estilo procedural

function **mysqli\_stmt\_get\_result**([mysqli\_stmt](class.mysqli-stmt.md) `$statement`): [mysqli\_result](class.mysqli-result.md)|[false](language.types.singleton.md)

Recebe um resultado de uma instrução preparada como um
objeto [mysqli\_result](class.mysqli-result.md). Os dados serão transportados do
servidor MySQL para o PHP. Este método deve ser chamado somente para
consultas que produzem um conjunto de resultados.

> **Nota**:
>
> Disponível apenas com o [mysqlnd](book.mysqlnd.md).

> **Nota**:
>
> Esta função não pode ser usada junto com a função
> [mysqli\_stmt\_store\_result()](mysqli-stmt.store-result.md). Ambas estas funções
> recebem o conjunto completo de resultados do servidor MySQL.

### Parâmetros

`statement`
:   Somente no estilo procedural: Um objeto [mysqli\_stmt](class.mysqli-stmt.md)
    retornado por [mysqli\_stmt\_init()](mysqli.stmt-init.md).

### Valor Retornado

Retorna **`false`** em caso de falha. Para consultas bem sucedidas que produzem um resultado, como `SELECT, SHOW, DESCRIBE` ou
`EXPLAIN`, **mysqli\_stmt\_get\_result()** retornará
um objeto [mysqli\_result](class.mysqli-result.md). Para outras consultas bem sucedidas, **mysqli\_stmt\_get\_result()**
retornará **`false`**. A função [mysqli\_stmt\_errno()](mysqli-stmt.errno.md) pode ser
usada para distinguir entre os dois motivos para **`false`**; devido a um problema de software, antes do PHP 7.4.13,
[mysqli\_errno()](mysqli.errno.md) tinha de ser usada para este propósito.

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

$query = "SELECT Name, Population, Continent FROM Country WHERE Continent=? ORDER BY Name LIMIT 1";

$stmt = $mysqli->prepare($query);
$stmt->bind_param("s", $continent);

$continentList = array('Europe', 'Africa', 'Asia', 'North America');

foreach ($continentList as $continent) {
    $stmt->execute();
    $result = $stmt->get_result();
    while ($row = $result->fetch_array(MYSQLI_NUM)) {
        foreach ($row as $r) {
            print "$r ";
        }
        print "\n";
    }
}
```

**Exemplo #2 Estilo procedural**

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$link = mysqli_connect("localhost", "my_user", "my_password", "world");

$query = "SELECT Name, Population, Continent FROM Country WHERE Continent=? ORDER BY Name LIMIT 1";

$stmt = mysqli_prepare($link, $query);
mysqli_stmt_bind_param($stmt, "s", $continent);

$continentList= array('Europe', 'Africa', 'Asia', 'North America');

foreach ($continentList as $continent) {
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
        foreach ($row as $r) {
            print "$r ";
        }
        print "\n";
    }
}
```

Os exemplos acima produzirão
algo semelhante a:

```
Albania 3401200 Europe
Algeria 31471000 Africa
Afghanistan 22720000 Asia
Anguilla 8000 North America
```

### Veja também

- [mysqli\_prepare()](mysqli.prepare.md) - Prepara uma instrução SQL para execução
- [mysqli\_stmt\_result\_metadata()](mysqli-stmt.result-metadata.md) - Retorna os metadados de resultado de uma instrução preparada
- [mysqli\_stmt\_fetch()](mysqli-stmt.fetch.md) - Recebe resultados de uma instrução preparada nas variáveis vinculadas
- [mysqli\_fetch\_array()](mysqli-result.fetch-array.md) - Recebe a próxima linha de resultado como array associativo, numérico, ou ambos
- [mysqli\_stmt\_store\_result()](mysqli-stmt.store-result.md) - Armazena um conjunto de resultados em um buffer interno

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
