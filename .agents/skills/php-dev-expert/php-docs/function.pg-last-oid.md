# Retorna o OID da última linha

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-last-oid.php

---

# pg\_last\_oid

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

pg\_last\_oid — Retorna o OID da última linha

### Descrição

function **pg\_last\_oid**([PgSql\Result](class.pgsql-result.md) `$result`): [string](language.types.string.md)|[int](language.types.integer.md)|[false](language.types.singleton.md)

**pg\_last\_oid()** é usado para recuperar o
OID atribuído a uma linha inserida.

O campo OID tornou-se um campo opcional no PostgreSQL 7.2 e não
estará presente por padrão no PostgreSQL 8.1. Quando o
campo OID não está presente em uma tabela, o programador deve usar
[pg\_result\_status()](function.pg-result-status.md) para verificar se a inserção foi
bem-sucedida.

Para obter o valor de um campo `SERIAL` em uma linha inserida,
é necessário utilizar a função `CURRVAL` do PostgreSQL,
nomeando a sequência cujo último valor é requerido. Se o
nome da sequência for desconhecido, a função `pg_get_serial_sequence`
do PostgreSQL 8.0 é necessária.

O PostgreSQL 8.1 possui uma função `LASTVAL` que retorna
o valor da sequência usada mais recentemente na sessão. Isso evita
a necessidade de nomear completamente a sequência, tabela ou coluna.

> **Nota**:
>
> Esta função costumava ser chamada de **pg\_getlastoid()**.

### Parâmetros

`result`
:   Uma instância de [PgSql\Result](class.pgsql-result.md), retornada por [pg\_query()](function.pg-query.md),
    [pg\_query\_params()](function.pg-query-params.md) ou [pg\_execute()](function.pg-execute.md) (entre outras).

### Valor Retornado

Um [int](language.types.integer.md) ou [string](language.types.string.md) contendo o OID atribuído à linha inserida mais
recentemente na `connection` especificada, ou **`false`** por erro ou
nenhum OID disponível.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `result` agora espera uma instância de [PgSql\Result](class.pgsql-result.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **pg\_last\_oid()****

```
<?php
  // Conecta ao banco de dados
  pg_connect("dbname=mark host=localhost");

  // Cria uma tabela de exemplo
  pg_query("CREATE TABLE test (a INTEGER) WITH OIDS");

  // Insira alguns dados nela
  $res = pg_query("INSERT INTO test VALUES (1)");

  $oid = pg_last_oid($res);
?>
```

### Veja também

- [pg\_query()](function.pg-query.md) - Executa uma consulta
- [pg\_result\_status()](function.pg-result-status.md) - Obtém o status do resultado da consulta

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
