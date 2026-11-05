# Inicia uma recuperação de conjunto de resultados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli.use-result.php

---

# mysqli::use\_result

# mysqli\_use\_result

(PHP 5, PHP 7, PHP 8)

mysqli::use\_result -- mysqli\_use\_result — Inicia uma recuperação de conjunto de resultados

### Descrição

Estilo orientado a objetos

public function **mysqli::use\_result**(): [mysqli\_result](class.mysqli-result.md)|[false](language.types.singleton.md)

Estilo procedural

function **mysqli\_use\_result**([mysqli](class.mysqli.md) `$mysql`): [mysqli\_result](class.mysqli-result.md)|[false](language.types.singleton.md)

Usado para iniciar a recuperação de um conjunto de resultados da última consulta
executada usando a função [mysqli\_real\_query()](mysqli.real-query.md) na conexão com o
banco de dados.

Esta ou a função [mysqli\_store\_result()](mysqli.store-result.md) deve ser chamada
antes que os resultados de uma consulta possam ser recuperados, e uma ou outra
deve ser chamada para evitar que a próxima consulta nessa conexão com o
banco de dados falhe.

> **Nota**:
>
> A função **mysqli\_use\_result()** não transfere todo o
> conjunto de resultados do banco de dados e, portanto, não pode ser usada com funções
> como [mysqli\_data\_seek()](mysqli-result.data-seek.md) para mover para uma
> linha específica dentro do conjunto. Para usar esta funcionalidade, o conjunto de resultados
> deve ser armazenado usando [mysqli\_store\_result()](mysqli.store-result.md). Não se deve usar
> **mysqli\_use\_result()** se for feito muito processamento no
> lado do cliente, pois isso irá sobrecarregar o servidor e
> evitar que outras threads atualizem quaisquer tabelas das quais os
> dados estão sendo buscados.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um objeto de resultado sem buffer ou **`false`** se ocorreu um erro.

### Erros/Exceções

Se o relatório de erros da extensão mysqli estiver habilitado (**`MYSQLI_REPORT_ERROR`**) e a operação solicitada falhar,
um aviso será gerado. Se, além disso, o modo for definido como **`MYSQLI_REPORT_STRICT`**,
uma exceção [mysqli\_sql\_exception](class.mysqli-sql-exception.md) será lançada em vez do aviso.

### Examples

**Exemplo #1 Exemplo de **mysqli::use\_result()****

Estilo orientado a objetos

```
<?php
$mysqli = new mysqli("localhost", "my_user", "my_password", "world");

/* verifique a conexão */
if (mysqli_connect_errno()) {
    printf("Falha na conexão: %s\n", mysqli_connect_error());
    exit();
}

$query  = "SELECT CURRENT_USER();";
$query .= "SELECT Name FROM City ORDER BY ID LIMIT 20, 5";

/* executar várias consultas */
if ($mysqli->multi_query($query)) {
    do {
        /* armazenar primeiro conjunto de resultados */
        if ($result = $mysqli->use_result()) {
            while ($row = $result->fetch_row()) {
                printf("%s\n", $row[0]);
            }
            $result->close();
        }
        /* divisor de impressão */
        if ($mysqli->more_results()) {
            printf("-----------------\n");
        }
    } while ($mysqli->next_result());
}

/* fecha a conexão */
$mysqli->close();
?>
```

Estilo procedural

```
<?php
$link = mysqli_connect("localhost", "my_user", "my_password", "world");

/* verifique a conexão */
if (mysqli_connect_errno()) {
    printf("Falha na conexão: %s\n", mysqli_connect_error());
    exit();
}

$query  = "SELECT CURRENT_USER();";
$query .= "SELECT Name FROM City ORDER BY ID LIMIT 20, 5";

/* executar várias consultas */
if (mysqli_multi_query($link, $query)) {
    do {
        /* armazenar primeiro conjunto de resultados */
        if ($result = mysqli_use_result($link)) {
            while ($row = mysqli_fetch_row($result)) {
                printf("%s\n", $row[0]);
            }
            mysqli_free_result($result);
        }
        /* divisor de impressão */
        if (mysqli_more_results($link)) {
            printf("-----------------\n");
        }
    } while (mysqli_next_result($link));
}

/* fecha a conexão */
mysqli_close($link);
?>
```

Os exemplos acima produzirão:

```
my_user@localhost
-----------------
Amersfoort
Maastricht
Dordrecht
Leiden
Haarlemmermeer
```

### Veja também

- [mysqli\_real\_query()](mysqli.real-query.md) - Executa uma consulta SQL
- [mysqli\_store\_result()](mysqli.store-result.md) - Transfere um conjunto de resultados da última consulta

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
