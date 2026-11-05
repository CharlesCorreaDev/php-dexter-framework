# Fecha os dados BLOB/CLOB

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-lob-close.php

---

# cubrid\_lob\_close

(PECL CUBRID >= 8.3.1)

cubrid\_lob\_close — Fecha os dados BLOB/CLOB

### Descrição

function **cubrid\_lob\_close**([array](language.types.array.md) `$lob_identifier_array`): [bool](language.types.boolean.md)

A função **cubrid\_lob\_close()** é usada para fechar todos os BLOBs/CLOBs
retornados por [cubrid\_lob\_get()](function.cubrid-lob-get.md).

### Parâmetros

`lob_identifier_array`
:   Array identificador de LOB retornado por [cubrid\_lob\_get()](function.cubrid-lob-get.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **cubrid\_lob\_close()****

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

- [cubrid\_lob\_get()](function.cubrid-lob-get.md) - Obtém dados BLOB/CLOB
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
