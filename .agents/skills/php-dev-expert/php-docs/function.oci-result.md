# Retorna o valor do campo da linha recuperada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.oci-result.php

---

# oci\_result

(PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0)

oci\_result — Retorna o valor do campo da linha recuperada

### Descrição

function **oci\_result**([resource](language.types.resource.md) `$statement`, [string](language.types.string.md)|[int](language.types.integer.md) `$column`): [mixed](language.types.mixed.md)

Retorna os dados da coluna informada em `column` na linha atual,
obtidos por [oci\_fetch()](function.oci-fetch.md).

Para obter detalhes sobre o mapeamento dos tipos de dados realizado pela
extensão OCI8, consulte os [tipos de dados
suportados pelo driver](oci8.datatypes.md).

### Parâmetros

`statement`

`column`
:   Pode ser usado o número da coluna (base 1) ou o nome da coluna.
    A caixa do nome da coluna deve ser a mesma que os metadados do Oracle
    descrevem a coluna, que é maiúscula para colunas criadas
    sem distinção entre maiúsculas e minúsculas.

### Valor Retornado

Retorna tudo como strings, exceto tipos abstratos (ROWIDs, LOBs e
FILEs). Retorna **`false`** em caso de erro.

### Examples

**Exemplo #1 [oci\_fetch()](function.oci-fetch.md) com **oci\_result()****

```
<?php

$conn = oci_connect('hr', 'welcome', 'localhost/XE');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$sql = 'SELECT location_id, city FROM locations WHERE location_id < 1200';
$stid = oci_parse($conn, $sql);
oci_execute($stid);

while (oci_fetch($stid)) {
    echo oci_result($stid, 'LOCATION_ID') . " é ";
    echo oci_result($stid, 'CITY') . "<br>\n";
}

// Exibe:
//   1000 é Roma
//   1100 é Venice

oci_free_statement($stid);
oci_close($conn);

?>
```

### Veja também

- [oci\_fetch\_array()](function.oci-fetch-array.md) - Retorna a próxima linha de uma consulta como um array associativo ou numérico
- [oci\_fetch\_assoc()](function.oci-fetch-assoc.md) - Retorna a próxima linha de uma consulta como um array associativo
- [oci\_fetch\_object()](function.oci-fetch-object.md) - Retorna a próxima linha de uma consulta como um objeto
- [oci\_fetch\_row()](function.oci-fetch-row.md) - Retorna a próxima linha de uma consulta como um array numérico
- [oci\_fetch\_all()](function.oci-fetch-all.md) - Busca várias linhas de uma consulta em um array bidimensional

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
