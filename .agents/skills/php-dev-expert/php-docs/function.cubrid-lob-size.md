# Obtém o tamanho dos dados BLOB/CLOB

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-lob-size.php

---

# cubrid\_lob\_size

(PECL CUBRID >= 8.3.1)

cubrid\_lob\_size — Obtém o tamanho dos dados BLOB/CLOB

### Descrição

function **cubrid\_lob\_size**([resource](language.types.resource.md) `$lob_identifier`): [string](language.types.string.md)

**cubrid\_lob\_size()** é usada para obter o tamanho dos dados BLOB/CLOB.

### Parâmetros

`lob_identifier`
:   Identificador do LOB.

### Valor Retornado

Uma string representando o tamanho dos dados LOB em caso de sucesso, ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Alterado o tipo de valor de retorno, de int para string. |

### Examples

**Exemplo #1 Exemplo de **cubrid\_lob\_size()****

```
<?php
$lobs = cubrid_lob_get($con, "SELECT doc_content FROM doc WHERE doc_id=5");
echo "Tamanho do documento:".cubrid_lob_size($lobs[0]);
cubrid_lob_export($conn, $lobs[0], "doc_5.txt");
cubrid_lob_close($lobs);
?>
```

### Veja também

- [cubrid\_lob\_get()](function.cubrid-lob-get.md) - Obtém dados BLOB/CLOB
- [cubrid\_lob\_close()](function.cubrid-lob-close.md) - Fecha os dados BLOB/CLOB
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
