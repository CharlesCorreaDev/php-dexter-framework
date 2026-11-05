# Sondagem de conexões

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli.poll.php

---

# mysqli::poll

# mysqli\_poll

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

mysqli::poll -- mysqli\_poll — Sondagem de conexões

### Descrição

Estilo orientado a objetos

public static function **mysqli::poll**(  
    [?](language.types.null.md)[array](language.types.array.md) `&$read`,  
    [?](language.types.null.md)[array](language.types.array.md) `&$error`,  
    [array](language.types.array.md) `&$reject`,  
    [int](language.types.integer.md) `$seconds`,  
    [int](language.types.integer.md) `$microseconds` = 0  
): [int](language.types.integer.md)|[false](language.types.singleton.md)

Estilo procedural

function **mysqli\_poll**(  
    [?](language.types.null.md)[array](language.types.array.md) `&$read`,  
    [?](language.types.null.md)[array](language.types.array.md) `&$error`,  
    [array](language.types.array.md) `&$reject`,  
    [int](language.types.integer.md) `$seconds`,  
    [int](language.types.integer.md) `$microseconds` = 0  
): [int](language.types.integer.md)|[false](language.types.singleton.md)

Faz sondagem de conexões.
Este método pode ser usado como
[static](language.oop5.static.md).

> **Nota**:
>
> Disponível apenas com o [mysqlnd](book.mysqlnd.md).

### Parâmetros

`read`
:   Lista de conexões a verificar por resultados marcantes que possam ser lidos.

`error`
:   Lista de conexões nas quais um erro ocorreu, por exemplo, falha
    na consulta ou conexão perdida.

`reject`
:   Lista de conexões rejeitadas porque nenhuma consulta assícrona
    foi executada para que a função pudesse sondar os resultados.

`seconds`
:   Número máximo de segundos a esperar, deve ser não negativo.

`microseconds`
:   Número máximo de microssegundos a esperar, deve ser não negativo.

### Valor Retornado

Retorna o número de conexões prontas em caso de sucesso, **`false`** caso contrário.

### Erros/Exceções

Uma exceção [ValueError](class.valueerror.md) é lançada quando nem o parâmetro
`read` nem o parâmetro `error` são passados.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.3.0 | Agora lança uma exceção [ValueError](class.valueerror.md) quando nem o parâmetro `read` nem o parâmetro `error` são passados. |

### Examples

**Exemplo #1 Um exemplo de **mysqli\_poll()****

```
<?php
$link1 = mysqli_connect();
$link1->query("SELECT 'test'", MYSQLI_ASYNC);
$all_links = array($link1);
$processed = 0;
do {
    $links = $errors = $reject = array();
    foreach ($all_links as $link) {
        $links[] = $errors[] = $reject[] = $link;
    }
    if (!mysqli_poll($links, $errors, $reject, 1)) {
        continue;
    }
    foreach ($links as $link) {
        if ($result = $link->reap_async_query()) {
            print_r($result->fetch_row());
            if (is_object($result))
                mysqli_free_result($result);
        } else die(sprintf("MySQLi Error: %s", mysqli_error($link)));
        $processed++;
    }
} while ($processed < count($all_links));
?>
```

O exemplo acima produzirá:

```
Array
(
    [0] => test
)
```

### Veja também

- [mysqli\_query()](mysqli.query.md) - Executa uma consulta no banco de dados
- [mysqli\_reap\_async\_query()](mysqli.reap-async-query.md) - Obtenha o resultado da consulta assíncrona

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
