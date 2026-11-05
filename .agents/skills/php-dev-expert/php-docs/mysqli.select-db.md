# Seleciona o banco de dados padrão para consultas de banco de dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli.select-db.php

---

# mysqli::select\_db

# mysqli\_select\_db

(PHP 5, PHP 7, PHP 8)

mysqli::select\_db -- mysqli\_select\_db — Seleciona o banco de dados padrão para consultas de banco de dados

### Descrição

Estilo orientado a objetos

public function **mysqli::select\_db**([string](language.types.string.md) `$database`): [bool](language.types.boolean.md)

Estilo procedural

function **mysqli\_select\_db**([mysqli](class.mysqli.md) `$mysql`, [string](language.types.string.md) `$database`): [bool](language.types.boolean.md)

Seleciona o banco de dados padrão a ser usado ao executar consultas na
conexão do banco de dados.

> **Nota**:
>
> Esta função deve ser usada apenas para alterar o banco de dados padrão para a
> conexão. Você pode selecionar o banco de dados padrão com o 4º parâmetro em
> [mysqli\_connect()](function.mysqli-connect.md).

### Parâmetros

`mysql`
:   Somente no estilo procedural: Um objeto [mysqli](class.mysqli.md)
    retornado por [mysqli\_connect()](function.mysqli-connect.md) ou [mysqli\_init()](mysqli.init.md)

`database`
:   O nome do banco de dados.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

Se o relatório de erros da extensão mysqli estiver habilitado (**`MYSQLI_REPORT_ERROR`**) e a operação solicitada falhar,
um aviso será gerado. Se, além disso, o modo for definido como **`MYSQLI_REPORT_STRICT`**,
uma exceção [mysqli\_sql\_exception](class.mysqli-sql-exception.md) será lançada em vez do aviso.

### Examples

**Exemplo #1 Exemplo de **mysqli::select\_db()****

Estilo orientado a objetos

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "my_user", "my_password", "test");

/* obtem o nome do banco de dados padrão atual */
$result = $mysqli->query("SELECT DATABASE()");
$row = $result->fetch_row();
printf("O banco de dados padrão é %s.\n", $row[0]);

/* altere o banco de dados padrão para "mundo" */
$mysqli->select_db("world");

/* obtem o nome do banco de dados padrão atual */
$result = $mysqli->query("SELECT DATABASE()");
$row = $result->fetch_row();
printf("O banco de dados padrão é %s.\n", $row[0]);
```

Estilo procedural

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$link = mysqli_connect("localhost", "my_user", "my_password", "test");

/* obter o nome do banco de dados padrão atual */
$result = mysqli_query($link, "SELECT DATABASE()");
$row = mysqli_fetch_row($result);
printf("O banco de dados padrão és %s.\n", $row[0]);

/* altere o banco de dados padrão para "mundo" */
mysqli_select_db($link, "world");

/* obtem o nome do banco de dados padrão atual */
$result = mysqli_query($link, "SELECT DATABASE()");
$row = mysqli_fetch_row($result);
printf("O banco de dados padrão é %s.\n", $row[0]);
```

Os exemplos acima produzirão:

```
O banco de dados padrão é test.
O banco de dados padrão é world.
```

### Veja também

- [mysqli\_connect()](function.mysqli-connect.md) - Sinônimo de mysqli::\_\_construct
- [mysqli\_real\_connect()](mysqli.real-connect.md) - Abre uma conexão a um servidor MySQL

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
