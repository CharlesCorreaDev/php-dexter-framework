# Define o modo de relatório de erros do mysqli

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli-driver.report-mode.php

---

# mysqli\_driver::$report\_mode

# mysqli\_report

(PHP 5, PHP 7, PHP 8)

mysqli\_driver::$report\_mode -- mysqli\_report — Define o modo de relatório de erros do mysqli

### Descrição

Estilo orientado a objetos

[int](language.types.integer.md) [$mysqli\_driver->report\_mode](mysqli-driver.report-mode.md);

Estilo procedural

function [mysqli\_report](function.mysqli-report.md)([int](language.types.integer.md) `$flags`): [true](language.types.singleton.md)

Dependendo das flags, ele define o modo de relatório de erros do mysqli como exceção, aviso ou nenhum.
Quando definido como **`MYSQLI_REPORT_ALL`** ou **`MYSQLI_REPORT_INDEX`**,
ele também informará sobre as consultas que não usam um índice (ou usam um índice incorreto).

A partir do PHP 8.1.0, a configuração padrão é `MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT`.
Anteriormente, era **`MYSQLI_REPORT_OFF`**.

### Parâmetros

`flags`
:   **Flags suportadas**

    | Nome | Descrição |
    | --- | --- |
    | **`MYSQLI_REPORT_OFF`** | Desativa os relatórios |
    | **`MYSQLI_REPORT_ERROR`** | Relatar erros de chamadas de função mysqli |
    | **`MYSQLI_REPORT_STRICT`** | Lance [mysqli\_sql\_exception](class.mysqli-sql-exception.md) para erros em vez de avisos |
    | **`MYSQLI_REPORT_INDEX`** | Informa se nenhum índice ou índice inválido foi usado em uma consulta |
    | **`MYSQLI_REPORT_ALL`** | Define todas as opções (relatar tudo) |

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O valor padrão agora é `MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT`. Anteriormente, era **`MYSQLI_REPORT_OFF`**. |

### Examples

**Exemplo #1 Estilo orientado a objetos**

```
<?php

/* ativar relatórios */
$driver = new mysqli_driver();
$driver->report_mode = MYSQLI_REPORT_ALL;

try {
    /* se a conexão falhar, um mysqli_sql_exception será lançado */
    $mysqli = new mysqli("localhost", "my_user", "my_password", "my_db");

    /* esta consulta deve relatar um erro */
    $result = $mysqli->query("SELECT Name FROM Nonexistingtable WHERE population > 50000");

    /* esta consulta deve relatar um índice ruim se a população da coluna não tiver um índice */
    $result = $mysqli->query("SELECT Name FROM City WHERE population > 50000");
} catch (mysqli_sql_exception $e) {
    error_log($e->__toString());
}
```

**Exemplo #2 Estilo procedural**

```
<?php

/* ativar relatórios */
mysqli_report(MYSQLI_REPORT_ALL);

try {
    /* se a conexão falhar, um mysqli_sql_exception será lançado */
    $link = mysqli_connect("localhost", "my_user", "my_password", "my_db");

    /* esta consulta deve relatar um erro */
    $result = mysqli_query($link, "SELECT Name FROM Nonexistingtable WHERE population > 50000");

    /* esta consulta deve relatar um índice ruim se a população da coluna não tiver um índice */
    $result = mysqli_query($link, "SELECT Name FROM City WHERE population > 50000");
} catch (mysqli_sql_exception $e) {
    error_log($e->__toString());
}
```

**Exemplo #3 Relatório de erros, exceto erros de índice ruim**

```
<?php

/* ativar relatórios */
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    /* se a conexão falhar, um mysqli_sql_exception será lançado */
    $mysqli = new mysqli("localhost", "my_user", "my_password", "my_db");

    /* esta consulta deve relatar um erro */
    $result = $mysqli->query("SELECT Name FROM Nonexistingtable WHERE population > 50000");

    /* isso NÃO relatará nenhum erro, mesmo que o índice não esteja disponível */
    $result = $mysqli->query("SELECT Name FROM City WHERE population > 50000");
} catch (mysqli_sql_exception $e) {
    error_log($e->__toString());
}
```

### Veja também

- [mysqli\_sql\_exception](class.mysqli-sql-exception.md)
- [set\_exception\_handler()](function.set-exception-handler.md) - Define uma função de manipulação de exceção definida pelo usuário
- [error\_reporting()](function.error-reporting.md) - Define quais erros do PHP são relatados

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
