# Abre um recurso de fluxo para ler um BLOB

> **Fonte / Source:** https://www.php.net/manual/pt_BR/sqlite3.openblob.php

---

# SQLite3::openBlob

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

SQLite3::openBlob — Abre um recurso de fluxo para ler um BLOB

### Descrição

public function **SQLite3::openBlob**(  
    [string](language.types.string.md) `$table`,  
    [string](language.types.string.md) `$column`,  
    [int](language.types.integer.md) `$rowid`,  
    [string](language.types.string.md) `$database` = "main",  
    [int](language.types.integer.md) `$flags` = **`SQLITE3_OPEN_READONLY`**  
): [resource](language.types.resource.md)|[false](language.types.singleton.md)

Abre um recurso de fluxo para ler ou escrever um BLOB, que seria selecionado por:

SELECT `column` FROM `database`.`table` WHERE rowid = `rowid`

> **Nota**:
>
> Não é possível alterar o tamanho de um BLOB escrevendo no fluxo.
> Em vez disso, uma declaração UPDATE deve ser executada, possivelmente usando a função
> zeroblob() do SQLite para definir o tamanho desejado do BLOB.

### Parâmetros

`table`
:   O nome da tabela.

`column`
:   O nome da coluna.

`rowid`
:   O ID da linha.

`database`
:   O nome simbólico do banco de dados.

`flags`
:   Seja **`SQLITE3_OPEN_READONLY`** ou
    **`SQLITE3_OPEN_READWRITE`** para abrir o fluxo
    somente para leitura ou para leitura e escrita, respectivamente.

### Valor Retornado

Retorna um recurso de fluxo, ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.2.0 | O parâmetro `flags` foi adicionado, permitindo escrever BLOBs; anteriormente, apenas a leitura era suportada. |

### Examples

**Exemplo #1 Exemplo de **SQLite3::openBlob()****

```
<?php
$conn = new SQLite3(':memory:');
$conn->exec('CREATE TABLE test (text text)');
$conn->exec("INSERT INTO test VALUES ('Lorem ipsum')");
$stream = $conn->openBlob('test', 'text', 1);
echo stream_get_contents($stream);
fclose($stream); // obrigatório, caso contrário a próxima linha falharia
$conn->close();
?>
```

O exemplo acima produzirá:

```
Lorem ipsum
```

**Exemplo #2 Escrevendo incrementalmente um BLOB**

```
<?php
$conn = new SQLite3(':memory:');
$conn->exec('CREATE TABLE test (text text)');
$conn->exec("INSERT INTO test VALUES (zeroblob(36))");
$stream = $conn->openBlob('test', 'text', 1, 'main', SQLITE3_OPEN_READWRITE);
for ($i = 0; $i < 3; $i++) {
    fwrite($stream,  "Lorem ipsum\n");
}
fclose($stream);
echo $conn->querySingle("SELECT text FROM test");
$conn->close();
?>
```

O exemplo acima produzirá:

```
Lorem ipsum
Lorem ipsum
Lorem ipsum
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
