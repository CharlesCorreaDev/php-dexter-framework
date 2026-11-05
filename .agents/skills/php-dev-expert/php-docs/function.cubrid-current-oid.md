# Obtém o OID da posição atual do cursor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-current-oid.php

---

# cubrid\_current\_oid

(PECL CUBRID >= 8.3.0)

cubrid\_current\_oid — Obtém o OID da posição atual do cursor

### Descrição

function **cubrid\_current\_oid**([resource](language.types.resource.md) `$req_identifier`): [string](language.types.string.md)

A função **cubrid\_current\_oid()** é usada para obter o
OID da posição atual do cursor no resultado da consulta. Para usar
**cubrid\_current\_oid()**, a consulta executada precisa ser
atualizável e a opção **`CUBRID_INCLUDE_OID`** incluída durante
sua execução.

### Parâmetros

`req_identifier`
:   Identificador de requisição.

### Valor Retornado

OID da posição atual do cursor em caso de sucesso, ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **cubrid\_current\_oid()****

```
<?php
$conn = cubrid_connect("localhost", 33000, "demodb", "dba");

$req = cubrid_execute($conn, "SELECT * FROM code", CUBRID_INCLUDE_OID);
$oid = cubrid_current_oid($req);
$res = cubrid_get($conn, $oid);

print_r($res);

cubrid_disconnect($conn);
?>
```

O exemplo acima produzirá:

```
Array
(
    [s_name] => X
    [f_name] => Mixed
)
```

### Veja também

- [cubrid\_execute()](function.cubrid-execute.md) - Executa uma instrução preparada SQL

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
