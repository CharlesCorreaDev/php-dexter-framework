# Cria um objeto LOB

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-lob2-new.php

---

# cubrid\_lob2\_new

(PECL CUBRID >= 8.4.1)

cubrid\_lob2\_new — Cria um objeto LOB

### Descrição

function **cubrid\_lob2\_new**([resource](language.types.resource.md) `$conn_identifier` = ?, [string](language.types.string.md) `$type` = "BLOB"): [resource](language.types.resource.md)

A função **cubrid\_lob2\_new()** é usada para criar um objeto LOB (BLOB e CLOB).
Esta função deve ser usada antes de vincular um objeto LOB.

### Parâmetros

`conn_identifier`
:   Identificador da conexão. Se não for especificado,
    a última conexão aberta por [cubrid\_connect()](function.cubrid-connect.md) ou
    [cubrid\_connect\_with\_url()](function.cubrid-connect-with-url.md) será usada.

`type`
:   Pode ser "BLOB" ou "CLOB", sem distinção entre maiúsculas e minúsculas. O padrão é "BLOB".

### Valor Retornado

Identificador LOB em caso de sucesso, ou **`false`** em caso de falha.

### Veja também

- [cubrid\_lob2\_close()](function.cubrid-lob2-close.md) - Fecha objeto LOB

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
