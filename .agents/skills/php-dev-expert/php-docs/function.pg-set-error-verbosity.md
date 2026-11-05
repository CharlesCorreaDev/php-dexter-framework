# Determina o detalhamento das mensagens retornadas por pg_last_error
   e pg_result_error

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-set-error-verbosity.php

---

# pg\_set\_error\_verbosity

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

pg\_set\_error\_verbosity — 
Determina o detalhamento das mensagens retornadas por [pg\_last\_error()](function.pg-last-error.md)
e [pg\_result\_error()](function.pg-result-error.md)

### Descrição

function **pg\_set\_error\_verbosity**([PgSql\Connection](class.pgsql-connection.md) `$connection` = ?, [int](language.types.integer.md) `$verbosity`): [int](language.types.integer.md)|[false](language.types.singleton.md)

Determina o detalhamento das mensagens retornadas por [pg\_last\_error()](function.pg-last-error.md)
e [pg\_result\_error()](function.pg-result-error.md).

**pg\_set\_error\_verbosity()** define o modo de verbosidade, retornando a configuração anterior
da conexão. No modo **`PGSQL_ERRORS_TERSE`**, as mensagens retornadas incluem apenas severidade, texto primário e
posição; isso normalmente caberá em uma única linha. O modo padrão (**`PGSQL_ERRORS_DEFAULT`**)
produz mensagens que incluem o acima, além de quaisquer detalhes, dicas ou campos
de contexto (estes podem abranger várias linhas). O modo **`PGSQL_ERRORS_VERBOSE`** inclui todos os campos
disponíveis. A alteração do detalhamento não afeta as mensagens disponíveis nos
objetos de resultado já existentes, apenas nos criados posteriormente.

### Parâmetros

`connection`
:   Uma instância de [PgSql\Connection](class.pgsql-connection.md).
    Quando o parâmetro `connection` não for especificado, a conexão padrão será usada.
    A conexão padrão é a última conexão feita por [pg\_connect()](function.pg-connect.md)
    ou [pg\_pconnect()](function.pg-pconnect.md).

    **Aviso**

    A partir do PHP 8.1.0, usar a conexão padrão foi descontinuado.

`verbosity`
:   A verbosidade necessária: **`PGSQL_ERRORS_TERSE`**,
    **`PGSQL_ERRORS_DEFAULT`**
    ou **`PGSQL_ERRORS_VERBOSE`**.

### Valor Retornado

O nível de verbosidade anterior: **`PGSQL_ERRORS_TERSE`**,
**`PGSQL_ERRORS_DEFAULT`**
ou **`PGSQL_ERRORS_VERBOSE`** ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `connection` agora espera uma instância de [PgSql\Connection](class.pgsql-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **pg\_set\_error\_verbosity()****

```
<?php
  $dbconn = pg_connect("dbname=publisher") or die("Não foi possível conectar");

  if (!pg_connection_busy($dbconn)) {
      pg_send_query($dbconn, "select * from doesnotexist;");
  }

  pg_set_error_verbosity($dbconn, PGSQL_ERRORS_VERBOSE);
  $res1 = pg_get_result($dbconn);
  echo pg_result_error($res1);
?>
```

### Veja também

- [pg\_last\_error()](function.pg-last-error.md) - Obtém a última string da mensagem de erro de uma conexão
- [pg\_result\_error()](function.pg-result-error.md) - Obtém mensagem de erro associada ao resultado

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
