# Obtém o SQL da instrução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/sqlite3stmt.getsql.php

---

# SQLite3Stmt::getSQL

(PHP 7 >= 7.4.0, PHP 8)

SQLite3Stmt::getSQL — Obtém o SQL da instrução

### Descrição

public function **SQLite3Stmt::getSQL**([bool](language.types.boolean.md) `$expand` = **`false`**): [string](language.types.string.md)|[false](language.types.singleton.md)

Recupera o SQL da instrução preparada. Se `expand` for
**`false`**, o SQL não modificado é recuperado. Se `expand`
for **`true`**, todos os parâmetros da consulta são substituídos por seus valores
vinculados, ou por um SQL `NULL`, se ainda não estiverem vinculados.

### Parâmetros

`expand`
:   Se deseja recuperar o SQL expandido. Passar **`true`** só é suportado a partir
    do libsqlite 3.14.

### Valor Retornado

Retorna o SQL da instrução preparada, ou **`false`** em caso de falha.

### Erros/Exceções

Se `expand` for **`true`**, mas a versão do libsqlite for inferior
a 3.14, um erro de nível **`E_WARNING`** ou uma [Exception](class.exception.md)
é emitido, de acordo com [SQLite3::enableExceptions()](sqlite3.enableexceptions.md).

### Examples

**Exemplo #1 Inspeção do SQL expandido**

```
<?php
$db = new SQLite3(':memory:');
$stmt = $db->prepare("SELECT :a, ?, :c");
$stmt->bindValue(':a', 'foo');
$answer = 42;
$stmt->bindParam(2, $answer);
var_dump($stmt->getSQL(true));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(24) "SELECT 'foo', '42', NULL"
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
