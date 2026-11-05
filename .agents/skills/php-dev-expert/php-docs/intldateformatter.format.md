# Formata data/horário como uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intldateformatter.format.php

---

# IntlDateFormatter::format

# datefmt\_format

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

IntlDateFormatter::format -- datefmt\_format — Formata data/horário como uma string

### Descrição

Estilo orientado a objetos

public function **IntlDateFormatter::format**([IntlCalendar](class.intlcalendar.md)|[DateTimeInterface](class.datetimeinterface.md)|[array](language.types.array.md)|[string](language.types.string.md)|[int](language.types.integer.md)|[float](language.types.float.md) `$datetime`): [string](language.types.string.md)|[false](language.types.singleton.md)

Estilo procedural

function **datefmt\_format**([IntlDateFormatter](class.intldateformatter.md) `$formatter`, [IntlCalendar](class.intlcalendar.md)|[DateTimeInterface](class.datetimeinterface.md)|[array](language.types.array.md)|[string](language.types.string.md)|[int](language.types.integer.md)|[float](language.types.float.md) `$datetime`): [string](language.types.string.md)|[false](language.types.singleton.md)

Formata o valor de data/horário como uma string.

### Parâmetros

`formatter`
:   O recurso de formatador de data.

`datetime`
:   O valor a ser formatado. Pode ser um objeto [DateTimeInterface](class.datetimeinterface.md), um
    objeto [IntlCalendar](class.intlcalendar.md), um valor do tipo numeric
    representando um número (possivelmente fracionário) de segundos desde a época ou um
    [array](language.types.array.md) no formato da saída de
    [localtime()](function.localtime.md).

    Se um objeto [DateTime](class.datetime.md) ou
    [IntlCalendar](class.intlcalendar.md) for passado, seu fuso horário não será
    considerado. O objeto será formatado usando o fuso horário configurado pelo
    formatador. Se for desejado usar o fuso horário do objeto a ser formatado,
    [IntlDateFormatter::setTimeZone()](intldateformatter.settimezone.md) deve ser chamada antes
    com o fuso horário do objeto. Alternativamente, a função estática
    [IntlDateFormatter::formatObject()](intldateformatter.formatobject.md) pode ser usada em seu lugar.

### Valor Retornado

A string formatada ou, se ocorrer um erro, **`false`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.1.5 | Suporte para fornecer objetos [DateTimeInterface](class.datetimeinterface.md) ao parâmetro `datetime` foi adicionado. Anteriormente, somente objetos [DateTime](class.datetime.md) eram suportados. |
| PECL intl 3.0.0 | Suporte para fornecer objetos [IntlCalendar](class.intlcalendar.md) ao parâmetro `datetime` foi adicionado. |

### Examples

**Exemplo #1 Exemplo de **datefmt\_format()****

```
<?php
$fmt = datefmt_create(
    'pt_BR',
    IntlDateFormatter::FULL,
    IntlDateFormatter::FULL,
    'America/Sao_Paulo',
    IntlDateFormatter::GREGORIAN
);
echo 'Primeira saída formatada é ' . datefmt_format($fmt, 0);

$fmt = datefmt_create(
    'de-DE',
    IntlDateFormatter::FULL,
    IntlDateFormatter::FULL,
    'America/Sao_Paulo',
    IntlDateFormatter::GREGORIAN
);
echo 'Segunda saída formatada é ' . datefmt_format($fmt, 0);

$fmt = datefmt_create(
    'pt_BR',
    IntlDateFormatter::FULL,
    IntlDateFormatter::FULL,
    'America/Sao_Paulo',
    IntlDateFormatter::GREGORIAN,
    'MM/dd/yyyy'
);
echo 'Primeira saída formatada com modelo é ' . datefmt_format($fmt, 0);

$fmt = datefmt_create(
    'de-DE',
    IntlDateFormatter::FULL,
    IntlDateFormatter::FULL,
    'America/Sao_Paulo',
    IntlDateFormatter::GREGORIAN,
    'MM/dd/yyyy'
);
echo "Segunda saída formatada com modelo é " . datefmt_format($fmt, 0);
?>
```

