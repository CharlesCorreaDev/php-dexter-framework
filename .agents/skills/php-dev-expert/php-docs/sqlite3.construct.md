# Instancia um objeto SQLite3 e abre um banco de dados SQLite 3

> **Fonte / Source:** https://www.php.net/manual/pt_BR/sqlite3.construct.php

---

# SQLite3::\_\_construct

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

SQLite3::\_\_construct — 
Instancia um objeto SQLite3 e abre um banco de dados SQLite 3

### Descrição

public function **SQLite3::\_\_construct**([string](language.types.string.md) `$filename`, [int](language.types.integer.md) `$flags` = SQLITE3\_OPEN\_READWRITE | SQLITE3\_OPEN\_CREATE, [string](language.types.string.md) `$encryptionKey` = "")

Instancia um objeto SQLite3 e abre uma conexão com um banco de dados
SQLite 3. Se a compilação incluir criptografia, ele tentará
usar a chave.

### Parâmetros

`filename`
:   Caminho para o banco de dados SQLite, ou `:memory:` para usar um banco de dados em memória.
    Se `filename` for uma string vazia, então um banco de dados privado, temporário no disco
    será criado. Este banco de dados privado será automaticamente
    excluído assim que a conexão com o banco de dados for fechada.

`flags`
:   Flags opcionais usadas para determinar como abrir o banco de dados SQLite. Por
    padrão, abre usando `SQLITE3_OPEN_READWRITE | SQLITE3_OPEN_CREATE`.

    - **`SQLITE3_OPEN_READONLY`**: Abre o banco de dados apenas para
      leitura.
    - **`SQLITE3_OPEN_READWRITE`**: Abre o banco de dados para
      leitura e escrita.
    - **`SQLITE3_OPEN_CREATE`**: Cria o banco de dados se ele
      não existir.

`encryptionKey`
:   Uma chave de criptografia opcional usada ao criptografar e descriptografar um
    banco de dados SQLite. Se o módulo de criptografia SQLite não estiver instalado,
    este parâmetro não terá efeito.

### Erros/Exceções

Lança uma [Exception](class.exception.md) em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.0.10 | O `filename` agora pode estar vazio para usar um banco de dados privado, temporário no disco. |

### Examples

**Exemplo #1 Exemplo de **SQLite3::\_\_construct()****

```
<?php
$db = new SQLite3('mysqlitedb.db');

$db->exec('CREATE TABLE foo (bar TEXT)');
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
