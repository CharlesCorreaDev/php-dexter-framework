# Verifica se  múltiplos resultados estão disponíveis

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.odbc-next-result.php

---

# odbc\_next\_result

(PHP 4 >= 4.0.5, PHP 5, PHP 7, PHP 8)

odbc\_next\_result — Verifica se múltiplos resultados estão disponíveis

### Descrição

function **odbc\_next\_result**([Odbc\Result](class.odbc-result.md) `$statement`): [bool](language.types.boolean.md)

Verifica se há mais resultados disponíveis, dessa forma permitindo acesso
ao próximo resultado via [odbc\_fetch\_array()](function.odbc-fetch-array.md),
[odbc\_fetch\_row()](function.odbc-fetch-row.md), [odbc\_result()](function.odbc-result.md) etc.

### Parâmetros

`statement`
:   O objeto de resultado ODBC.

### Valor Retornado

Retorna **`true`** se houver mais resultados, **`false`** caso contrário.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | `statement` agora espera uma instância de [Odbc\Result](class.odbc-result.md); anteriormente, esperava um [resource](language.types.resource.md). |

### Examples

**Exemplo #1 **odbc\_next\_result()****

```
<?php
$r_Connection = odbc_connect($dsn, $username, $password);

$s_SQL = <<<END_SQL
SELECT 'A'
SELECT 'B'
SELECT 'C'
END_SQL;

$r_Results = odbc_exec($r_Connection, $s_SQL);

$a_Row1 = odbc_fetch_array($r_Results);
$a_Row2 = odbc_fetch_array($r_Results);
echo "Despeja o primeiro conjunto de resultados ";
var_dump($a_Row1, $a_Row2);

echo "Obtém o segundo conjunto de resultados ";
var_dump(odbc_next_result($r_Results));

$a_Row1 = odbc_fetch_array($r_Results);
$a_Row2 = odbc_fetch_array($r_Results);
echo "Despeja o segundo conjunto de resultados ";
var_dump($a_Row1, $a_Row2);

echo "Obtém o terceiro conjunto de resultados ";
var_dump(odbc_next_result($r_Results));

$a_Row1 = odbc_fetch_array($r_Results);
$a_Row2 = odbc_fetch_array($r_Results);
echo "Despeja o terceiro conjunto de resultados ";
var_dump($a_Row1, $a_Row2);

echo "Tenta acessar um quarto conjunto de resultados ";
var_dump(odbc_next_result($r_Results));
?>
```

O exemplo acima produzirá:

```
Despeja o primeiro conjunto de resultados array(1) {
    ["A"]=>
    string(1) "A"
}
bool(false)
Obtém o segundo conjunto de resultados bool(true)
Despeja o segundo conjunto de resultados array(1) {
    ["B"]=>
    string(1) "B"
}
bool(false)
Obtém o terceiro conjunto de resultados bool(true)
Despeja o terceiro conjunto de resultados array(1) {
    ["C"]=>
    string(1) "C"
}
bool(false)
Tenta acessar um quarto conjunto de resultados bool(false)
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
