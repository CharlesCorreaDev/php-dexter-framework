# Adiciona escape

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-session.quotename.php

---

# Session::quoteName

(No version information available, might only be in Git)

Session::quoteName — Adiciona escape

### Descrição

public function **mysql\_xdevapi\Session::quoteName**([string](language.types.string.md) `$name`): [string](language.types.string.md)

Uma função para escapar nomes e identificadores SQL. Escapa o identificador
fornecido de acordo com as configurações da conexão atual. Esta função
de escape não deve ser usada para escapar valores.

### Parâmetros

`name`
:   A string a ser escapada.

### Valor Retornado

A string escapada.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\Session::quoteName()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");

$first = "MySQL's test";
var_dump($first);
var_dump($session->quoteName($first));

$second = 'Another `test` "like" `this`';
var_dump($second);
var_dump($session->quoteName($second));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(12) "MySQL's test"
string(14) "`MySQL's test`"

string(28) "Another `test` "like" `this`"
string(34) "`Another ``test`` "like" ``this```"
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
