# Busca uma linha de resultado no array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.odbc-fetch-into.php

---

# odbc\_fetch\_into

(PHP 4, PHP 5, PHP 7, PHP 8)

odbc\_fetch\_into — Busca uma linha de resultado no array

### Descrição

function **odbc\_fetch\_into**([Odbc\Result](class.odbc-result.md) `$statement`, [array](language.types.array.md) `&$array`, [?](language.types.null.md)[int](language.types.integer.md) `$row` = **`null`**): [int](language.types.integer.md)|[false](language.types.singleton.md)

Busca uma linha de resultado no [array](language.types.array.md).

### Parâmetros

`statement`
:   O objeto de resultado ODBC.

`array`
:   O [array](language.types.array.md) de resultado
    que pode ser de qualquer tipo, pois será convertido para o tipo
    array. O array conterá os valores da coluna começando no índice
    0 do array.

`row`
:   O número da linha a recuperar (base 1). Se omitido ou **`null`**, a
    próxima linha do resultado é buscada, assim como
    [odbc\_fetch\_row()](function.odbc-fetch-row.md) faz. Se o driver não
    suportar a busca de linhas por número, este parâmetro é ignorado.

### Valor Retornado

Retorna o número da coluna no resultado;
**`false`** em caso de erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | `statement` agora espera uma instância de [Odbc\Result](class.odbc-result.md); anteriormente, esperava um [resource](language.types.resource.md). |
| 8.4.0 | `row` agora pode ser nulo e seu valor padrão mudou de `0` para **`null`**, consistente com [odbc\_fetch\_row()](function.odbc-fetch-row.md). |

### Examples

**Exemplo #1 Exemplo de **odbc\_fetch\_into()****

```
<?php
$rc = odbc_fetch_into($res_id, $my_array);
?>
```

ou

```
<?php
$rc = odbc_fetch_into($res_id, $my_array, 2);
?>
```

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
