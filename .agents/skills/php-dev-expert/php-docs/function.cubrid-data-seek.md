# Move o ponteiro de linha interno do resultado CUBRID

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-data-seek.php

---

# cubrid\_data\_seek

(PECL CUBRID >= 8.3.0)

cubrid\_data\_seek — Move o ponteiro de linha interno do resultado CUBRID

### Descrição

function **cubrid\_data\_seek**([resource](language.types.resource.md) `$result`, [int](language.types.integer.md) `$row_number`): [bool](language.types.boolean.md)

Esta função executa a movimentação do ponteiro de linha interno do
resultado CUBRID (associado ao identificador de resultado especificado) para apontar
a um número de linha específico. Existem funções, como
[cubrid\_fetch\_assoc()](function.cubrid-fetch-assoc.md), que usam o valor armazenado
do número da linha atual.

### Parâmetros

`result`
:   O resultado.

`row_number`
:   Este é o número da linha desejada do novo ponteiro de resultado.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **cubrid\_data\_seek()****

```
<?php
$conn = cubrid_connect("127.0.0.1", 33000, "demodb");

$req = cubrid_execute($conn, "SELECT * FROM code");
cubrid_data_seek($req, 0);

$result = cubrid_fetch_row($req);
var_dump($result);

cubrid_data_seek($req, 2);
$result = cubrid_fetch_row($req);
var_dump($result);

cubrid_data_seek($req, 4);
$result = cubrid_fetch_row($req);
var_dump($result);

cubrid_close_request($req);
cubrid_disconnect($conn);
?>
```

O exemplo acima produzirá:

```
array(2) {
  [0]=>
  string(1) "X"
  [1]=>
  string(5) "Mixed"
}
array(2) {
  [0]=>
  string(1) "M"
  [1]=>
  string(3) "Man"
}
array(2) {
  [0]=>
  string(1) "S"
  [1]=>
  string(6) "Silver"
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
