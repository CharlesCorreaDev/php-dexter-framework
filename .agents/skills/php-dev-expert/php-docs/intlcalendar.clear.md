# Limpa um campo ou todos os campos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlcalendar.clear.php

---

# IntlCalendar::clear

(PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1)

IntlCalendar::clear — Limpa um campo ou todos os campos

### Descrição

Estilo orientado a objetos

public function **IntlCalendar::clear**([?](language.types.null.md)[int](language.types.integer.md) `$field` = **`null`**): [true](language.types.singleton.md)

Estilo procedural

function **intlcal\_clear**([IntlCalendar](class.intlcalendar.md) `$calendar`, [?](language.types.null.md)[int](language.types.integer.md) `$field` = **`null`**): [true](language.types.singleton.md)

Limpa todos os campos ou um campo específico. Um campo limpo é
marcado como indefinido, dando a ele a menor prioridade em relação a campos sobrepostos ou
mesmo a valores padrões ao calcular o instante de tempo. Adicionalmente, seu valor é definido
para `0`, embora devido à baixa prioridade do campo, seu valor poderá
ter sido definido internamente para outro valor no momento que o campo tenha terminado
de ser consultado.

### Parâmetros

`calendar`
:   Uma instância de [IntlCalendar](class.intlcalendar.md).

`field`
:   Uma das [constantes de campo](class.intlcalendar.md#intlcalendar.constants)
    de data/horário da classe [IntlCalendar](class.intlcalendar.md). São valores inteiros
    entre `0` e
    **`IntlCalendar::FIELD_COUNT`**.

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.2.0 | O tipo do retorno agora é **`true`**; anteriormente, era [bool](language.types.boolean.md). |

### Examples

**Exemplo #1 Exemplos de **IntlCalendar::clear()****

```
<?php
ini_set('intl.default_locale', 'es_ES');
ini_set('date.timezone', 'UTC');

$fields = array(
    'FIELD_ERA'                  => 0,
    'FIELD_YEAR'                 => 1,
    'FIELD_MONTH'                => 2,
    'FIELD_WEEK_OF_YEAR'         => 3,
    'FIELD_WEEK_OF_MONTH'        => 4,
    'FIELD_DATE'                 => 5,
    'FIELD_DAY_OF_YEAR'          => 6,
    'FIELD_DAY_OF_WEEK'          => 7,
    'FIELD_DAY_OF_WEEK_IN_MONTH' => 8,
    'FIELD_AM_PM'                => 9,
    'FIELD_HOUR'                 => 10,
    'FIELD_HOUR_OF_DAY'          => 11,
    'FIELD_MINUTE'               => 12,
    'FIELD_SECOND'               => 13,
    'FIELD_MILLISECOND'          => 14,
    'FIELD_ZONE_OFFSET'          => 15,
    'FIELD_DST_OFFSET'           => 16,
    'FIELD_YEAR_WOY'             => 17,
    'FIELD_DOW_LOCAL'            => 18,
    'FIELD_EXTENDED_YEAR'        => 19,
    'FIELD_JULIAN_DAY'           => 20,
    'FIELD_MILLISECONDS_IN_DAY'  => 21,
    'FIELD_IS_LEAP_MONTH'        => 22,
    'FIELD_FIELD_COUNT'          => 23,
);
function getSetFields(IntlCalendar $cal) {
    global $fields;
    $ret = array();
    foreach ($fields as $name => $value) {
        if ($cal->isSet($value)) {
            $ret[] = $name;
        }
    }
    return $ret;
}

$cal = new IntlGregorianCalendar(2013, 2 /* março */, 15);
echo "Depois da criação do calendário gregoriano\n";
print_r(getSetFields($cal));
echo "\n";

echo IntlDateFormatter::formatObject($cal), "\n";
echo "Depois do formatador requisitar o ano estendido\n";
print_r(getSetFields($cal));
echo "\n";

$cal->clear(IntlCalendar::FIELD_YEAR);
echo "Depois do ano ter sido limpo, a data fica a mesma\n";
echo IntlDateFormatter::formatObject($cal), "\n";
echo "porque FIELD_EXTENDED_YEAR ainda está definida\n";
print_r(getSetFields($cal));
echo "\n";

var_dump($cal->clear(IntlCalendar::FIELD_EXTENDED_YEAR));
echo "Depois que o ano estendido foi limpo\n";
print_r(getSetFields($cal));
echo IntlDateFormatter::formatObject($cal), "\n";
echo "\n";

echo "Depois que os campos são recalculados,\n"
        . " o ano estendido é definido novamente (para 1970)\n";
print_r(getSetFields($cal));
echo "\n";

$cal->clear();
echo "Depois de chamar a variante sem argumentos\n";
print_r(getSetFields($cal));
echo IntlDateFormatter::formatObject($cal), "\n";
```

O exemplo acima produzirá:

```
Depois da criação do calendário gregoriano
Array
(
    [0] => FIELD_ERA
    [1] => FIELD_YEAR
    [2] => FIELD_MONTH
    [3] => FIELD_DATE
)

15/03/2013 00:00:00
Depois do formatador requisitar o ano estendido
Array
(
    [0] => FIELD_ERA
    [1] => FIELD_YEAR
    [2] => FIELD_MONTH
    [3] => FIELD_DATE
    [4] => FIELD_EXTENDED_YEAR
)

Depois do ano ter sido limpo, a data fica a mesma
15/03/2013 00:00:00
porque FIELD_EXTENDED_YEAR ainda está definida
Array
(
    [0] => FIELD_ERA
    [1] => FIELD_MONTH
    [2] => FIELD_DATE
    [3] => FIELD_EXTENDED_YEAR
)

bool(true)
Depois que o ano estendido foi limpo
Array
(
    [0] => FIELD_ERA
    [1] => FIELD_MONTH
    [2] => FIELD_DATE
)
15/03/1970 00:00:00

Depois que os campos são recalculados,
 o ano estendido é definido novamente (para 1970)
Array
(
    [0] => FIELD_ERA
    [1] => FIELD_MONTH
    [2] => FIELD_DATE
    [3] => FIELD_EXTENDED_YEAR
)

Depois de chamar a variante sem argumentos
Array
(
)
01/01/1970 00:00:00
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
