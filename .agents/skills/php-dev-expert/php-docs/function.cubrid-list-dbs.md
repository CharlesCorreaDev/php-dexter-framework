# Retorna um array com a lista de todos os bancos de dados CUBRID existentes

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-list-dbs.php

---

# cubrid\_list\_dbs

(PECL CUBRID >= 8.3.0)

cubrid\_list\_dbs — Retorna um array com a lista de todos os bancos de dados CUBRID existentes

### Descrição

function **cubrid\_list\_dbs**([resource](language.types.resource.md) `$conn_identifier` = ?): [array](language.types.array.md)

Esta função retorna um array com a lista de todos os bancos de dados CUBRID
existentes.

### Parâmetros

`conn_identifier`
:   A conexão CUBRID.

### Valor Retornado

Um array numérico com todos os bancos de dados CUBRID existentes em caso de sucesso.

**`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **cubrid\_list\_dbs()****

```
<?php
$conn = cubrid_connect("localhost", 33000, "demodb");

$db_list = cubrid_list_dbs($conn);
var_dump($db_list);

cubrid_disconnect($conn);
?>
```

O exemplo acima produzirá:

```
array(1) {
  [0]=>
  string(6) "demodb"
}
```

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
