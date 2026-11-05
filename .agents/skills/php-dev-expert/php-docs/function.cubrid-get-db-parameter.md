# Retorna os parâmetros do banco de dados CUBRID

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-get-db-parameter.php

---

# cubrid\_get\_db\_parameter

(PECL CUBRID >= 8.3.0)

cubrid\_get\_db\_parameter — Retorna os parâmetros do banco de dados CUBRID

### Descrição

function **cubrid\_get\_db\_parameter**([resource](language.types.resource.md) `$conn_identifier`): [array](language.types.array.md)

Esta função retorna os parâmetros do banco de dados CUBRID, ou **`false`** em caso de falha.
Retorna um array associativo com os valores para os seguintes parâmetros:

- **`PARAM_ISOLATION_LEVEL`**
- **`PARAM_LOCK_TIMEOUT`**
- **`PARAM_MAX_STRING_LENGTH`**
- **`PARAM_AUTO_COMMIT`**

**Parâmetros do banco de dados**

| Parâmetro | Descrição |
| --- | --- |
| PARAM\_ISOLATION\_LEVEL | O nível de isolamento da transação. |
| LOCK\_TIMEOUT | O CUBRID fornece o recurso de tempo limite de trava, que define o tempo de espera (em segundos) para a trava até que a configuração de trava da transação seja permitida. O valor padrão para o parâmetro lock\_timeout\_in\_secs é -1, que significa que a aplicação cliente irá esperar indefinidamente até que a trava da transação seja permitida. |
| PARAM\_AUTO\_COMMIT | No CUBRID PHP, o modo de auto-confirmação é desabilitado por padrão para gerenciamento de transação. Pode ser definido pela função [cubrid\_set\_autocommit()](function.cubrid-set-autocommit.md). |

A tabela a seguir mostra os níveis de isolamento de 1 a 6. Consiste no
esquema da tabela (linha) e no nível de isolamento:

**Níveis de Isolamento Suportados pelo CUBRID**

| Nome | Descrição |
| --- | --- |
| SERIALIZÁVEL (6) | Neste nível de isolamento, problemas relacionados a concorrência (ex.: leituras "sujas", leituras não repetíveis, leituras fantasmas, etc.) não ocorrem. |
| CLASSE DE LEITURA REPETÍVEL com INSTÂNCIAS DE LEITURA REPETÍVEIS (5) | Uma transação T2 não pode atualizar o esquema da tabela A enquanto a transação T1 está visualizando a tabela A. A transação T1 poderá experimentar leitura fantasma para o registro R que foi inserido por outra transação T2 enquanto estiver repetidamente recuperando um registro específico. |
| CLASSE DE LEITURA REPETÍVEL com INSTÂNCIAS DE LEITURA CONFIRMADAS (ou ESTABILIDADE DE CURSOR) (4) | Uma transação T2 não pode atualizar o esquema da tabela A enquanto a transação T1 está visualizando a tabela A. A transação T1 poderá experimentar leitura de R (leitura não repetível) que foi atualizado e confirmado por outras transação T1 enquanto estiver repetidamente recuperando o registro R. |
| CLASSE DE LEITURA REPETÍVEL com INSTÂNCIAS DE LEITURA NÃO CONFIRMADAS (3) | Nível padrão de isolamento. Uma transação T2 não pode atualizar o esquema da tabela A enquanto a transação T1 estiver visualizando a tabela A. A transação poderá experimentar leitura de R' (leitura "suja") para o registro que foi atualizado mas não confirmado pela transação T2. |
| CLASSE DE LEITURA CONFIRMADA com INSTÂNCIAS DE LEITURA CONFIRMADA (2) | A transação T1 poderá experimentar leitura de A' (leitura não repetível) para a tabela que foi atualizada e confirmada pela transação T2 enquanto estiver visualizando a tabela A repetidamente. A transação T1 poderá experimentar leitura de R' (leitura não repetível) para o registro que foi atualizado e confirmado pela transação T2 enquanto estiver recuperando o registro R repetidamente. |
| CLASSE DE LEITURA CONFIRMADA com INSTÂNCIAS DE LEITURA NÃO CONFIRMADA (1) | A transação T1 poderá experimentar leitura de A' (leitura não repetível) para a tabela que foi atualizada e confirmada pela transação T2 enquanto estiver repetidamente visualizando a tabela A. A transação T1 poderá experimentar leitura de R' (leitura "suja") para o registro que foi atualizado mas não confirmado pela transação T2. |

### Parâmetros

`conn_identifier`
:   A conexão CUBRID. Se o identificador da conexão não for especificado,
    a última conexão aberta por [cubrid\_connect()](function.cubrid-connect.md) será usada.

### Valor Retornado

Um array associativo com parâmetros do banco de dados CUBRID em caso de sucesso, ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Alterados LOCK\_TIMEOUT para PARAM\_LOCK\_TIMEOUT, e MAX\_STRING\_LENGTH para PARAM\_MAX\_STRING\_LENGTH no resultado. |

### Examples

**Exemplo #1 Exemplo de **cubrid\_get\_db\_parameter()****

```
<?php
printf("%-33s %s\n", "Versão do CUBRID PHP:", cubrid_version());

printf("\n");

$conn = cubrid_connect("localhost", 33088, "demodb");

if (!$conn) {
    die('Connect Error ('. cubrid_error_code() .')' . cubrid_error_msg());
}

$db_params = cubrid_get_db_parameter($conn);

while (list($param_name, $param_value) = each($db_params)) {
    printf("%-33s %s\n", $param_name, $param_value);
}

printf("\n");

$server_info = cubrid_get_server_info($conn);
$client_info = cubrid_get_client_info();

printf("%-33s %s\n", "Informação do servidor:", $server_info);
printf("%-33s %s\n", "Informação do cliente:", $client_info);

printf("\n");

$charset = cubrid_get_charset($conn);

printf("%-33s %s\n", "Conjunto de caracteres do CUBRID:", $charset);

cubrid_disconnect($conn);

?>
```

O exemplo acima produzirá:

```
Versão do CUBRID PHP:             9.1.0.0001

PARAM_ISOLATION_LEVEL             3
LOCK_TIMEOUT                      -1
MAX_STRING_LENGTH                 1073741823
PARAM_AUTO_COMMIT                 1

Informação do servidor:           9.1.0.0212
Informação do cliente:            9.1.0

Conjunto de caracteres do CUBRID: iso8859-1
```

### Veja também

- [cubrid\_set\_db\_parameter()](function.cubrid-set-db-parameter.md) - Define os parâmetros do banco de dados CUBRID
- [cubrid\_get\_autocommit()](function.cubrid-get-autocommit.md) - Obtém o modo de auto-confirmação da conexão

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
