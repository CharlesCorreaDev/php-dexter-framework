# Exporta o objeto LOB para um arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-lob2-export.php

---

# cubrid\_lob2\_export

(PECL CUBRID >= 8.4.1)

cubrid\_lob2\_export — Exporta o objeto LOB para um arquivo

### Descrição

function **cubrid\_lob2\_export**([resource](language.types.resource.md) `$lob_identifier`, [string](language.types.string.md) `$file_name`): [bool](language.types.boolean.md)

A função **cubrid\_lob2\_export()** é usada para gravar o
conteúdo dos dados BLOB/CLOB em um arquivo. Para usar esta função, é necessário usar
[cubrid\_lob2\_new()](function.cubrid-lob2-new.md) ou buscar primeiro um objeto LOB do banco de
dados CUBRID. Se o arquivo já existir, a operação falhará.
Esta função não influenciará a posição do cursor do objeto LOB.
Ela opera em todo o objeto lob.

### Parâmetros

`lob_identifier`
:   Identificador LOB como um resultado de [cubrid\_lob2\_new()](function.cubrid-lob2-new.md) ou obtido do conjunto de resultados.

`filename`
:   Nome do arquivo no qual os dados BLOB/CLOB serão armazenados. Também suporta o caminho do arquivo.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **cubrid\_lob2\_export()****

```
<?php
// Tabela: test_lob (id INT, contents CLOB)

$conn = cubrid_connect("localhost", 33000, "demodb", "dba", "");

cubrid_execute($conn,"DROP TABLE if exists doc");
cubrid_execute($conn,"CREATE TABLE doc (id INT, doc_content CLOB)");
cubrid_execute($conn,"INSERT INTO doc VALUES (5,'hello,cubrid')");

$req = cubrid_prepare($conn, "select * from doc");

cubrid_execute($req);

cubrid_move_cursor($req, 1, CUBRID_CURSOR_FIRST);

$row = cubrid_fetch($req, CUBRID_NUM | CUBRID_LOB);

cubrid_lob2_export($row[1], "doc_3.txt");

cubrid_lob2_close($row[1]);
cubrid_disconnect($conn);
?>
```

### Veja também

- [cubrid\_lob2\_new()](function.cubrid-lob2-new.md) - Cria um objeto LOB
- [cubrid\_lob2\_close()](function.cubrid-lob2-close.md) - Fecha objeto LOB
- [cubrid\_lob2\_import()](function.cubrid-lob2-import.md) - Importa dados BLOB/CLOB de um arquivo
- [cubrid\_lob2\_bind()](function.cubrid-lob2-bind.md) - Vincula um objeto LOB ou uma string como objeto LOB a uma instrução preparada como parâmetros

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
