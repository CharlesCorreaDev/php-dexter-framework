# Obtém um objeto de um banco de dados InterBase

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ibase-fetch-object.php

---

# ibase\_fetch\_object

(PHP 5, PHP 7 < 7.4.0)

ibase\_fetch\_object — Obtém um objeto de um banco de dados InterBase

### Descrição

function **ibase\_fetch\_object**([resource](language.types.resource.md) `$result_id`, [int](language.types.integer.md) `$fetch_flag` = 0): [object](language.types.object.md)

Busca uma linha como um pseudoobjeto de um identificador de resultado fornecido.

Chamadas subsequentes para **ibase\_fetch\_object()**
retornam a próxima linha no conjunto de resultados.

### Parâmetros

`result_id`
:   Um identificador de resultado do InterBase obtido por
    [ibase\_query()](function.ibase-query.md) ou [ibase\_execute()](function.ibase-execute.md).

`fetch_flag`
:   `fetch_flag` é uma combinação das constantes
    **`IBASE_TEXT`** e **`IBASE_UNIXTIME`**
    através de operação OR binária. Passar **`IBASE_TEXT`** fará com que esta
    função retorne conteúdos BLOB em vez de IDs BLOB. Passar
    **`IBASE_UNIXTIME`** fará com que esta função retorne
    valores de data/horário como timestamp Unix em vez de strings formatadas.

### Valor Retornado

Retorna um objeto com as informações da próxima linha, ou **`false`** se não houver
mais linhas.

### Examples

**Exemplo #1 Exemplo de **ibase\_fetch\_object()****

```
<?php
$dbh = ibase_connect($host, $username, $password);
$stmt = 'SELECT * FROM tblname';
$sth = ibase_query($dbh, $stmt);
while ($row = ibase_fetch_object($sth)) {
    echo $row->email . "\n";
}
ibase_close($dbh);
?>
```

### Veja também

- [ibase\_fetch\_row()](function.ibase-fetch-row.md) - Busca uma linha de um banco de dados InterBase
- [ibase\_fetch\_assoc()](function.ibase-fetch-assoc.md) - Obtém uma linha de resultado de uma consulta como um array associativo

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
