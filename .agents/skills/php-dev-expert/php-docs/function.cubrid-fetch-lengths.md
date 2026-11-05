# Retorna um array com os comprimentos dos valores de cada campo da linha atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-fetch-lengths.php

---

# cubrid\_fetch\_lengths

(PECL CUBRID >= 8.3.0)

cubrid\_fetch\_lengths — Retorna um array com os comprimentos dos valores de cada campo da linha atual

### Descrição

function **cubrid\_fetch\_lengths**([resource](language.types.resource.md) `$result`): [array](language.types.array.md)

Esta função retorna um array numérico com os comprimentos dos valores de
cada campo da linha atual do conjunto de resultados ou retorna FALSE em
caso de falha.

> **Nota**:
>
> Se o tipo de dados do campo for BLOB/CLOB, seu comprimento deve ser obtido usando
> [cubrid\_lob\_size()](function.cubrid-lob-size.md).

### Parâmetros

`result`
:   `result` vem de uma chamada a [cubrid\_execute()](function.cubrid-execute.md)

### Valor Retornado

Um array numérico em caso de sucesso.

**`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **cubrid\_fetch\_lengths()****

```
<?php
$conn = cubrid_connect("localhost", 33000, "demodb");
$result = cubrid_execute($conn, "SELECT * FROM game WHERE host_year=2004 AND nation_code='AUS' AND medal='G'");

$row = cubrid_fetch_row($result);
print_r($row);

$lens = cubrid_fetch_lengths($result);
print_r($lens);

cubrid_disconnect($conn);
?>
```

O exemplo acima produzirá:

```
Array
(
    [0] => 2004
    [1] => 20085
    [2] => 15118
    [3] => 30134
    [4] => AUS
    [5] => G
    [6] => 2004-8-20
)
Array
(
    [0] => 4
    [1] => 5
    [2] => 5
    [3] => 5
    [4] => 3
    [5] => 1
    [6] => 10
)
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
