# Registra uma função PHP para uso como uma função de comparação de SQL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/sqlite3.createcollation.php

---

# SQLite3::createCollation

(PHP 5 >= 5.3.11, PHP 7, PHP 8)

SQLite3::createCollation — Registra uma função PHP para uso como uma função de comparação de SQL

### Descrição

public function **SQLite3::createCollation**([string](language.types.string.md) `$name`, [callable](language.types.callable.md) `$callback`): [bool](language.types.boolean.md)

Registra uma função PHP ou função definida pelo usuário para uso como uma função de comparação
dentro de instruções SQL.

### Parâmetros

`name`
:   Nome da função de comparação de SQL a ser criada ou redefinida

`callback`
:   O nome de uma função PHP ou função definida pelo usuário para aplicar como um
    callback, definindo o comportamento da comparação. Ela deve aceitar dois
    valores e retornar como [strcmp()](function.strcmp.md) faz, ou seja, deve
    retornar -1, 1 ou 0 se a primeira string ordena antes, ordena depois ou é
    igual à segunda.

    Esta função precisa ser definida como:

    function collation([mixed](language.types.mixed.md) `$value1`, [mixed](language.types.mixed.md) `$value2`): [int](language.types.integer.md)

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **SQLite3::createCollation()****

Registre a função PHP [strnatcmp()](function.strnatcmp.md) como uma sequência de comparação
no banco de dados SQLite3.

```
<?php

$db = new SQLite3(":memory:");
$db->exec("CREATE TABLE test (col1 string)");
$db->exec("INSERT INTO test VALUES ('a1')");
$db->exec("INSERT INTO test VALUES ('a10')");
$db->exec("INSERT INTO test VALUES ('a2')");

$db->createCollation('NATURAL_CMP', 'strnatcmp');

$defaultSort = $db->query("SELECT col1 FROM test ORDER BY col1");
$naturalSort = $db->query("SELECT col1 FROM test ORDER BY col1 COLLATE NATURAL_CMP");

echo "default:\n";
while ($row = $defaultSort->fetchArray()){
    echo $row['col1'], "\n";
}

echo "\nnatural:\n";
while ($row = $naturalSort->fetchArray()){
    echo $row['col1'], "\n";
}

$db->close();

?>
```

O exemplo acima produzirá:

```
default:
a1
a10
a2

natural:
a1
a2
a10
```

### Veja também

- A documentação de comparação SQLite: [» https://sqlite.org/datatype3.html#collation](https://sqlite.org/datatype3.html#collation)

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
