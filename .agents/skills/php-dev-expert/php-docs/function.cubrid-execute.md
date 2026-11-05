# Executa uma instrução preparada SQL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-execute.php

---

# cubrid\_execute

(PECL CUBRID >= 8.3.0)

cubrid\_execute — Executa uma instrução preparada SQL

### Descrição

function **cubrid\_execute**([resource](language.types.resource.md) `$conn_identifier`, [string](language.types.string.md) `$sql`, [int](language.types.integer.md) `$option` = 0): [resource](language.types.resource.md)

function **cubrid\_execute**([resource](language.types.resource.md) `$request_identifier`, [int](language.types.integer.md) `$option` = 0): [bool](language.types.boolean.md)

A função **cubrid\_execute()** é usada para executar a
instrução SQL fornecida. Ela executa a consulta usando
`conn_identifier` e a instrução SQL, e então retorna o
identificador de requisição criado. É usada para execução simples de consulta,
onde a vinculação de parâmetros não é necessária. Além disso, a
função **cubrid\_execute()** é usada para executar a
instrução preparada por meio de [cubrid\_prepare()](function.cubrid-prepare.md) e
[cubrid\_bind()](function.cubrid-bind.md). Neste momento, é necessário especificar
argumentos de `request_identifier`
e `option`.

O parâmetro `option` é usado para determinar se o OID
deve ser obtido após a execução da consulta e se a consulta deve ser executada em modo
síncrono ou assíncrono. **`CUBRID_INCLUDE_OID`** e **`CUBRID_ASYNC`** (ou
**`CUBRID_EXEC_QUERY_ALL`** se a intenção for executar múltiplas instruções SQL) podem
ser especificadas usando um operador OR bit a bit. Se não for especificado, nenhuma delas
será selecionada. Se a opção **`CUBRID_EXEC_QUERY_ALL`** estiver definida, um modo
síncrono (sync\_mode) será usado para recuperar os resultados da consulta e, nesses casos, as
seguintes regras serão aplicadas:

- O valor de retorno é o resultado da primeira consulta.
- Se ocorrer um erro em alguma consulta, a execução será processada como
  uma falha.
- Em uma consulta composta por q1 q2 q3, se ocorrer um erro
  em q2 após q1 ter sucesso na execução, o resultado de q1 permanecerá
  válido. Ou seja, as execuções de consulta anteriores bem-sucedidas não são
  revertidas quando ocorre um erro.
- Se uma consulta for executada com sucesso, o resultado da segunda consulta pode
  ser obtido usando [cubrid\_next\_result()](function.cubrid-next-result.md).

Se o primeiro argumento for `request_identifier` para
executar a função [cubrid\_prepare()](function.cubrid-prepare.md), pode-se especificar
uma opção, apenas **`CUBRID_ASYNC`**.

### Parâmetros

`conn_identifier`
:   Identificador da conexão.

`sql`
:   Instrução SQL a ser executada.

`option`
:   Opção de execução da consulta: **`CUBRID_INCLUDE_OID`**, **`CUBRID_ASYNC`** ou **`CUBRID_EXEC_QUERY_ALL`**.

`request_identifier`
:   Identificador de [cubrid\_prepare()](function.cubrid-prepare.md).

### Valor Retornado

Identificador da requisição, em caso de sucesso e quando o primeiro parâmetro for
conn\_identifier; **`true`**, em caso de sucesso e quando o primeiro parâmetro for
request\_identifier, ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Adicionada a nova opção **`CUBRID_EXEC_QUERY_ALL`**. |

### Examples

**Exemplo #1 Exemplo de **cubrid\_execute()****

```
<?php
$conn = cubrid_connect("localhost", 33000, "demodb");

$result = cubrid_execute($conn, "SELECT code FROM event WHERE name='100m Butterfly' and gender='M'", CUBRID_ASYNC);
$row = cubrid_fetch_array($result, CUBRID_ASSOC);
$event_code = $row["code"];

cubrid_close_request($result);

$history_req = cubrid_prepare($conn, "SELECT * FROM history WHERE event_code=?");
cubrid_bind($history_req, 1, $event_code, "number");
cubrid_execute($history_req);

printf("%-20s %-9s %-10s %-5s\n", "Atleta", "Ano", "Pontos", "Unidade");
while ($row = cubrid_fetch_array($history_req, CUBRID_ASSOC)) {
    printf("%-20s %-9s %-10s %-5s\n",
        $row["athlete"], $row["host_year"], $row["score"], $row["unit"]);
}

cubrid_close_request($history_req);

cubrid_disconnect($conn);
?>
```

O exemplo acima produzirá:

```
Atleta               Ano       Pontos     Unidade
Phelps Michael       2004      51.25      time
```

### Veja também

- [cubrid\_prepare()](function.cubrid-prepare.md) - Prepara uma instrução SQL para execução
- [cubrid\_bind()](function.cubrid-bind.md) - Vincula variáveis a instruções preparadas como parâmetros
- [cubrid\_next\_result()](function.cubrid-next-result.md) - Obtém o resultado da próxima consulta quando múltiplas instruções SQL estão sendo executadas
- [cubrid\_close\_request()](function.cubrid-close-request.md) - Fecha o identificador de requisição
- [cubrid\_commit()](function.cubrid-commit.md) - Confirma uma transação
- [cubrid\_rollback()](function.cubrid-rollback.md) - Reverte uma transação

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
