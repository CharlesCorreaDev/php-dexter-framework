# Copia um banco de dados para outro banco de dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/sqlite3.backup.php

---

# SQLite3::backup

(PHP 7 >= 7.4.0, PHP 8)

SQLite3::backup — Copia um banco de dados para outro banco de dados

### Descrição

public function **SQLite3::backup**([SQLite3](class.sqlite3.md) `$destination`, [string](language.types.string.md) `$sourceDatabase` = "main", [string](language.types.string.md) `$destinationDatabase` = "main"): [bool](language.types.boolean.md)

**SQLite3::backup()** copia o conteúdo de um banco de dados
para outro, sobrescrevendo o conteúdo do banco de dados de destino.
É útil tanto para criar backups de bancos de dados
quanto para copiar bancos de dados em memória para ou de arquivos persistentes.

**Dica**

A partir do SQLite 3.27.0 (2019-02-07), também é possível usar a instrução
`VACUUM INTO 'file.db';` para fazer backup do banco de dados para um novo arquivo.

### Parâmetros

`destination`
:   Uma conexão de banco de dados aberta com [SQLite3::open()](sqlite3.open.md).

`sourceDatabase`
:   O nome do banco de dados é `"main"` para o banco de dados principal,
    `"temp"` para o banco de dados temporário,
    ou o nome especificado após a palavra-chave `AS`
    em uma instrução `ATTACH` para um banco de dados anexado.

`destinationDatabase`
:   Analógico ao `sourceDatabase`
    mas para o `destination`.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Fazer backup de um banco de dados existente**

```
<?php
// $conn é uma conexão a um banco de dados sqlite3 já aberto

$backup = new SQLite3('backup.sqlite');
$conn->backup($backup);
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
