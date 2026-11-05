# Prepara e executa uma consulta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sqlsrv-query.php

---

# sqlsrv\_query

(No version information available, might only be in Git)

sqlsrv\_query — Prepara e executa uma consulta

### Descrição

function **sqlsrv\_query**(  
    [resource](language.types.resource.md) `$conn`,  
    [string](language.types.string.md) `$sql`,  
    [array](language.types.array.md) `$params` = ?,  
    [array](language.types.array.md) `$options` = ?  
): [mixed](language.types.mixed.md)

Prepara e executa uma consulta.

### Parâmetros

`conn`
:   Um recurso de conexão retornado por [sqlsrv\_connect()](function.sqlsrv-connect.md).

`sql`
:   A string que define a consulta a ser preparada e executada.

`params`
:   Um array especificando informações de parâmetro ao executar uma consulta parametrizada.
    Os elementos do array podem ser um dos seguintes:

    - Um valor literal
    - Uma variável PHP
    - Um array com esta estrutura:
      array($valor [, $direção [, $tipoPHP [, $tipoSQL]]])

    A tabela a seguir descreve os elementos na estrutura do array acima:

    **Estrutura do array**

    | Elemento | Descrição |
    | --- | --- |
    | $value | Um valor literal, uma variável PHP ou uma variável PHP por referência. |
    | $direction (opcional) | Uma das constantes SQLSRV usadas para indicar a direção do parâmetro: SQLSRV\_PARAM\_IN, SQLSRV\_PARAM\_OUT, SQLSRV\_PARAM\_INOUT. O valor padrão é SQLSRV\_PARAM\_IN. |
    | $phpType (opcional) | Uma constante SQLSRV\_PHPTYPE\_\* que especifica o tipo de dado PHP do valor retornado. |
    | $sqlType (opcional) | Uma constante SQLSRV\_SQLTYPE\_\* que especifica o tipo de dado do SQL Server do valor de entrada. |

`options`
:   Um array especificando opções de propriedade da consulta. As chaves suportadas são descritas
    na tabela a seguir:

    **Opções de Consulta**

    | Chave | Valores | Descrição |
    | --- | --- | --- |
    | QueryTimeout | Um valor inteiro positivo. | Define o tempo limite da consulta em segundos. Por padrão, o driver aguardará indefinidamente por resultados. |
    | SendStreamParamsAtExec | **`true`** ou **`false`** (o padrão é **`true`**) | Configura o driver para enviar todos os dados de fluxo na execução (**`true`**), ou para enviar os dados de fluxo em blocos (**`false`**). Por padrão, o valor é **`true`**. Para mais informações, consulte [sqlsrv\_send\_stream\_data()](function.sqlsrv-send-stream-data.md). |
    | Scrollable | SQLSRV\_CURSOR\_FORWARD, SQLSRV\_CURSOR\_STATIC, SQLSRV\_CURSOR\_DYNAMIC, ou SQLSRV\_CURSOR\_KEYSET | Veja [» Especificar um Tipo de Cursor e Selecionar Linhas](https://msdn.microsoft.com/en-us/library/ee376927.aspx) na documentação do Microsoft SQLSRV. |

### Valor Retornado

Retorna um recurso de declaração em caso de sucesso e **`false`** se ocorrer um erro.

### Examples

**Exemplo #1 Exemplo de **sqlsrv\_query()****

```
<?php
$serverName = "serverName\sqlexpress";
$connectionInfo = array( "Database"=>"dbName", "UID"=>"username", "PWD"=>"password" );
$conn = sqlsrv_connect( $serverName, $connectionInfo);
if( $conn === false ) {
     die( print_r( sqlsrv_errors(), true));
}

$sql = "INSERT INTO Table_1 (id, data) VALUES (?, ?)";
$params = array(1, "some data");

$stmt = sqlsrv_query( $conn, $sql, $params);
if( $stmt === false ) {
     die( print_r( sqlsrv_errors(), true));
}
?>
```

### Notas

Para declarações que você planeja executar apenas uma vez, use **sqlsrv\_query()**.
Se você pretende reexecutar uma declaração com diferentes valores de parâmetro, use
a combinação de [sqlsrv\_prepare()](function.sqlsrv-prepare.md) e [sqlsrv\_execute()](function.sqlsrv-execute.md).

### Veja também

- [sqlsrv\_prepare()](function.sqlsrv-prepare.md) - Prepara uma consulta para execução
- [sqlsrv\_execute()](function.sqlsrv-execute.md) - Executa uma declaração preparada com sqlsrv\_prepare

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
