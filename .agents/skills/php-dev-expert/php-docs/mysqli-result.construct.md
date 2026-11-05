# Constrói um objeto mysqli_result

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli-result.construct.php

---

# mysqli\_result::\_\_construct

(PHP 5, PHP 7, PHP 8)

mysqli\_result::\_\_construct — Constrói um objeto [mysqli\_result](class.mysqli-result.md)

### Descrição

public function **mysqli\_result::\_\_construct**([mysqli](class.mysqli.md) `$mysql`, [int](language.types.integer.md) `$result_mode` = **`MYSQLI_STORE_RESULT`**)

Este método constrói um novo objeto [mysqli\_result](class.mysqli-result.md).

Pode ser usado para criar o objeto [mysqli\_result](class.mysqli-result.md)
após a chamada à função [mysqli\_real\_query()](mysqli.real-query.md) ou
[mysqli\_multi\_query()](mysqli.multi-query.md). Construir o objeto manualmente
é equivalente a chamar a função [mysqli\_store\_result()](mysqli.store-result.md)
ou [mysqli\_use\_result()](mysqli.use-result.md).

### Parâmetros

`mysql`
:   Somente no estilo procedural: Um objeto [mysqli](class.mysqli.md)
    retornado por [mysqli\_connect()](function.mysqli-connect.md) ou [mysqli\_init()](mysqli.init.md)

`result_mode`
:   O modo de resultado pode ser uma de 2 constantes que indicam como o resultado será
    retornado do servidor MySQL.

    **`MYSQLI_STORE_RESULT`** (padrão) - cria um
    objeto [mysqli\_result](class.mysqli-result.md) com resultado em buffer.

    **`MYSQLI_USE_RESULT`** - cria um
    objeto[mysqli\_result](class.mysqli-result.md) com resultado sem buffer.
    Enquanto houver registros pendentes esperando ser recebidos, a
    linha de conexão estará ocupada e todas as chamadas subsequentes retornarão o erro
    `Commands out of sync` (comandos fora de sincronismo). Para evitar o erro, todos os registros
    devem ser recebidos do servidor ou o resultado deve ser descartado
    através da função [mysqli\_free\_result()](mysqli-result.free.md). A conexão precisa
    permanecer aberta para que as linhas sejam recebidas.

### Erros/Exceções

Se o relatório de erros da extensão mysqli estiver habilitado (**`MYSQLI_REPORT_ERROR`**) e a operação solicitada falhar,
um aviso será gerado. Se, além disso, o modo for definido como **`MYSQLI_REPORT_STRICT`**,
uma exceção [mysqli\_sql\_exception](class.mysqli-sql-exception.md) será lançada em vez do aviso.

### Examples

**Exemplo #1 Criação de um objeto [mysqli\_result](class.mysqli-result.md)**

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "my_user", "my_password", "world");

/* Consultas SELECT retornam um resultado */
$mysqli->real_query("SELECT Name FROM City LIMIT 10");

$result = new mysqli_result($mysqli);
printf("SELECT retornou %d linhas.\n", $result->num_rows);
```

Os exemplos acima produzirão
algo semelhante a:

```
SELECT retornou 10 linhas.
```

### Veja também

- [mysqli\_multi\_query()](mysqli.multi-query.md) - Executa uma ou mais consultas no banco de dados
- [mysqli\_real\_query()](mysqli.real-query.md) - Executa uma consulta SQL
- [mysqli\_store\_result()](mysqli.store-result.md) - Transfere um conjunto de resultados da última consulta
- [mysqli\_use\_result()](mysqli.use-result.md) - Inicia uma recuperação de conjunto de resultados

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
