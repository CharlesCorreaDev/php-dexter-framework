# Cria um novo IntlCalendar

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlcalendar.createinstance.php

---

# IntlCalendar::createInstance

(PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1)

IntlCalendar::createInstance — Cria um novo IntlCalendar

### Descrição

Estilo orientado a objetos

public static function **IntlCalendar::createInstance**([IntlTimeZone](class.intltimezone.md)|[DateTimeZone](class.datetimezone.md)|[string](language.types.string.md)|[null](language.types.null.md) `$timezone` = **`null`**, [?](language.types.null.md)[string](language.types.string.md) `$locale` = **`null`**): [?](language.types.null.md)[IntlCalendar](class.intlcalendar.md)

Estilo procedural

function **intlcal\_create\_instance**([IntlTimeZone](class.intltimezone.md)|[DateTimeZone](class.datetimezone.md)|[string](language.types.string.md)|[null](language.types.null.md) `$timezone` = **`null`**, [?](language.types.null.md)[string](language.types.string.md) `$locale` = **`null`**): [?](language.types.null.md)[IntlCalendar](class.intlcalendar.md)

Informados um fuso horário e uma localidade, este método cria um
objeto [IntlCalendar](class.intlcalendar.md). Este método de criação pode retornar
uma sub-classe de [IntlCalendar](class.intlcalendar.md).

O calendário criado representará o instante de tempo no qual foi
criado, baseado no horário do sistema. Os campos podem ser todos limpos chamando-se
**IntCalendar::clear()** sem argumentos. Veja também
[IntlGregorianCalendar::\_\_construct()](intlgregoriancalendar.construct.md).

### Parâmetros

`timezone`
:   O fuso horário a ser utilizado.

    - **`null`**, neste caso o fuso horário padrão será usado, como especificado na
      configuração ini [date.timezone](datetime.configuration.md#ini.date.timezone) ou
      através da função [date\_default\_timezone\_set()](function.date-default-timezone-set.md) e como
      retornado por [date\_default\_timezone\_get()](function.date-default-timezone-get.md).
    - Um objeto [IntlTimeZone](class.intltimezone.md), que será usado diretamente.
    - Um objeto [DateTimeZone](class.datetimezone.md). Seu identificador será extraído
      e um objeto de fuso horário ICU será criado; o fuso horário será apoiado
      pelo banco de dados da ICU, não pelo do PHP.
    - Uma [string](language.types.string.md), que deve ser um identificador de fuso horário ICU válido.
      Consulte a função [IntlTimeZone::createTimeZoneIDEnumeration()](intltimezone.createtimezoneidenumeration.md). Deslocamentos
      puros como `"GMT+08:30"` também são aceitos.

`locale`
:   A localidade a ser utilizada ou **`null`** para usar [a localidade padrão](intl.configuration.md#ini.intl.default-locale).

### Valor Retornado

A instância [IntlCalendar](class.intlcalendar.md) criada ou **`null`** em
caso de falha.

### Examples

**Exemplo #1 **IntlCalendar::createInstance()****

```
<?php
ini_set('intl.default_locale', 'es_ES');
ini_set('date.timezone', 'Europe/Madrid');

$cal = IntlCalendar::createInstance();
echo "Sem argumentos\n";
var_dump(get_class($cal),
        IntlDateFormatter::formatObject($cal, IntlDateFormatter::FULL));
echo "\n";

echo "Fuso horário explicitado\n";
$cal = IntlCalendar::createInstance(IntlTimeZone::getGMT());
var_dump(get_class($cal),
        IntlDateFormatter::formatObject($cal, IntlDateFormatter::FULL));
echo "\n";

echo "Localidade explicitada (com calendário)\n";
$cal = IntlCalendar::createInstance(NULL, 'es_ES@calendar=persian');
var_dump(get_class($cal),
        IntlDateFormatter::formatObject($cal, IntlDateFormatter::FULL));
```

O exemplo acima produzirá:

```
Sem argumentos
string(21) "IntlGregorianCalendar"
string(68) "martes 18 de junio de 2013 14:11:02 Hora de verano de Europa Central"

Fuso horário explicitado
string(21) "IntlGregorianCalendar"
string(45) "martes 18 de junio de 2013 12:11:02 GMT+00:00"

Localidade explicitada (com calendário)
string(12) "IntlCalendar"
string(70) "martes 28 de Khordad de 1392 14:11:02 Hora de verano de Europa Central"
```

### Veja também

- [IntlGregorianCalendar::\_\_construct()](intlgregoriancalendar.construct.md) - Cria um objeto de calendário gregoriano

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
