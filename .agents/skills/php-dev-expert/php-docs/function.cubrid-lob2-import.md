# Importa dados BLOB/CLOB de um arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-lob2-import.php

---

# cubrid\_lob2\_import

(PECL CUBRID >= 8.4.1)

cubrid\_lob2\_import — Importa dados BLOB/CLOB de um arquivo

### Descrição

function **cubrid\_lob2\_import**([resource](language.types.resource.md) `$lob_identifier`, [string](language.types.string.md) `$file_name`): [bool](language.types.boolean.md)

A função **cubrid\_lob2\_import()** é usada para obter o
conteúdo dos dados BLOB/CLOB de um arquivo. Para usar esta função, é necessário primeiro usar a função
[cubrid\_lob2\_new()](function.cubrid-lob2-new.md) ou buscar um objeto LOB do banco de dados
CUBRID. Se o arquivo não existir, a operação falhará.
Esta função não influenciará a posição do cursor do objeto LOB.
Ela opera em todo o objeto LOB.

### Parâmetros

`lob_identifier`
:   Identificador LOB como um resultado de [cubrid\_lob2\_new()](function.cubrid-lob2-new.md) ou obtido do conjunto de resultados.

`filename`
:   Nome do arquivo do qual os dados BLOB/CLOB serão importados. Também suporta o caminho do arquivo.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de [cubrid\_lob2\_export()](function.cubrid-lob2-export.md)**

```
<?php

$conn = cubrid_connect("localhost", 33000, "demodb", "dba", "");

cubrid_execute($conn,"DROP TABLE if exists test_lob");
cubrid_execute($conn,"CREATE TABLE test_lob (id INT, contents CLOB)");

$req = cubrid_prepare($conn, "INSERT INTO test_lob VALUES (?, ?)");
cubrid_bind($req, 1, 1);

$lob = cubrid_lob2_new($conn, "clob");
cubrid_lob2_import($lob, "doc_1.txt");
cubrid_lob2_bind($req, 2, $lob, 'CLOB'); // ou cubrid_lob2_bind($req, 2, $lob);

cubrid_execute($req);

cubrid_lob2_close($lob);
cubrid_disconnect($conn);
?>
```

### Veja também

- [cubrid\_lob2\_new()](function.cubrid-lob2-new.md) - Cria um objeto LOB
- [cubrid\_lob2\_close()](function.cubrid-lob2-close.md) - Fecha objeto LOB
- [cubrid\_lob2\_export()](function.cubrid-lob2-export.md) - Exporta o objeto LOB para um arquivo
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
