# Obtém um tamanho definido pelo usuário de arquivos LOB com cada invocação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.db2-lob-read.php

---

# db2\_lob\_read

(PECL ibm\_db2 >= 1.6.0)

db2\_lob\_read — 
Obtém um tamanho definido pelo usuário de arquivos LOB com cada invocação

### Descrição

function **db2\_lob\_read**([resource](language.types.resource.md) `$stmt`, [int](language.types.integer.md) `$colnum`, [int](language.types.integer.md) `$length`): [string](language.types.string.md)|[false](language.types.singleton.md)

Use **db2\_lob\_read()** para iterar por uma coluna especificada de
um conjunto de resultados e recuperar um tamanho definido pelo usuário de dados LOB.

### Parâmetros

`stmt`
:   Um recurso `stmt` válido contendo dados LOB.

`colnum`
:   Um número de coluna válido no conjunto de resultados do recurso `stmt`.

`length`
:   O tamanho dos dados LOB a serem recuperados do recurso `stmt`.

### Valor Retornado

Retorna a quantidade de dados que o usuário especifica. Retorna
**`false`** se os dados não puderem ser recuperados.

### Examples

**Exemplo #1 Iterando por diferentes tipos de dados**

```
<?php

/* Parâmetros de conexão do banco de dados */
$db = 'SAMPLE';
$username = 'db2inst1';
$password = 'ibmdb2';

/* Obtém recurso de conexão */
$conn = db2_connect($db,$username,$password);

if ($conn) {
    $drop = 'DROP TABLE clob_stream';
    $result = @db2_exec( $conn, $drop );

    $create = 'CREATE TABLE clob_stream (id INTEGER, my_clob CLOB)';
    $result = db2_exec( $conn, $create );

    $variable = "";
    $stmt = db2_prepare($conn, "INSERT INTO clob_stream (id,my_clob) VALUES (1, ?)");
    $variable = "THIS IS A CLOB TEST. THIS IS A CLOB TEST.";
    db2_bind_param($stmt, 1, "variable", DB2_PARAM_IN);
    db2_execute($stmt);

    $sql = "SELECT id,my_clob FROM clob_stream";
    $result = db2_prepare($conn, $sql);
    db2_execute($result);
    db2_fetch_row($result);
    $i = 0;
    /* Lê dados LOB */
    while ($data = db2_lob_read($result, 2, 6)) {
        echo "Loop $i: $data\n";
        $i = $i + 1;
    }

    $drop = 'DROP TABLE blob_stream';
    $result = @db2_exec( $conn, $drop );

    $create = 'CREATE TABLE blob_stream (id INTEGER, my_blob CLOB)';
    $result = db2_exec( $conn, $create );

    $variable = "";
    $stmt = db2_prepare($conn, "INSERT INTO blob_stream (id,my_blob) VALUES (1, ?)");
    $variable = "THIS IS A BLOB TEST. THIS IS A BLOB TEST.";
    db2_bind_param($stmt, 1, "variable", DB2_PARAM_IN);
    db2_execute($stmt);

    $sql = "SELECT id,my_blob FROM blob_stream";
    $result = db2_prepare($conn, $sql);
    db2_execute($result);
    db2_fetch_row($result);
    $i = 0;
    /* Lê dados LOB */
    while ($data = db2_lob_read($result, 2, 6)) {
        echo "Loop $i: $data\n";
        $i = $i + 1;
    }
} else {
    echo 'sem conexão: ' . db2_conn_errormsg();
}

?>
```

O exemplo acima produzirá:

```
Loop 0: THIS I
Loop 1: S A CL
Loop 2: OB TES
Loop 3: T. THI
Loop 4: S IS A
Loop 5:  CLOB
Loop 6: TEST.
Loop 0: THIS I
Loop 1: S A BL
Loop 2: OB TES
Loop 3: T. THI
Loop 4: S IS A
Loop 5:  BLOB
Loop 6: TEST.
```

### Veja também

- [db2\_bind\_param()](function.db2-bind-param.md) - Vincula uma variável PHP a um parâmetro de instrução SQL
- [db2\_exec()](function.db2-exec.md) - Executa uma instrução SQL diretamente
- [db2\_execute()](function.db2-execute.md) - Executa uma instrução SQL preparada
- [db2\_fetch\_row()](function.db2-fetch-row.md) - Define o ponteiro do conjunto de resultados para a próxima linha ou linha solicitada
- [db2\_prepare()](function.db2-prepare.md) - Prepara uma instrução SQL para ser executada
- [db2\_result()](function.db2-result.md) - Retorna uma única coluna de uma linha no conjunto de resultados

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
