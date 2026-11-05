# Define os parâmetros do banco de dados CUBRID

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-set-db-parameter.php

---

# cubrid\_set\_db\_parameter

(PECL CUBRID >= 8.4.0)

cubrid\_set\_db\_parameter — Define os parâmetros do banco de dados CUBRID

### Descrição

function **cubrid\_set\_db\_parameter**([resource](language.types.resource.md) `$conn_identifier`, [int](language.types.integer.md) `$param_type`, [int](language.types.integer.md) `$param_value`): [bool](language.types.boolean.md)

A função **cubrid\_set\_db\_parameter()** é usada para definir
os parâmetros do banco de dados CUBRID. Ela pode definir os seguintes
parâmetros:

- **`PARAM_ISOLATION_LEVEL`**
- **`PARAM_LOCK_TIMEOUT`**

> **Nota**:
>
> O modo de auto-confirmação pode ser definido usando-se
> [cubrid\_set\_autocommit()](function.cubrid-set-autocommit.md).

### Parâmetros

`conn_identifier`
:   O indentificador de conexão CUBRID. Se não for especificado,
    a última conexão aberta por [cubrid\_connect()](function.cubrid-connect.md) será usada.

`param_type`
:   Tipo do parâmetro do banco de dados.

`param_value`
:   Nível de isolamento (1 a 6) ou tempo limite de trava (em segundos).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de [cubrid\_get\_db\_parameter()](function.cubrid-get-db-parameter.md)**

```
<?php
$conn = cubrid_connect("localhost", 33000, "demodb", "dba");

$params = cubrid_get_db_parameter($conn);
var_dump($params);

cubrid_set_autocommit($conn, CUBRID_AUTOCOMMIT_TRUE);
cubrid_set_db_parameter($conn, CUBRID_PARAM_ISOLATION_LEVEL, 2);

$params_new = cubrid_get_db_parameter($conn);
var_dump($params_new);

cubrid_disconnect($conn);
?>
```

O exemplo acima produzirá:

```
array(4) {
  ["PARAM_ISOLATION_LEVEL"]=>
  int(3)
  ["PARAM_LOCK_TIMEOUT"]=>
  int(-1)
  ["PARAM_MAX_STRING_LENGTH"]=>
  int(1073741823)
  ["PARAM_AUTO_COMMIT"]=>
  int(0)
}
array(4) {
  ["PARAM_ISOLATION_LEVEL"]=>
  int(2)
  ["PARAM_LOCK_TIMEOUT"]=>
  int(-1)
  ["PARAM_MAX_STRING_LENGTH"]=>
  int(1073741823)
  ["PARAM_AUTO_COMMIT"]=>
  int(1)
}
```

### Veja também

- [cubrid\_get\_db\_parameter()](function.cubrid-get-db-parameter.md) - Retorna os parâmetros do banco de dados CUBRID
- [cubrid\_set\_autocommit()](function.cubrid-set-autocommit.md) - Define o modo de auto-confirmação da conexão

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
