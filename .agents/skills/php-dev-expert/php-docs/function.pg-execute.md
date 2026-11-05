# Envia uma solicitação para executar uma instrução preparada com determinados parâmetros e aguarda o resultado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-execute.php

---

# pg\_execute

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

pg\_execute — Envia uma solicitação para executar uma instrução preparada com determinados parâmetros e aguarda o resultado

### Descrição

function **pg\_execute**([PgSql\Connection](class.pgsql-connection.md) `$connection` = ?, [string](language.types.string.md) `$statement_name`, [array](language.types.array.md) `$params`): [PgSql\Result](class.pgsql-result.md)|[false](language.types.singleton.md)

Envia uma solicitação para executar uma instrução preparada com determinados parâmetros e
aguarda o resultado.

**pg\_execute()** é como [pg\_query\_params()](function.pg-query-params.md),
mas o comando a ser executado é
especificado nomeando uma instrução previamente preparada, em vez de fornecer uma
string de consulta. Este recurso permite que comandos que serão usados repetidamente
sejam analisados e planejados apenas uma vez, em vez de cada vez que forem executados.
A declaração deve ter sido preparada anteriormente na sessão atual.

Os parâmetros são idênticos a [pg\_query\_params()](function.pg-query-params.md), exceto que o nome de uma
instrução preparada é fornecido em vez de uma string de consulta.

### Parâmetros

`connection`
:   Uma instância de [PgSql\Connection](class.pgsql-connection.md).
    Quando o parâmetro `connection` não for especificado, a conexão padrão será usada.
    A conexão padrão é a última conexão feita por [pg\_connect()](function.pg-connect.md)
    ou [pg\_pconnect()](function.pg-pconnect.md).

    **Aviso**

    A partir do PHP 8.1.0, usar a conexão padrão foi descontinuado.

`statement_name`
:   O nome da instrução preparada a ser executada. se
    "" for especificado, a instrução sem nome será executada. O nome deve ter
    sido preparado previamente usando [pg\_prepare()](function.pg-prepare.md),
    [pg\_send\_prepare()](function.pg-send-prepare.md) ou um comando SQL
    `PREPARE`.

`params`
:   Um array de valores de parâmetros para substituir os espaços reservados $1, $2, etc.
    na string de consulta preparada original. O número de elementos no array
    deve corresponder ao número de espaços reservados.

    **Aviso**

    Os elementos são convertidos em strings chamando esta função.

### Valor Retornado

Uma instância [PgSql\Result](class.pgsql-result.md) em caso de sucesso, ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | Agora retorna uma instância de [PgSql\Result](class.pgsql-result.md); anteriormente, um [resource](language.types.resource.md) era retornado. |
| 8.1.0 | O parâmetro `connection` agora espera uma instância de [PgSql\Connection](class.pgsql-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Usando **pg\_execute()****

```
<?php
// Conecta com um banco de dados chamado "mary"
$dbconn = pg_connect("dbname=mary");

// Prepara a consulta para execução
$result = pg_prepare($dbconn, "my_query", 'SELECT * FROM shops WHERE name = $1');

// Executa a consulta preparada. Observe que não é necessário escapar a
// string "Joe's Widgets" de forma alguma
$result = pg_execute($dbconn, "my_query", array("Joe's Widgets"));

// Execute a mesma consulta preparada, desta vez com um parâmetro diferente
$result = pg_execute($dbconn, "my_query", array("Clothes Clothes Clothes"));

?>
```

### Veja também

- [pg\_prepare()](function.pg-prepare.md) - Envia uma solicitação ao servidor para criar uma instrução preparada com os
  parâmetros fornecidos e aguarda a conclusão
- [pg\_send\_prepare()](function.pg-send-prepare.md) - Envia uma solicitação para criar uma instrução preparada com os parâmetros fornecidos, sem esperar pela conclusão
- [pg\_query\_params()](function.pg-query-params.md) - Envia um comando ao servidor e aguarda o resultado, com a capacidade de passar parâmetros separadamente do texto do comando SQL

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
