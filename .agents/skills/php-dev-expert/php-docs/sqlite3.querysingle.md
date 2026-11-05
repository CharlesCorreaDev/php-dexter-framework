# Executa uma consulta e retorna um único resultado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/sqlite3.querysingle.php

---

# SQLite3::querySingle

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

SQLite3::querySingle — Executa uma consulta e retorna um único resultado

### Descrição

public function **SQLite3::querySingle**([string](language.types.string.md) `$query`, [bool](language.types.boolean.md) `$entireRow` = **`false`**): [mixed](language.types.mixed.md)

Executa uma consulta e retorna um único resultado.

### Parâmetros

`query`
:   A consulta SQL a ser executada.

`entireRow`
:   Por padrão, **querySingle()** retorna o valor da
    primeira coluna retornada pela consulta. Se
    `entireRow` for **`true`**, então ele retorna um array
    da linha inteira.

### Valor Retornado

Retorna o valor da primeira coluna dos resultados ou um array da primeira linha inteira
(se `entireRow` for **`true`**).

Se a consulta for válida mas nenhum resultado for retornado, então **`null`** será
retornado se `entireRow` for **`false`**, caso contrário um
array vazio é retornado.

Consultas inválidas ou falhadas retornarão **`false`**.

### Examples

**Exemplo #1 Exemplo de **SQLite3::querySingle()****

```
<?php
$db = new SQLite3('mysqlitedb.db');

var_dump($db->querySingle('SELECT username FROM user WHERE userid=1'));
print_r($db->querySingle('SELECT username, email FROM user WHERE userid=1', true));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(5) "Scott"
Array
(
    [username] => Scott
    [email] => scott@example.com
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
