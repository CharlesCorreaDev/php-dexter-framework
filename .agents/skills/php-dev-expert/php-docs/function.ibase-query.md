# Executa uma consulta em um banco de dados InterBase

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ibase-query.php

---

# ibase\_query

(PHP 5, PHP 7 < 7.4.0)

ibase\_query — Executa uma consulta em um banco de dados InterBase

### Descrição

function **ibase\_query**([resource](language.types.resource.md) `$link_identifier` = ?, [string](language.types.string.md) `$query`, [int](language.types.integer.md) `$bind_args` = ?): [resource](language.types.resource.md)

Executa uma consulta em um banco de dados InterBase.

### Parâmetros

`link_identifier`
:   Um identificador de conexão InterBase. Se omitido, o da última conexão
    será utilizado.

`query`
:   Uma consulta do InterBase.

`bind_args`

### Valor Retornado

Se houver um erro na consulta, retorna **`false`**. Se ela for bem sucedida e
houver um conjunto de resultados (possivelmente vazio), como o retornado por
uma consulta SELECT, retorna um identificador de resultado. Se a consulta for
bem sucedida e não houver resultado, retorna **`true`**.

> **Nota**:
>
> No PHP 5.0.0 e posterior, esta função irá retornar o número de linhas afetadas
> pela consulta para INSERT, UPDATE e DELETE. Para manter a compatibilidade com
> versões anteriores, irá retornar **`true`** para estas consultas se ela for bem
> sucedida sem afetar nenhuma linha.

### Erros/Exceções

Se você tiver um erro como "arithmetic exception, numeric overflow, or
string truncation. Cannot transliterate character between character sets"
(isto acontece quando você tenta usar alguns caracteres com acentos) ao usar esta
função e depois de **ibase\_query()**, deve-se definir o conjunto de caracteres
(isto é, ISO8859\_1 ou o conjunto de caracteres atual).

### Examples

**Exemplo #1 Exemplo de **ibase\_query()****

```
<?php

$host = 'localhost:/path/to/your.gdb';

$dbh = ibase_connect($host, $username, $password);
$stmt = 'SELECT * FROM tblname';

$sth = ibase_query($dbh, $stmt) or die(ibase_errmsg());

?>
```

### Veja também

- [ibase\_errmsg()](function.ibase-errmsg.md) - Retorna mensagens de erro
- [ibase\_fetch\_row()](function.ibase-fetch-row.md) - Busca uma linha de um banco de dados InterBase
- [ibase\_fetch\_object()](function.ibase-fetch-object.md) - Obtém um objeto de um banco de dados InterBase
- [ibase\_free\_result()](function.ibase-free-result.md) - Libera um conjunto de resultados

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
