# Escreve em um objeto LOB

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-lob2-write.php

---

# cubrid\_lob2\_write

(PECL CUBRID >= 8.4.1)

cubrid\_lob2\_write — Escreve em um objeto LOB

### Descrição

function **cubrid\_lob2\_write**([resource](language.types.resource.md) `$lob_identifier`, [string](language.types.string.md) `$buf`): [bool](language.types.boolean.md)

A função **cubrid\_lob2\_write()** lê dados de
`buf` e armazena-os no objeto LOB. Observe que por enquanto
esta função consegue apenas adicionar caracteres.

### Parâmetros

`lob_identifier`
:   Identificador LOB como um resultado de [cubrid\_lob2\_new()](function.cubrid-lob2-new.md) ou obtido do conjunto de resultados.

`buf`
:   Dados que serão escritos no objeto LOB.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo 1 de **cubrid\_lob2\_write()****

```
<?php
// test_lob (id INT, contents CLOB)

$conn = cubrid_connect("localhost", 33000, "demodb", "dba", "");

cubrid_execute($conn,"DROP TABLE if exists test_lob");
cubrid_execute($conn,"CREATE TABLE test_lob (id INT, contents CLOB)");

$req = cubrid_prepare($conn, "INSERT INTO test_lob VALUES(2, ?)");

$lob = cubrid_lob2_new($conn, 'CLOB');
$len = cubrid_lob2_write($lob, "Olá mundo");

cubrid_lob2_bind($req, 1, $lob);
cubrid_execute($req);

cubrid_disconnect($conn);
?>
```

**Exemplo #2 Exemplo 2 de **cubrid\_lob2\_write()****

```
<?php
// test_lob (id INT, contents CLOB)

$conn = cubrid_connect("localhost", 33000, "demodb", "dba", "");

cubrid_execute($conn,"DROP TABLE if exists test_lob");
cubrid_execute($conn,"CREATE TABLE test_lob (id INT, contents CLOB)");

$req = cubrid_prepare($conn, "INSERT INTO test_lob VALUES(1, ?)");
$lob1 = cubrid_lob2_new($conn, 'CLOB');
$len = cubrid_lob2_write($lob1, "cubrid php driver");
cubrid_lob2_bind($req, 1, $lob1);
cubrid_execute($req);

$req = cubrid_execute($conn, "select * from test_lob");

$row = cubrid_fetch_row($req, CUBRID_LOB);
$lob2 = $row[1];
cubrid_lob2_seek($lob2, 0, CUBRID_CURSOR_LAST);

$pos = cubrid_lob2_tell($lob2);
print "pos antes da escrita: $pos\n";

cubrid_lob2_write($lob2, "Olá mundo");

$pos = cubrid_lob2_tell($lob2);
print "pos após a escrita: $pos\n";

cubrid_disconnect($conn);
?>
```

### Veja também

- [cubrid\_lob2\_read()](function.cubrid-lob2-read.md) - Lê bytes de dados BLOB/CLOB
- [cubrid\_lob2\_seek()](function.cubrid-lob2-seek.md) - Move o cursor de um objeto LOB
- [cubrid\_lob2\_seek64()](function.cubrid-lob2-seek64.md) - Move o cursor de um objeto LOB
- [cubrid\_lob2\_tell()](function.cubrid-lob2-tell.md) - Informa a posição do cursor do objeto LOB
- [cubrid\_lob2\_tell64()](function.cubrid-lob2-tell64.md) - Informa a posição do cursor do objeto LOB
- [cubrid\_lob2\_size()](function.cubrid-lob2-size.md) - Obtém o tamanho do objeto LOB
- [cubrid\_lob2\_size64()](function.cubrid-lob2-size64.md) - Obtém o tamanho do objeto LOB

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
