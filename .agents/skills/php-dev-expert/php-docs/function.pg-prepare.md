# Envia uma solicitação ao servidor para criar uma instrução preparada com os
   parâmetros fornecidos e aguarda a conclusão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-prepare.php

---

# pg\_prepare

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

pg\_prepare — 
Envia uma solicitação ao servidor para criar uma instrução preparada com os
parâmetros fornecidos e aguarda a conclusão

### Descrição

function **pg\_prepare**([PgSql\Connection](class.pgsql-connection.md) `$connection` = ?, [string](language.types.string.md) `$statement_name`, [string](language.types.string.md) `$query`): [PgSql\Result](class.pgsql-result.md)|[false](language.types.singleton.md)

**pg\_prepare()** cria uma instrução preparada para execução posterior com
[pg\_execute()](function.pg-execute.md) ou [pg\_send\_execute()](function.pg-send-execute.md).
Este recurso permite que comandos que serão usados repetidamente
sejam analisados e planejados apenas uma vez, em vez de cada vez que forem executados.

A função cria uma instrução preparada chamada `statement_name` a partir da string `query`,
que deve conter um único comando SQL. `statement_name` pode ser `""` para
criar uma instrução sem nome, caso em que qualquer instrução sem nome pré-existente
é automaticamente substituída; caso contrário, será um erro se o nome da
instrução já estiver definido na sessão atual. Se algum parâmetro
for usado, ele será referido na `query` como `$1`,
`$2` etc.

Instruções preparadas para uso com **pg\_prepare()** também podem ser criadas
executando instruções SQL `PREPARE`. (Mas **pg\_prepare()** é
mais flexível, pois não requer que os tipos de parâmetros sejam pré-especificados.) Além disso,
embora não exista uma função PHP para excluir uma instrução preparada, a
declaração SQL `DEALLOCATE` pode ser usada para esse propósito.

### Parâmetros

`connection`
:   Uma instância de [PgSql\Connection](class.pgsql-connection.md).
    Quando o parâmetro `connection` não for especificado, a conexão padrão será usada.
    A conexão padrão é a última conexão feita por [pg\_connect()](function.pg-connect.md)
    ou [pg\_pconnect()](function.pg-pconnect.md).

    **Aviso**

    A partir do PHP 8.1.0, usar a conexão padrão foi descontinuado.

`statement_name`
:   O nome para dar a declaração preparada. Deve ser exclusivo por conexão. Se
    `""` for especificado, uma instrução sem nome será criada, substituindo qualquer
    instrução sem nome definida anteriormente.

`query`
:   A instrução SQL parametrizada. Deve conter apenas uma única instrução
    (múltiplas instruções separadas por ponto e vírgula não são permitidas). Se algum parâmetro
    for usado, ele será chamado de `$1`, `$2` etc.

### Valor Retornado

Uma instância [PgSql\Result](class.pgsql-result.md) em caso de sucesso, ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | Agora retorna uma instância de [PgSql\Result](class.pgsql-result.md); anteriormente, um [resource](language.types.resource.md) era retornado. |
| 8.1.0 | O parâmetro `connection` agora espera uma instância de [PgSql\Connection](class.pgsql-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Usando **pg\_prepare()****

```
<?php

// Conecta a um banco de dados chamado "mary"
$dbconn = pg_connect("dbname=mary");

// Prepara uma consulta para execução
$result = pg_prepare($dbconn, "my_query", 'SELECT * FROM shops WHERE name = $1');

// Executa a consulta preparada. Observe que não é necessário escapar
// a string "Joe's Widgets" de forma alguma
$result = pg_execute($dbconn, "my_query", array("Joe's Widgets"));

// Executa a mesma consulta preparada, desta vez com um parâmetro diferente
$result = pg_execute($dbconn, "my_query", array("Clothes Clothes Clothes"));

?>
```

### Veja também

- [pg\_execute()](function.pg-execute.md) - Envia uma solicitação para executar uma instrução preparada com determinados parâmetros e aguarda o resultado
- [pg\_send\_execute()](function.pg-send-execute.md) - Envia uma solicitação para executar uma instrução preparada com determinados parâmetros, sem esperar pelo(s) resultado(s)

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
