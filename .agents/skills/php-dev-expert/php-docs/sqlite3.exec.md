# Executa uma consulta sem resultado em um determinado banco de dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/sqlite3.exec.php

---

# SQLite3::exec

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

SQLite3::exec — Executa uma consulta sem resultado em um determinado banco de dados

### Descrição

public function **SQLite3::exec**([string](language.types.string.md) `$query`): [bool](language.types.boolean.md)

Executa uma consulta sem resultado em um determinado banco de dados.

> **Nota**:
>
> O SQLite3 pode precisar criar [» arquivos temporários](https://sqlite.org/tempfiles.html)
> durante a execução de consultas, então os diretórios respectivos podem precisar ter permissão de escrita.

### Parâmetros

`query`
:   A consulta SQL a ser executada (geralmente uma consulta INSERT, UPDATE ou
    DELETE).

### Valor Retornado

Retorna **`true`** se a consulta for bem-sucedida, **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **SQLite3::exec()****

```
<?php
$db = new SQLite3('mysqlitedb.db');

$db->exec('CREATE TABLE bar (bar TEXT)');
?>
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
