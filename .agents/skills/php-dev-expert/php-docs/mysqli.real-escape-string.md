# Escape caracteres especiais em uma string para uso em uma instrução SQL, levando em consideração o conjunto de caracteres atual da conexão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli.real-escape-string.php

---

# mysqli::real\_escape\_string

# mysqli\_real\_escape\_string

(PHP 5, PHP 7, PHP 8)

mysqli::real\_escape\_string -- mysqli\_real\_escape\_string — Escape caracteres especiais em uma string para uso em uma instrução SQL, levando em consideração o conjunto de caracteres atual da conexão

### Descrição

Estilo orientado a objetos

public function **mysqli::real\_escape\_string**([string](language.types.string.md) `$string`): [string](language.types.string.md)

Estilo procedural

function **mysqli\_real\_escape\_string**([mysqli](class.mysqli.md) `$mysql`, [string](language.types.string.md) `$string`): [string](language.types.string.md)

Esta função é usada para criar uma string SQL legal que você pode usar em uma
instrução SQL. A string fornecida é codificada para produzir uma string SQL com escape,
levando em consideração o conjunto de caracteres atual da conexão.

**Cuidado**

# Segurança: o conjunto de caracteres padrão

O conjunto de caracteres deve ser definido no nível do servidor ou com a
função API [mysqli\_set\_charset()](mysqli.set-charset.md) para que afete
**mysqli\_real\_escape\_string()**. Consulte a seção de
conceitos sobre [conjuntos de caracteres](mysqlinfo.concepts.charset.md)
para obter mais informações.

### Parâmetros

`mysql`
:   Somente no estilo procedural: Um objeto [mysqli](class.mysqli.md)
    retornado por [mysqli\_connect()](function.mysqli-connect.md) ou [mysqli\_init()](mysqli.init.md)

`string`
:   A string a ser escapada.

    Os caracteres codificados são `NUL (ASCII 0)`,
    `\n`, `\r`, `\`,
    `'`, `"`, e
    `CTRL+Z`.

### Valor Retornado

Retorna uma string com escape.

### Examples

**Exemplo #1 Exemplo de **mysqli::real\_escape\_string()****

Estilo orientado a objetos

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "my_user", "my_password", "world");

$city = "'s-Hertogenbosch";

/* esta consulta com escape $city funcionará */
$query = sprintf("SELECT CountryCode FROM City WHERE name='%s'",
$mysqli->real_escape_string($city));
$result = $mysqli->query($query);
printf("Select retornou %d linhas.\n", $result->num_rows);

/* esta consulta falhará, porque não escapamos de $city */
$query = sprintf("SELECT CountryCode FROM City WHERE name='%s'", $city);
$result = $mysqli->query($query);
```

Estilo procedural

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = mysqli_connect("localhost", "my_user", "my_password", "world");

$city = "'s-Hertogenbosch";

/* esta consulta com escape $city funcionará */
$query = sprintf("SELECT CountryCode FROM City WHERE name='%s'",
mysqli_real_escape_string($mysqli, $city));
$result = mysqli_query($mysqli, $query);
printf("Select retornou %d linhas.\n", mysqli_num_rows($result));

/* esta consulta falhará, porque não escapamos de $city*/
$query = sprintf("SELECT CountryCode FROM City WHERE name='%s'", $city);
$result = mysqli_query($mysqli, $query);
```

Os exemplos acima produzirão
algo semelhante a:

```
Select retornou 1 linhas.

Fatal error: Uncaught mysqli_sql_exception: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 's-Hertogenbosch'' at line 1 in...
```

### Veja também

- [mysqli\_set\_charset()](mysqli.set-charset.md) - Define o conjunto de caracteres do cliente

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
