# Obtém o nome do banco de dados dos resultados de cubrid_list_dbs

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-db-name.php

---

# cubrid\_db\_name

(PECL CUBRID >= 8.3.1)

cubrid\_db\_name — Obtém o nome do banco de dados dos resultados de cubrid\_list\_dbs

### Descrição

function **cubrid\_db\_name**([array](language.types.array.md) `$result`, [int](language.types.integer.md) `$index`): [string](language.types.string.md)

Recupera o nome do banco de dados a partir de uma chamada a [cubrid\_list\_dbs()](function.cubrid-list-dbs.md).

### Parâmetros

`result`
:   O ponteiro de resultado de uma chamada a [cubrid\_list\_dbs()](function.cubrid-list-dbs.md).

`index`
:   O índice no conjunto de resultados.

### Valor Retornado

Retorna o nome do banco de dados em caso de sucesso e **`false`** em caso de falha. Se **`false`**
for retornado, use [cubrid\_error()](function.cubrid-error.md) para determinar a natureza
do erro.

### Examples

**Exemplo #1 Exemplo de **cubrid\_db\_name()****

```
<?php
error_reporting(E_ALL);

$conn = cubrid_connect('localhost', 33000, 'demodb', 'dba', '');
$db_list = cubrid_list_dbs($conn);

$i = 0;
$cnt = count($db_list);
while ($i < $cnt) {
    echo cubrid_db_name($db_list, $i) . "\n";
    $i++;
}
?>
```

O exemplo acima produzirá:

```
demodb
```

### Veja também

- [cubrid\_list\_dbs()](function.cubrid-list-dbs.md) - Retorna um array com a lista de todos os bancos de dados CUBRID existentes

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