**Exemplo #2 Exemplo OO**

```
<?php
$fmt = new IntlDateFormatter(
    'pt_BR',
    IntlDateFormatter::FULL,
    IntlDateFormatter::FULL,
    'America/Sao_Paulo',
    IntlDateFormatter::GREGORIAN
);
echo 'Primeira saída formatada é ' . $fmt->format(0), "\n";

$fmt = new IntlDateFormatter(
    'de-DE',
    IntlDateFormatter::FULL,
    IntlDateFormatter::FULL,
    'America/Sao_Paulo',
    IntlDateFormatter::GREGORIAN
);
echo 'Segunda saída formatada é ' . $fmt->format(0), "\n";

$fmt = new IntlDateFormatter(
    'pt_BR',
    IntlDateFormatter::FULL,
    IntlDateFormatter::FULL,
    'America/Sao_Paulo',
    IntlDateFormatter::GREGORIAN,
    'MM/dd/yyyy'
);
echo 'Primeira saída formatada com modelo é ' . $fmt->format(0), "\n";

$fmt = new IntlDateFormatter(
    'de-DE',
    IntlDateFormatter::FULL,
    IntlDateFormatter::FULL,
    'America/Sao_Paulo',
    IntlDateFormatter::GREGORIAN,
    'MM/dd/yyyy'
);
echo 'Segunda saída formatada com modelo é ' . $fmt->format(0), "\n";
?>
```

O exemplo acima produzirá:

```
Primeira saída formatada é quarta-feira, 31 de dezembro de 1969 21:00:00 Horário Padrão de Brasília
Segunda saída formatada é Mittwoch, 31. Dezember 1969 um 21:00:00 Brasília-Normalzeit
Primeira saída formatada com modelo é 12/31/1969
Segunda saída formatada com modelo é 12/31/1969
```

**Exemplo #3 Com objeto [IntlCalendar](class.intlcalendar.md)**

```
<?php
$tz = reset(iterator_to_array(IntlTimeZone::createEnumeration('FR')));
$formatter = IntlDateFormatter::create(
    'fr_FR',
    IntlDateFormatter::FULL,
    IntlDateFormatter::FULL,
    $tz,
    IntlDateFormatter::GREGORIAN
);

$cal = IntlCalendar::createInstance($tz, '@calendar=islamic-civil');
$cal->set(IntlCalendar::FIELD_MONTH, 8); //9º mês, Ramadã
$cal->set(IntlCalendar::FIELD_DAY_OF_MONTH, 1); //1º dia
$cal->clear(IntlCalendar::FIELD_HOUR_OF_DAY);
$cal->clear(IntlCalendar::FIELD_MINUTE);
$cal->clear(IntlCalendar::FIELD_SECOND);
$cal->clear(IntlCalendar::FIELD_MILLISECOND);

echo "Neste ano islâmico, o Ramadã começou/começará em:\n\t",
        $formatter->format($cal), "\n";

//O fuso horário do formatador será o o utilizado:
$formatter->setTimeZone('Asia/Tokyo');
echo "Após alterar o fuso horário:\n\t",
        $formatter->format($cal), "\n";
```

O exemplo acima produzirá:

```
Neste ano islâmico, o Ramadã começou/começará em:
    mardi 9 juillet 2013 19:00:00 heure avancée d’Europe centrale
Após alterar o fuso horário:
    mercredi 10 juillet 2013 02:00:00 heure normale du Japon
```

### Veja também

- [datefmt\_create()](intldateformatter.create.md) - Cria um formatador de data
- [datefmt\_parse()](intldateformatter.parse.md) - Interpreta uma string para uma valor de timestamp
- [datefmt\_get\_error\_code()](intldateformatter.geterrorcode.md) - Obtém o código de erro da última operação
- [datefmt\_get\_error\_message()](intldateformatter.geterrormessage.md) - Obtém a mensagem de erro da última operação
- [datefmt\_format\_object()](intldateformatter.formatobject.md) - Formata um objeto

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
