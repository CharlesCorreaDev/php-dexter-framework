# Busca a próxima linha de uma consulta em buffers internos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.oci-fetch.php

---

# oci\_fetch

(PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0)

oci\_fetch — Busca a próxima linha de uma consulta em buffers internos

### Descrição

function **oci\_fetch**([resource](language.types.resource.md) `$statement`): [bool](language.types.boolean.md)

Busca a próxima linha de uma consulta em buffers internos acessíveis
com [oci\_result()](function.oci-result.md) ou usando variáveis
previamente definidas com [oci\_define\_by\_name()](function.oci-define-by-name.md).

Consulte [oci\_fetch\_array()](function.oci-fetch-array.md) para obter informações gerais
sobre como buscar dados.

### Parâmetros

`statement`
:   Um identificador de declaração OCI8
    válida criada por [oci\_parse()](function.oci-parse.md) e executada
    por [oci\_execute()](function.oci-execute.md) ou um identificador de declaração `REF
    CURSOR`.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** se não houver mais linhas em
`statement`.

### Examples

**Exemplo #1 **oci\_fetch()** com variáveis definidas**

```
<?php

$conn = oci_connect('hr', 'welcome', 'localhost/XE');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$sql = 'SELECT location_id, city FROM locations WHERE location_id < 1200';
$stid = oci_parse($conn, $sql);

// As definições DEVEM ser feitas antes da execução
oci_define_by_name($stid, 'LOCATION_ID', $locid);
oci_define_by_name($stid, 'CITY', $city);

oci_execute($stid);

// Cada busca preenche as variáveis ​​definidas anteriormente com os dados da próxima linha
while (oci_fetch($stid)) {
    echo "Localização ID $locid é $city<br>\n";
}

// Exibe:
//   Localização ID 1000 é Roma
//   Localização ID 1100 é Venice

oci_free_statement($stid);
oci_close($conn);

?>
```

**Exemplo #2 **oci\_fetch()** com [oci\_result()](function.oci-result.md)**

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

### Notas

> **Nota**:
>
> Esta função não retornará linhas de conjuntos de resultados implícitos do Oracle Database.
> Use [oci\_fetch\_array()](function.oci-fetch-array.md) em vez disso.

### Veja também

- [oci\_define\_by\_name()](function.oci-define-by-name.md) - Associa uma variável PHP a uma coluna para buscas de consulta
- [oci\_fetch\_all()](function.oci-fetch-all.md) - Busca várias linhas de uma consulta em um array bidimensional
- [oci\_fetch\_array()](function.oci-fetch-array.md) - Retorna a próxima linha de uma consulta como um array associativo ou numérico
- [oci\_fetch\_assoc()](function.oci-fetch-assoc.md) - Retorna a próxima linha de uma consulta como um array associativo
- [oci\_fetch\_object()](function.oci-fetch-object.md) - Retorna a próxima linha de uma consulta como um objeto
- [oci\_fetch\_row()](function.oci-fetch-row.md) - Retorna a próxima linha de uma consulta como um array numérico
- [oci\_result()](function.oci-result.md) - Retorna o valor do campo da linha recuperada

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
