# Lê dados BLOB/CLOB e envia direto ao navegador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-lob-send.php

---

# cubrid\_lob\_send

(PECL CUBRID >= 8.3.1)

cubrid\_lob\_send — Lê dados BLOB/CLOB e envia direto ao navegador

### Descrição

function **cubrid\_lob\_send**([resource](language.types.resource.md) `$conn_identifier`, [resource](language.types.resource.md) `$lob_identifier`): [bool](language.types.boolean.md)

**cubrid\_lob\_send()** lê dados BLOB/CLOB e envia-o direto ao navegador.
Para usar esta função é necessário usar primeiro [cubrid\_lob\_get()](function.cubrid-lob-get.md) para obter informação do BLOB/CLOB do CUBRID.

### Parâmetros

`conn_identifier`
:   Identificador da conexão.

`lob_identifier`
:   Identificador do LOB.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **cubrid\_lob\_send()****

```
<?php
$conn = cubrid_connect ("localhost", 33000, "demodb", "dba");

cubrid_execute($conn,"DROP TABLE if exists doc");
cubrid_execute($conn,"CREATE TABLE doc (id INT, doc_content CLOB)");
cubrid_execute($conn,"INSERT INTO doc VALUES (5,'hello,cubrid')");

$lobs = cubrid_lob_get($conn, "SELECT doc_content FROM doc WHERE id=5");

cubrid_lob_send($conn, $lobs[0]);
cubrid_lob_close($lobs);
cubrid_disconnect($conn);
?>
```

### Veja também

- [cubrid\_lob\_get()](function.cubrid-lob-get.md) - Obtém dados BLOB/CLOB
- [cubrid\_lob\_close()](function.cubrid-lob-close.md) - Fecha os dados BLOB/CLOB
- [cubrid\_lob\_size()](function.cubrid-lob-size.md) - Obtém o tamanho dos dados BLOB/CLOB
- [cubrid\_lob\_export()](function.cubrid-lob-export.md) - Exporta dados BLOB/CLOB para um arquivo

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
