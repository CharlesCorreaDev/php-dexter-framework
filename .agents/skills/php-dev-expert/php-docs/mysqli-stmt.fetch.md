# Recebe resultados de uma instrução preparada nas variáveis vinculadas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli-stmt.fetch.php

---

# mysqli\_stmt::fetch

# mysqli\_stmt\_fetch

(PHP 5, PHP 7, PHP 8)

mysqli\_stmt::fetch -- mysqli\_stmt\_fetch — Recebe resultados de uma instrução preparada nas variáveis vinculadas

### Descrição

Estilo orientado a objetos

public function **mysqli\_stmt::fetch**(): [?](language.types.null.md)[bool](language.types.boolean.md)

Estilo procedural

function **mysqli\_stmt\_fetch**([mysqli\_stmt](class.mysqli-stmt.md) `$statement`): [?](language.types.null.md)[bool](language.types.boolean.md)

Recebe o resultado de uma instrução preparada nas variáveis vinculadas por
[mysqli\_stmt\_bind\_result()](mysqli-stmt.bind-result.md).

> **Nota**:
>
> Observe que todas as colunas precisam estar vinculadas pela aplicação antes de chamar a função
> **mysqli\_stmt\_fetch()**.

> **Nota**:
>
> Os dados são transferidos sem buffer quando não se chama a função
> [mysqli\_stmt\_store\_result()](mysqli-stmt.store-result.md), o que pode reduzir
> o desempenho (mas reduz o consumo de memória).

### Parâmetros

`statement`
:   Somente no estilo procedural: Um objeto [mysqli\_stmt](class.mysqli-stmt.md)
    retornado por [mysqli\_stmt\_init()](mysqli.stmt-init.md).

### Valor Retornado

**Valor Retornado**

| Valor | Descrição |
| --- | --- |
| **`true`** | Sucesso. Dados foram recebidos |
| **`false`** | Error occurred |
| **`null`** | Não há mais linhas/dados ou ocorreu um truncamento de dados |

### Erros/Exceções

Se o relatório de erros da extensão mysqli estiver habilitado (**`MYSQLI_REPORT_ERROR`**) e a operação solicitada falhar,
um aviso será gerado. Se, além disso, o modo for definido como **`MYSQLI_REPORT_STRICT`**,
uma exceção [mysqli\_sql\_exception](class.mysqli-sql-exception.md) será lançada em vez do aviso.

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

$query = "SELECT Name, CountryCode FROM City ORDER by ID DESC LIMIT 150,5";

if ($stmt = $mysqli->prepare($query)) {

    /* executa a instrução */
    $stmt->execute();

    /* vincula as variáveis do resultado */
    $stmt->bind_result($name, $code);

    /* recebe os valores */
    while ($stmt->fetch()) {
        printf ("%s (%s)\n", $name, $code);
    }

    /* fecha a instrução */
    $stmt->close();
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

$query = "SELECT Name, CountryCode FROM City ORDER by ID DESC LIMIT 150,5";

if ($stmt = mysqli_prepare($link, $query)) {

    /* executa a instrução */
    mysqli_stmt_execute($stmt);

    /* vincula as variáveis do resultado */
    mysqli_stmt_bind_result($stmt, $name, $code);

    /* recebe os valores */
    while (mysqli_stmt_fetch($stmt)) {
        printf ("%s (%s)\n", $name, $code);
    }

    /* fecha a instrução */
    mysqli_stmt_close($stmt);
}

/* fecha a conexão */
mysqli_close($link);
?>
```

Os exemplos acima produzirão:

```
Rockford (USA)
Tallahassee (USA)
Salinas (USA)
Santa Clarita (USA)
Springfield (USA)
```

### Veja também

- [mysqli\_prepare()](mysqli.prepare.md) - Prepara uma instrução SQL para execução
- [mysqli\_stmt\_errno()](mysqli-stmt.errno.md) - Retorna o código de erro para a chamada de instrução mais recente
- [mysqli\_stmt\_error()](mysqli-stmt.error.md) - Retorna uma descrição em string para o último erro de instrução
- [mysqli\_stmt\_bind\_result()](mysqli-stmt.bind-result.md) - Liga variáveis a uma declaração preparada para armazenamento de resultado

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
