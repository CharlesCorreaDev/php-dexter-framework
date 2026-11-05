# Abre um banco de dados SQLite

> **Fonte / Source:** https://www.php.net/manual/pt_BR/sqlite3.open.php

---

# SQLite3::open

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

SQLite3::open — Abre um banco de dados SQLite

### Descrição

public function **SQLite3::open**([string](language.types.string.md) `$filename`, [int](language.types.integer.md) `$flags` = SQLITE3\_OPEN\_READWRITE | SQLITE3\_OPEN\_CREATE, [string](language.types.string.md) `$encryptionKey` = ""): [void](language.types.void.md)

Abre um banco de dados SQLite 3. Se a compilação incluir criptografia, então
tentará usar a chave.

### Parâmetros

`filename`
:   Caminho para o banco de dados SQLite, ou `:memory:` para usar um banco de dados em memória.

`flags`
:   Sinalizadores opcionais usados para determinar como abrir o banco de dados SQLite. Por
    padrão, o método open usa `SQLITE3_OPEN_READWRITE | SQLITE3_OPEN_CREATE`.

    - **`SQLITE3_OPEN_READONLY`**: Abre o banco de dados somente
      para leitura.
    - **`SQLITE3_OPEN_READWRITE`**: Abre o banco de dados para
      leitura e escrita.
    - **`SQLITE3_OPEN_CREATE`**: Cria o banco de dados se ele
      não existir.

`encryptionKey`
:   Uma chave de criptografia opcional usada ao criptografar e descriptografar um
    banco de dados SQLite. Se o módulo de criptografia SQLite não estiver instalado,
    este parâmetro não terá efeito.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **SQLite3::open()****

```
<?php
/**
 * Exemplo simples de extensão da classe SQLite3 e mudança dos parâmetros __construct,
 * e então usando o método open para inicializar o DB.
 */
class MyDB extends SQLite3
{
    function __construct()
    {
        $this->open('mysqlitedb.db');
    }
}

$db = new MyDB();

$db->exec('CREATE TABLE foo (bar STRING)');
$db->exec("INSERT INTO foo (bar) VALUES ('Isto é um teste')");

$result = $db->query('SELECT bar FROM foo');
var_dump($result->fetchArray());
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
