# Obtém dados BLOB/CLOB

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-lob-get.php

---

# cubrid\_lob\_get

(PECL CUBRID >= 8.3.1)

cubrid\_lob\_get — Obtém dados BLOB/CLOB

### Descrição

function **cubrid\_lob\_get**([resource](language.types.resource.md) `$conn_identifier`, [string](language.types.string.md) `$sql`): [array](language.types.array.md)

A função **cubrid\_lob\_get()** é usada para obter metainformações de BLOB/CLOB do banco de dados CUBRID.
O CUBRID obtém dados BLOB/CLOB executando a instrução SQL e retornando todos os LOBs como um array de recursos.
Certifique-se que o SQL recupere somente uma coluna e que seu tipo de dados seja BLOB ou CLOB.

Lembre-se de usar [cubrid\_lob\_close()](function.cubrid-lob-close.md) para liberar os LOBs da memória se eles não forem mais necessários.

### Parâmetros

`conn_identifier`
:   Identificador da conexão.

`sql`
:   Instrução SQL a ser executada.

### Valor Retornado

Retorna uma array de recursos LOB em caso de sucesso, ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **cubrid\_lob\_get()****

```
<?php
$conn = cubrid_connect ("localhost", 33000, "demodb", "dba");

cubrid_execute($conn,"DROP TABLE if exists doc");
cubrid_execute($conn,"CREATE TABLE doc (id INT, doc_content CLOB)");
cubrid_execute($conn,"INSERT INTO doc VALUES (5,'hello,cubrid')");

$lobs = cubrid_lob_get($conn, "SELECT doc_content FROM doc WHERE id=5");
echo "Tamanho do documento: ".cubrid_lob_size($lobs[0])." bytes";
cubrid_lob_export($conn, $lobs[0], "doc_5.txt");
cubrid_lob_close($lobs);
cubrid_disconnect($conn);
?>
```

### Veja também

- [cubrid\_lob\_close()](function.cubrid-lob-close.md) - Fecha os dados BLOB/CLOB
- [cubrid\_lob\_size()](function.cubrid-lob-size.md) - Obtém o tamanho dos dados BLOB/CLOB
- [cubrid\_lob\_export()](function.cubrid-lob-export.md) - Exporta dados BLOB/CLOB para um arquivo
- [cubrid\_lob\_send()](function.cubrid-lob-send.md) - Lê dados BLOB/CLOB e envia direto ao navegador

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
