# Exporta dados BLOB/CLOB para um arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-lob-export.php

---

# cubrid\_lob\_export

(PECL CUBRID >= 8.3.1)

cubrid\_lob\_export — Exporta dados BLOB/CLOB para um arquivo

### Descrição

function **cubrid\_lob\_export**([resource](language.types.resource.md) `$conn_identifier`, [resource](language.types.resource.md) `$lob_identifier`, [string](language.types.string.md) `$path_name`): [bool](language.types.boolean.md)

A função **cubrid\_lob\_export()** é usada para obter dados BLOB/CLOB do banco de dados CUBRID e gravar seu conteúdo para um arquivo.
Para usar esta função, é necessário antes usar [cubrid\_lob\_get()](function.cubrid-lob-get.md) para obter informação BLOB/CLOB do CUBRID.

### Parâmetros

`conn_identifier`
:   Identificador de conexão.

`lob_identifier`
:   Identificador LOB.

`path_name`
:   Caminho do arquivo.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo do **cubrid\_lob\_export()****

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
- [cubrid\_lob\_close()](function.cubrid-lob-close.md) - Fecha os dados BLOB/CLOB
- [cubrid\_lob\_size()](function.cubrid-lob-size.md) - Obtém o tamanho dos dados BLOB/CLOB
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
